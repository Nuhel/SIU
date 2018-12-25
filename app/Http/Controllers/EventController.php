<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $department = base64_decode(Session::get('discipline'));
        $data = Event::select(
            'events.*'
        )
        ->where('department', $department)
            ->paginate(2);
        return view('dashboard.showtables.all_event')->with('data',$data);
    }

     public function SearchEvent()
    {
        $q = Input::get ( 'q' );
        $department = base64_decode(Session::get('discipline'));

       	if($q != ""){
    $students = Event::where('department',$department)
            ->where(function ($logic) {
                    $q=Input::get ( 'q' );
                
                    $logic->where ( 'title', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
                    ->orWhere ( 'notice_date', 'LIKE', '%' . Input::get ( 'q' ) . '%' );
                })
            ->select(
                 'events.*'
                 )
            ->orderBy('id','desc')
            ->paginate(1)
            ->setPath ( '' );
	$pagination = $students->appends ( array (
				'q' => Input::get ( 'q' ),
		) );
    if (count ( $students ) > 0)
          
		return view ( 'dashboard.showtables.all_event' )->withDetails ( $students )->withQuery ( $q )->with('discipline',$department);
        
    }
    return view ( 'dashboard.showtables.all_event')->withMessage ( 'No Details found. Try to search again !' )->with('discipline',$department);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.insertforms.addEvent');
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
            $path = $request->file('image')->storeAs('public/uploaded/event/',$fileNameToStore);

        }else{
            $fileNameToStore = "no_image.jpg";
        }


        $department = base64_decode(Session::get('discipline'));

        $event_data = new Event();
        $event_data ->title = $request->title;
        $event_data ->description = $request->description;
        $event_data ->notice_date = $request->notice_date;
        $event_data ->is_pinned = $request->is_pinned;
        $event_data ->department =$department;
        $event_data ->image = $fileNameToStore;
        $event_data ->status = '0';

        $event_data->save();
        $notification = array(
            'eventCreateSuccess' => 'Successfully Added',
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
        $data =Event::find($idDecoded);
        return view('dashboard.updateforms.update_event',compact('data'));
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
        $event_data = Event::find($id);
        $title = $request->title;

        if( strlen($title)>30){
            return back()->withErrors(['title'=>'Allowed Title Length is 30 character'])->withInput();
        }

        $oldfile=$request->get('old_image');

        if($request->hasFile('new_image')){
            $url="storage/uploaded/event/";
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
            $path = $request->file('new_image')->storeAs('public/uploaded/event/',$fileNameToStore);

        }else{
            $fileNameToStore =$oldfile;
        }


        $department = base64_decode(Session::get('discipline'));


        $event_data ->title = $request->title;
        $event_data ->description = $request->description;
        $event_data ->notice_date = $request->notice_date;
        $event_data ->is_pinned = $request->is_pinned;
        $event_data ->department =$department;
        $event_data ->image = $fileNameToStore;
        $event_data ->status = '0';

        $event_data->save();
        $notification = array(
            'eventSuccessUpdate' => 'Successfully Added!',
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
    Event::find ( $request->id )->delete ();
      $picture=$request->picture;
      $url="storage/uploaded/event/";
      $image_path=$url.$picture;
      if(file_exists( $image_path)){
                unlink($image_path);
     }
	return response ()->json ();
    }
}
