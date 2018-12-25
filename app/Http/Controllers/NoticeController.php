<?php

namespace App\Http\Controllers;

use App\Notice;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = base64_decode(Session::get('discipline'));
        //->where('isActive','Active')
        $data = Notice::select(
            'notices.*'
        )
        ->where('department', $department)
            ->paginate(2);
        return view('dashboard.showtables.all_notice')->with('data',$data);
    }

     public function SearchNotice()
    {
        $q = Input::get ( 'q' );
        $department = base64_decode(Session::get('discipline'));

       	if($q != ""){
    $students = Notice::where('department',$department)
            ->where(function ($logic) {
                    $q=Input::get ( 'q' );
                
                    $logic->where ( 'title', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
                    ->orWhere ( 'notice_date', 'LIKE', '%' . Input::get ( 'q' ) . '%' );
                })
            ->select(
                 'notices.*'
                 )
            ->orderBy('id','desc')
            ->paginate(1)
            ->setPath ( '' );
	$pagination = $students->appends ( array (
				'q' => Input::get ( 'q' ),
		) );
    if (count ( $students ) > 0)
          
		return view ( 'dashboard.showtables.all_notice' )->withDetails ( $students )->withQuery ( $q )->with('discipline',$department);
        
    }
    return view ( 'dashboard.showtables.all_notice')->withMessage ( 'No Details found. Try to search again !' )->with('discipline',$department);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.insertforms.addNotice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request,[
                'title' => 'required',
                'description' => 'required',
                'department' => 'required',
                'notice_date' => 'required',
                'is_pinned' => 'required|in:0,1',
            ]);

            $title = $request->title;
            if( strlen($title)>30){
                return back()->withErrors(['title'=>'Allowed Title Length is 30 character'])->withInput();
            }

        if($request->hasFile('image')){
            //file name with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST EXT
            $extension = $request->file('image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('image')->storeAs('public/uploaded/notice/',$fileNameToStore);

        }else{
            $fileNameToStore = "no_image.jpg";
        }


            $department = base64_decode(Session::get('discipline'));

            $notices_data = new Notice();
            $notices_data ->title = $request->title;
            $notices_data ->description = $request->description;
            $notices_data ->notice_date = $request->notice_date;
            $notices_data ->is_pinned = $request->is_pinned;
            $notices_data ->department =$department;
            $notices_data ->image = $fileNameToStore;
            $notices_data ->status = '0';

            $notices_data->save();
        $notification = array(
            'noticeSuccess' => 'Successfully Added',
        );
        return back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $idDecoded=base64_decode($id);
        $data =Notice::find($idDecoded);
        return view('dashboard.updateforms.update_notice',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'department' => 'required',
            'notice_date' => 'required',
            'is_pinned' => 'required|in:0,1',
        ]);

        $title = $request->title;

        if( strlen($title)>30){
            return back()->withErrors(['title'=>'Allowed Title Length is 30 character'])->withInput();
        }

        $oldfile=$request->get('old_image');

        if($request->hasFile('new_image')){
            $url="storage/uploaded/notice/";
            $image_path=$url.$oldfile;

            if(file_exists( $image_path)){
                unlink($image_path);
            }

            //file name with extension
            $fileNameWithExt = $request->file('new_image')->getClientOriginalName();
            //get just file name
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //GET JUST EXT
            $extension = $request->file('new_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('new_image')->storeAs('public/uploaded/notice/',$fileNameToStore);

        }else{
            $fileNameToStore =$oldfile;
        }


        $department = base64_decode(Session::get('discipline'));

        $notices_data = Notice::find($id);
        $notices_data ->title = $request->title;
        $notices_data ->description = $request->description;
        $notices_data ->notice_date = $request->notice_date;
        $notices_data ->is_pinned = $request->is_pinned;
        $notices_data ->department =$department;
        $notices_data ->image = $fileNameToStore;
        $notices_data ->status = '0';

        $notices_data->save();
        $notification = array(
            'noticeSuccessUpdate' => 'Successfully Added',
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
    Notice::find ( $request->id )->delete ();
      $picture=$request->picture;
      $url="storage/uploaded/notice/";
      $image_path=$url.$picture;
      if(file_exists( $image_path)){
                unlink($image_path);
     }
	return response ()->json ();
    }
}
