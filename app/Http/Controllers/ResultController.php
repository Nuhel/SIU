<?php

namespace App\Http\Controllers;
use App\StudentInfoModel;
use App\SubjectModel;
use App\ResultModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         $id5=base64_decode($id);
         $data = StudentInfoModel::where('id',$id5)->first();
        return view('dashboard.insertforms.addResult')->with('s_id',$id5)->with('data',$data);
         
         

    }
        public function indexCustom($id)
    {
         $id5=base64_decode($id);
         $data = StudentInfoModel::where('id',$id5)->first();
        return view('dashboard.insertforms.addCustomResult')->with('s_id',$id5)->with('data',$data);
         
         

    }

        public function showResult($discipline)
    {
            $thisDiscipline=base64_decode($discipline);

          $data= ResultModel::
             join('student_info', 'result_history.s_id', '=', 'student_info.id')
             ->join('subjects', 'result_history.course_id', '=', 'subjects.id')
             ->where('student_info.isActive','Active')
             ->where('student_info.discipline',$thisDiscipline)
            ->select(
                 'student_info.picture',
                 'student_info.student_name',
                 'student_info.registration_number',
                 'student_info.discipline',
                 'student_info.roll_number',
                 'result_history.*',
                 'subjects.course_title',
                 'subjects.course_code',
                 'subjects.course_credit'

                 )
            ->orderBy('id','desc')
            ->paginate(5);

           
            
         return view('dashboard.showtables.resultshow')->with('data',$data)->with('discipline',$discipline);
         

    }


        public function departmentalResultSearch($discipline)
    {
$q = Input::get ( 'q' );
$thisDiscipline=base64_decode($discipline);

       	if($q != ""){
    $students = ResultModel::
            join('student_info', 'result_history.s_id', '=', 'student_info.id')
            ->join('subjects', 'result_history.course_id', '=', 'subjects.id')
             ->where('student_info.isActive','Active')
             ->where('student_info.discipline',$thisDiscipline)
            ->where(function ($logic) {
                    $q=Input::get ( 'q' );

                $logic->where ( 'student_info.student_name', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'student_info.registration_number', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'student_info.roll_number', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'student_info.discipline', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'result_history.semester', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'result_history.exam_semester', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'subjects.course_code', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'subjects.course_credit', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'result_history.gpa', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'result_history.grade', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'result_history.remarks', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'result_history.status', 'LIKE', '%' . $q . '%' );
                })
            ->select(
                 'student_info.picture',
                 'student_info.student_name',
                 'student_info.registration_number',
                 'student_info.discipline',
                 'student_info.roll_number',
                 'result_history.*',
                 'subjects.course_title',
                 'subjects.course_code',
                 'subjects.course_credit'
                 )
            ->orderBy('roll_number','desc')
            ->paginate(1)
            ->setPath ( '' );
	$pagination = $students->appends ( array (
				'q' => Input::get ( 'q' ),
		) );
    if (count ( $students ) > 0)
          
		return view ( 'dashboard.showtables.resultshow' )->withDetails ( $students )->withQuery ( $q )->with('discipline',$discipline);
        
    }
    return view ( 'dashboard.showtables.resultshow')->withMessage ( 'No Details found. Try to search again !' )->with('discipline',$discipline);


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
        $this->validate($request,[
            'exam_session'=>'required',
            'exam_year'=>'required',
            's_id' => 'required',
            'semester' => 'required|in:1-1,1-2,2-1,2-2,3-1,3-2,4-1,4-2',
            'result.*' => 'required|in:0.00,2.00,2.25,2.50,2.75,3.00,3.25,3.50,3.75,4.00',
            'subid.*'=>'required',
            'subtype.*'=>'required',
            'discipline' => 'required|in:CSE,BBA,LLB,ECE,ENG,EEE',
            

        ]);

        $DeclaredResult=array();
        $DeclaredResultIndex=0;

        $s_id = $request->get('s_id');
        $semester = $request->get('semester');
        $discipline = $request->get('discipline');
        $subid = $request->get('subid');
        $subtype=$request->get('subtype');
        $result = $request->get('result');
        $exam_session = $request->get('exam_session')." ".$request->get('exam_year');
 

        if($subid==null){
             $notification = array(
                'NoSubject' => 'Not added',
            );
           return back()->with($notification);
        }
        else{

            $isExist=ResultModel::where('s_id', '=',$s_id)
                        ->where('exam_semester', '=', $exam_session)
                        ->get();
     
                    if (count($isExist)>0) {
                        return back()->withErrors(['exam_session'=>'Result Already Been Published For This Session'])->withInput();
                    }

        else{


            $subjectCount=count($subid);
            
            for ($i=0; $i <$subjectCount ; $i++) { 
                $data =SubjectModel::select('course_code','course_title','course_credit')
                    ->where('id', '=', $subid[$i])
                    ->where('discipline', '=', $discipline)
                    ->first();

        $grade=null;
        $remarks=null;

        if($result[$i]==4.00){
            $grade="A+";
            $remarks="Outstanding";
        }
        elseif ($result[$i]==3.75) {
            $grade="A";
            $remarks="Excellent";
        }
        elseif ($result[$i]==3.50) {
            $grade="A-";
            $remarks="Very Good";
        }
        elseif ($result[$i]==3.25) {
            $grade="B+";
            $remarks="Good";
        }
        elseif ($result[$i]==3.00) {
            $grade="B";
            $remarks="Above Average";
        }
        elseif ($result[$i]==2.75) {
            $grade="B-";
            $remarks="Average";
        }
        elseif ($result[$i]==2.50) {
            $grade="C+";
            $remarks="Below Average";
        }
        elseif ($result[$i]==2.25) {
            $grade="C";
            $remarks="Poor";
        }
        elseif ($result[$i]==2.00) {
            $grade="D";
            $remarks="Very Poor";
        }
        elseif ($result[$i]==0.00) {
            $grade="F";
            $remarks="Failing";
        }

        $oldId='ABC';

        if($subtype[$i]!='Regular'){
               
             $isoldDeclared =ResultModel::select('should_show','id')
                    ->where('s_id', '=', $s_id)
                    ->where('course_id', '=', $subid[$i])
                    ->where('should_show', '=', '1')
                    ->first();

                if($isoldDeclared){
                        //OldResultFound
                    $oldId=$isoldDeclared->id;
                }
                else{
                     return back()->withErrors(['OldDataNotFound'=>'Old Result Not Found For Subject '.$data->course_code.' You Must Have Old Result Available To Update'])->withInput();
                }
        }



        $DeclaredResult[$DeclaredResultIndex]=[
            's_id'=>$s_id,
            'semester'=>$semester,
            'exam_semester'=>$exam_session,
            'course_id'=>$subid[$i],
            'course_code'=>$data->course_code,
            'course_title'=>$data->course_title,
            'credit'=>$data->course_credit,
            'gpa'=>$result[$i],
            'grade'=>$grade,
            'remarks'=>$remarks,
            'status'=>$subtype[$i],
            'should_show'=>'1',
            'oldId'=>$oldId,
        ];
        $DeclaredResultIndex++;
     
            }
             
           return back()->with('DeclaredResult',$DeclaredResult);

        }
    }
        


    }
     public function AddResultConfirmed(Request $request)
    {
          $ConfirmedResult=$request->confirmedData;
          $unserializedData= unserialize($ConfirmedResult);
           
            $countResult=count($unserializedData);
            for ($i=0; $i <$countResult ; $i++) { 
                if($unserializedData[$i]['status']!='Regular'){
               $ResultModelUpdate = ResultModel::find($unserializedData[$i]['oldId']);
               $ResultModelUpdate->should_show= '0';
               $ResultModelUpdate->save();
                }
              
                $ResultModel= new ResultModel();
                $ResultModel->s_id= $unserializedData[$i]['s_id'];
                $ResultModel->semester= $unserializedData[$i]['semester'];
                $ResultModel->exam_semester=$unserializedData[$i]['exam_semester'];
                $ResultModel->course_id=$unserializedData[$i]['course_id'];
                $ResultModel->gpa= $unserializedData[$i]['gpa'];
                $ResultModel->grade=$unserializedData[$i]['grade'];
                $ResultModel->remarks=$unserializedData[$i]['remarks'];
                $ResultModel->status= $unserializedData[$i]['status'];
                $ResultModel->should_show= $unserializedData[$i]['should_show'];
                $ResultModel->save();
            

            }          
       


         $notification = array(
                'ResultSuccess' => 'Successfully Added',
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
