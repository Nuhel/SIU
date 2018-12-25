<?php

namespace App\Http\Controllers;
use App\StudentInfoModel;
use App\SubjectModel;
use App\ResultModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
      {
         $id5=base64_decode($id);
        $id=$id5;
     
        $StudentInfo = StudentInfoModel::where('id',$id)->first();
          
        $result = ResultModel::
         join('subjects', 'result_history.course_id', '=', 'subjects.id')
        ->select(
                'subjects.course_title',
                'subjects.course_code',
                'subjects.course_credit',
                'result_history.*'
                )
        ->where('s_id', '=', $id)
        ->where('should_show', '=', '1')
        ->orderBy('semester','desc')
        ->get();

            
    $exam_result=$result->groupBy('exam_semester');

     return view('dashboard.student_profile.profile')->with('id',$id)->with('StudentInfo',$StudentInfo)->with('exam_result',$exam_result);
  

    
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
