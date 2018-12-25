<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Teacher::select(
            'teachers.*'
        )
            ->paginate(2);
        return view('dashboard.showtables.all_teachers')->with('data',$data);
    }
    
     public function SearchTeacher()
    {
        $q = Input::get ( 'q' );

       	if($q != ""){
    $students = Teacher::
            where(function ($logic) {
                    $q=Input::get ( 'q' );
                
                    $logic->where ( 'name', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
                    ->orwhere ( 'phone', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
                     ->orwhere ( 'email', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
                      ->orwhere ( 'designation', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
                       ->orwhere ( 'department', 'LIKE', '%' . Input::get ( 'q' ) . '%' );
                })
            ->select(
                 'teachers.*'
                 )
            ->orderBy('id','asc')
            ->paginate(1)
            ->setPath ( '' );
	$pagination = $students->appends ( array (
				'q' => Input::get ( 'q' ),
		) );
    if (count ( $students ) > 0)
          
		return view ( 'dashboard.showtables.all_teachers' )->withDetails ( $students )->withQuery ( $q );
        
    }
    return view ( 'dashboard.showtables.all_teachers')->withMessage ( 'No Details found. Try to search again !' );


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.insertforms.addTeacher');
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
            'name'  => 'required',
            'phone'  => 'required|regex:/(01)[0-9]{9}/',
            'designation'  => 'required',
            'department'  => 'required|in:CSE,BBA,EEE,CSI,LLB,ECE,English',
            'email'  => 'required|email',
            'facebook'  => 'required',
        ]);

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
            $path = $request->file('image')->storeAs('public/uploaded/teacher/',$fileNameToStore);

        }else{
            $fileNameToStore = "no_image.jpg";
        }
        $count = Teacher::count();


        $teachers_data = new Teacher();
        $teachers_data->name = $request->name;
        $teachers_data->image =$fileNameToStore;
        $teachers_data->phone = $request->phone;
        $teachers_data->email = $request->email;
        $teachers_data->facebook = 'https://www.fb.com/'.$request->facebook;
        $teachers_data->position = 1;
        $teachers_data->linkedin = 'https://www.linkedin.com/in/'.$request->linkedin;
        $teachers_data->department = $request->department;
        $teachers_data->designation = $request->designation;

        $teachers_data->save();

        $notification = array(
            'addTeacher' => 'Successfully Added Teacher',
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
        $data =Teacher::find($idDecoded);
        return view('dashboard.updateforms.update_teacher',compact('data'));
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
            'name'  => 'required',
            'phone'  => 'required|regex:/(01)[0-9]{9}/',
            'designation'  => 'required',
            'department'  => 'required|in:CSE,BBA,EEE,CSI,LLB,ECE,English',
            'email'  => 'required|email',
            'facebook'  => 'required',
        ]);


        $teachers_data = Teacher::find($id);
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
            $path = $request->file('new_image')->storeAs('public/uploaded/teacher/',$fileNameToStore);

        }else{
            $fileNameToStore =$oldfile;
        }

        $teachers_data->name = $request->name;
        $teachers_data->image =$fileNameToStore;
        $teachers_data->phone = $request->phone;
        $teachers_data->email = $request->email;
        $teachers_data->facebook = $request->facebook;
        $teachers_data->linkedin = $request->linkedin;
        $teachers_data->department = $request->department;
        $teachers_data->designation = $request->designation;

        $teachers_data->save();

        $notification = array(
            'teacherSuccessUpdate' => 'Successfully Updated!',
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
    Teacher::find ( $request->id )->delete ();
      $picture=$request->picture;
      $url="storage/uploaded/teacher/";
      $image_path=$url.$picture;
      if(file_exists( $image_path)){
                unlink($image_path);
     }
	return response ()->json ();
    }
}
