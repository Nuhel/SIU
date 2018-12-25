<?php

namespace App\Http\Controllers;
use App\SubjectModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('dashboard.insertforms.subject_insert');
    }

        public function updateSubject($id)
    {
        //
        $id5=base64_decode($id);
        $id=$id5;
        $data = SubjectModel::where('id',$id)->first();
        
         return view('dashboard.updateforms.updateSubject')->with('id',$id)->with('data',$data);
    }

        public function AllSubjects()
    {
        //
        $data = SubjectModel::select(
            'subjects.*'
            )
            ->paginate(2);
         return view('dashboard.showtables.all_subjects')->with('data',$data);
    }

         public function subjectSearch()
    {
        //
    // where('isActive','Active')
    $q = Input::get ( 'q' );
	if($q != ""){
    $data = SubjectModel::
    where(function ($logic) {
    $logic->where ( 'course_title', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
    ->orWhere ( 'course_code', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
    ->orWhere ( 'course_credit', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
    ->orWhere ( 'discipline', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
    ->orWhere ( 'semester', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
    ->orWhere ( 'isActive', 'LIKE', '%' . Input::get ( 'q' ) . '%' );
    
})->paginate (2)->setPath ( '' );
	$pagination = $data->appends ( array (
				'q' => Input::get ( 'q' ) 
		) );
    if (count ( $data ) > 0)
		return view ( 'dashboard.showtables.all_subjects' )->withDetails ( $data )->withQuery ( $q );
	}
		return view ( 'dashboard.showtables.all_subjects')->withMessage ( 'No Details found. Try to search again !' );
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function fetch(Request $request)
    {  
        $terms = explode('$', $request->combine);
        $semesterID= $terms[0];
        $discipline= $terms[1];
         $data = SubjectModel::where("semester",$semesterID)
         ->where("discipline",$discipline)
            ->pluck("course_code","id");
            
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'course_title' => 'required',
            'course_code' => 'required',
            'course_credit' => 'required|in:1.0,1.5,2.0,2.5,3.0,3.5,4.0',
            'discipline' => 'required|in:CSE,BBA,LLB,ECE,ENG,EEE',
            'semester' => 'required|in:1-1,1-2,2-1,2-2,3-1,3-2,4-1,4-2',

        ]);

        $DataExist =SubjectModel::select('id')
        ->where('course_code', '=', $request->get('course_code'))
        ->where('discipline', '=', $request->get('discipline'))
        ->where('semester', '=', $request->get('semester'))
        ->get();
        if(count($DataExist)>0){
            return back()->withErrors(['course_code'=>'This course is already added for this semester'])->withInput();
        }
        $course_title = $request->get('course_title');
        $course_code = $request->get('course_code');
        $course_credit = $request->get('course_credit');
        $discipline = $request->get('discipline');
        $semester = $request->get('semester');
    

        $SubjectModel= new SubjectModel();

        $SubjectModel->course_title= $course_title;
        $SubjectModel->course_code= $course_code;
        $SubjectModel->course_credit= $course_credit;
        $SubjectModel->discipline= $discipline;
        $SubjectModel->semester= $semester;
        $SubjectModel->isActive="Active";

        // add other fields
        $SubjectModel->save();

        $notification = array(
                'subjectSuccess' => 'Successfully Added',
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $this->validate($request,[
            'course_title' => 'required',
            'course_code' => 'required',
            'course_credit' => 'required|in:1.0,1.5,2.0,2.5,3.0,3.5,4.0',
            'discipline' => 'required|in:CSE,BBA,LLB,ECE,ENG,EEE',
            'semester' => 'required|in:1-1,1-2,2-1,2-2,3-1,3-2,4-1,4-2',
            'isActive' => 'required|in:Active,InActive',

        ]);
        $id=$request->get('id');

        $DataExist =SubjectModel::select('id')
        ->where('course_code', '=', $request->get('course_code'))
        ->where('discipline', '=', $request->get('discipline'))
        ->where('semester', '=', $request->get('semester'))
        ->where('id', '!=', $id)
        ->get();
        if(count($DataExist)>0){
            return back()->withErrors(['course_code'=>'This course is already added for this semester'])->withInput();
        }
    
        $course_title = $request->get('course_title');
        $course_code = $request->get('course_code');
        $course_credit = $request->get('course_credit');
        $discipline = $request->get('discipline');
        $semester = $request->get('semester');
        $isActive=$request->get('isActive');
    

        $SubjectModel = SubjectModel::find($id);
        $SubjectModel->course_title= $course_title;
        $SubjectModel->course_code= $course_code;
        $SubjectModel->course_credit= $course_credit;
        $SubjectModel->discipline= $discipline;
        $SubjectModel->semester= $semester;
        $SubjectModel->isActive=$isActive;
        // add other fields
        $SubjectModel->save();

        $notification = array(
                'SubjectUpdateSuccess' => 'You just updated a subject!',
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
    SubjectModel::find ( $request->id )->delete ();
	return response ()->json ();
    }
}
