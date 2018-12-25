<?php

namespace App\Http\Controllers;

use App\StudentInfoModel;
use App\StudentUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
         return view('dashboard.insertforms.addStudentInfo');
    }

    public function updaterequest($id)
    {
        //
        $id5=base64_decode($id);
        $id=$id5;
        $data = StudentInfoModel::where('id',$id)->first();
        
         return view('dashboard.updateforms.updateStudentInfo')->with('id',$id)->with('data',$data);
    }
    public function AllStudents()
    {
        //
        //->where('isActive','Active')
        $data = StudentInfoModel::select(
            'student_info.*'
            )
            ->paginate(2);
         return view('dashboard.showtables.all_students')->with('data',$data);
    }
    public function DepartmentalStudents($discipline)
    {
        $St_discipline=base64_decode($discipline);
        $data = StudentInfoModel::select(
            'student_info.*'
            )->where('discipline',$St_discipline)
            ->where('isActive','Active')
            ->paginate(2);
         return view('dashboard.showtables.departmentalStudents')->with('data',$data)->with('discipline',$discipline);
    }

       public function departmentalStudentSearch($discipline)
    {
$q = Input::get ( 'q' );
$thisDiscipline=base64_decode($discipline);

       	if($q != ""){
    $students = StudentInfoModel::
             where('isActive','Active')
             ->where('discipline',$thisDiscipline)
            ->where(function ($logic) {
                    $q=Input::get ( 'q' );
                
                    $logic->where ( 'student_name', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
                    ->orWhere ( 'registration_number', 'LIKE', '%' . Input::get ( 'q' ) . '%' )

                    ->orWhere ( 'roll_number', 'LIKE', '%' . Input::get ( 'q' ) . '%' )

                    ->orWhere ( 'discipline', 'LIKE', '%' . Input::get ( 'q' ) . '%' )

                    ->orWhere ( 'isActive', 'LIKE', '%' . Input::get ( 'q' ) . '%' );
                })
            ->select(
                 'student_info.*'
                 )
            ->orderBy('roll_number','asc')
            ->paginate(1)
            ->setPath ( '' );
	$pagination = $students->appends ( array (
				'q' => Input::get ( 'q' ),
		) );
    if (count ( $students ) > 0)
          
		return view ( 'dashboard.showtables.departmentalStudents' )->withDetails ( $students )->withQuery ( $q )->with('discipline',$discipline);
        
    }
    return view ( 'dashboard.showtables.departmentalStudents')->withMessage ( 'No Details found. Try to search again !' )->with('discipline',$discipline);


    }







         public function studentInformationSearch()
    {
        //
    // where('isActive','Active')
    $q = Input::get ( 'q' );
	if($q != ""){
    $data = StudentInfoModel::
    where(function ($logic) {
    $logic->where ( 'student_name', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
    ->orWhere ( 'registration_number', 'LIKE', '%' . Input::get ( 'q' ) . '%' )
  
    ->orWhere ( 'roll_number', 'LIKE', '%' . Input::get ( 'q' ) . '%' )

    ->orWhere ( 'discipline', 'LIKE', '%' . Input::get ( 'q' ) . '%' )

     ->orWhere ( 'isActive', 'LIKE', '%' . Input::get ( 'q' ) . '%' );
    
    
})->paginate (2)->setPath ( '' );
	$pagination = $data->appends ( array (
				'q' => Input::get ( 'q' ) 
		) );
    if (count ( $data ) > 0)
		return view ( 'dashboard.showtables.all_students' )->withDetails ( $data )->withQuery ( $q );
	}
		return view ( 'dashboard.showtables.all_students')->withMessage ( 'No Details found. Try to search again !' );
    
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
        $this->validate($request,[
            'student_name' => 'required',
            'picture' => 'required|mimes:jpg,jpeg,png,gif',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'dob' => 'required',
            'registration_number' => 'required|numeric|max:999999999|min:100000000',
            'academic_year' => 'required|numeric',
            'discipline' => 'required|in:CSE,BBA,EEE,LLB,ECE,ENG',
            'roll_number' => 'required|numeric|max:99999|min:10000',
            'doa' => 'required',
            'emargency_contact_address' => 'required',
            'emargency_contact_number' => 'required|regex:/(01)[0-9]{9}/',
            'permanent_address' => 'required',
            'permanent_address_number' =>  'required|regex:/(01)[0-9]{9}/',
            'mailing_address' => 'required',
            'mailing_address_number' =>  'required|regex:/(01)[0-9]{9}/',
            'legal_guardian_name' => 'nullable',
            'legal_guardian_address' => 'nullable',
            'legal_guardian_phone_number' => 'nullable|regex:/(01)[0-9]{9}/',
            'personal_email' => 'required|string|email|max:255',
            'authorized_email' => 'required|string|email|max:255',

        ]);


        $DataExist =StudentInfoModel::select('id')
        ->where('roll_number', '=', $request->get('roll_number'))
        ->where('discipline', '=', $request->get('discipline'))
        ->get();
        if(count($DataExist)>0){
            return back()->withErrors(['roll_number'=>'This roll number is taken'])->withInput();
        }
        $DataExist3 =StudentInfoModel::select('id')
        ->where('registration_number', '=', $request->get('registration_number'))
        ->get();
        if(count($DataExist3)>0){
            return back()->withErrors(['registration_number'=>'This registration number is taken'])->withInput();
        }
        $DataExist4 =StudentInfoModel::select('id')
        ->where('personal_email', '=', $request->get('personal_email'))
        ->get();
        if(count($DataExist4)>0){
            return back()->withErrors(['personal_email'=>'This personal email is taken'])->withInput();
        }

        $DataExist5 =StudentInfoModel::select('id')
        ->where('authorized_email', '=', $request->get('authorized_email'))
        ->get();
        if(count($DataExist5)>0){
            return back()->withErrors(['authorized_email'=>'This authorized email is taken'])->withInput();
        }
        $DataExist2 =StudentInfoModel::select('id')
        ->where('student_name', '=', $request->get('student_name'))
        ->where('fathers_name', '=', $request->get('fathers_name'))
        ->where('mothers_name', '=', $request->get('mothers_name'))
        ->where('dob', '=', $request->get('dob'))
        ->get();
        if(count($DataExist2)>0){
            return back()->withErrors(['student_name'=>'Already Added'])->withInput();
        }

        if($request->hasFile('picture')){
            //file name with extension
                $fileNameWithExt = $request->file('picture')->getClientOriginalName();
                //get just file name
                $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                //GET JUST EXT
                $extension = $request->file('picture')->getClientOriginalExtension();
                //file name to store
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
    
                //Upload Image
                $path = $request->file('picture')->storeAs('public/uploaded/students/',$fileNameToStore);
    
            }else{
                $filenameTStore = "no_image.jpg";
            }



        $student_name = $request->get('student_name');
        $fathers_name = $request->get('fathers_name');
        $mothers_name = $request->get('mothers_name');
        $dob = $request->get('dob');
        $registration_number = $request->get('registration_number');
        $academic_year = $request->get('academic_year');
        $discipline = $request->get('discipline');
        $roll_number = $request->get('roll_number');
        $doa = $request->get('doa');
        $emargency_contact_address= $request->get('emargency_contact_address');
        $emargency_contact_number = $request->get('emargency_contact_number');
        $permanent_address = $request->get('permanent_address');
        $permanent_address_number = $request->get('permanent_address_number');
        $mailing_address = $request->get('mailing_address');
        $mailing_address_number = $request->get('mailing_address_number');
        $legal_guardian_name = $request->get('legal_guardian_name');
        $legal_guardian_address = $request->get('legal_guardian_address');
        $legal_guardian_phone_number = $request->get('legal_guardian_phone_number');
        $personal_email = $request->get('personal_email');
        $authorized_email = $request->get('authorized_email');
    


        $StudentInfoModel= new StudentInfoModel();

        $StudentInfoModel->student_name= $student_name;
        $StudentInfoModel->picture= $fileNameToStore;
        $StudentInfoModel->fathers_name= $fathers_name;
        $StudentInfoModel->mothers_name= $mothers_name;
        $StudentInfoModel->dob= $dob;
        $StudentInfoModel->registration_number= $registration_number;
        $StudentInfoModel->academic_year= $academic_year;
        $StudentInfoModel->discipline= $discipline;
        $StudentInfoModel->roll_number= $roll_number;
        $StudentInfoModel->doa= $doa;
        $StudentInfoModel->emargency_contact_address= $emargency_contact_address;
        $StudentInfoModel->emargency_contact_number= $emargency_contact_number;
        $StudentInfoModel->permanent_address= $permanent_address;
        $StudentInfoModel->permanent_address_number= $permanent_address_number;
        $StudentInfoModel->mailing_address= $mailing_address;
        $StudentInfoModel->mailing_address_number= $mailing_address_number;
        $StudentInfoModel->legal_guardian_name= $legal_guardian_name;
        $StudentInfoModel->legal_guardian_address= $legal_guardian_address;
        $StudentInfoModel->legal_guardian_phone_number= $legal_guardian_phone_number;
        $StudentInfoModel->personal_email= $personal_email;
        $StudentInfoModel->authorized_email= $authorized_email;
        $StudentInfoModel->isActive="Active";



        // add other fields
        $StudentInfoModel->save();

         $current_S_id =StudentInfoModel::select('id')
        ->where('registration_number', '=',$registration_number)
        ->first();

        $StudentUser= new StudentUser();
        $StudentUser->s_id= $current_S_id->id;
        $StudentUser->email=$personal_email;
        $StudentUser->password= Hash::make($registration_number);
        $StudentUser->updateRequest= '133';
        $StudentUser->status='1';
        $StudentUser->save();
        $notification = array(
                'studentSuccess' => 'Successfully Added',
            );
           return back()->with($notification);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentInfoModel  $studentInfoModel
     * @return \Illuminate\Http\Response
     */
    public function show(StudentInfoModel $studentInfoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentInfoModel  $studentInfoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentInfoModel $studentInfoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentInfoModel  $studentInfoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        
        //
        
        $this->validate($request,[
            'student_name' => 'required',
            'picture' => 'nullable|mimes:jpg,jpeg,png,gif',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'dob' => 'required',
            'registration_number' => 'required|numeric|max:999999999|min:100000000',
            'academic_year' => 'required|numeric',
            'discipline' => 'required|in:CSE,EEE,BBA,LLB,ECE,ENG',
            'roll_number' => 'required|numeric|max:99999|min:10000',
            'doa' => 'required',
            'emargency_contact_address' => 'required',
            'emargency_contact_number' => 'required|regex:/(01)[0-9]{9}/',
            'permanent_address' => 'required',
            'permanent_address_number' =>  'required|regex:/(01)[0-9]{9}/',
            'mailing_address' => 'required',
            'mailing_address_number' =>  'required|regex:/(01)[0-9]{9}/',
            'legal_guardian_name' => 'nullable',
            'legal_guardian_address' => 'nullable',
            'legal_guardian_phone_number' => 'nullable|regex:/(01)[0-9]{9}/',
            'personal_email' => 'required|string|email|max:255',
            'authorized_email' => 'required|string|email|max:255',
            'isActive' => 'required|in:Active,InActive',
        ]);
        $id=$request->get('id');
        $oldfile=$request->get('old_picture');

    if($request->hasFile('picture')){
      $url="storage/uploaded/students/";
      $image_path=$url.$oldfile;
       unlink($image_path );
      
            //file name with extension
                $fileNameWithExt = $request->file('picture')->getClientOriginalName();
                //get just file name
                $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                //GET JUST EXT
                $extension = $request->file('picture')->getClientOriginalExtension();
                //file name to store
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
    
                //Upload Image
                $path = $request->file('picture')->storeAs('public/uploaded/students/',$fileNameToStore);
    
            }else{
                $fileNameToStore =$oldfile;
            }

        $DataExist =StudentInfoModel::select('id')
        ->where('roll_number', '=', $request->get('roll_number'))
        ->where('discipline', '=', $request->get('discipline'))
        ->where('id', '!=', $id)
        ->get();
        if(count($DataExist)>0){
            return back()->withErrors(['roll_number'=>'This roll number is taken'])->withInput();
        }
        $DataExist3 =StudentInfoModel::select('id')
        ->where('registration_number', '=', $request->get('registration_number'))
        ->where('id', '!=', $id)
        ->get();
        if(count($DataExist3)>0){
            return back()->withErrors(['registration_number'=>'This registration number is taken'])->withInput();
        }
        $DataExist4 =StudentInfoModel::select('id')
        ->where('personal_email', '=', $request->get('personal_email'))
        ->where('id', '!=', $id)
        ->get();
        if(count($DataExist4)>0){
            return back()->withErrors(['personal_email'=>'This personal email is taken'])->withInput();
        }

        $DataExist5 =StudentInfoModel::select('id')
        ->where('authorized_email', '=', $request->get('authorized_email'))
        ->where('id', '!=', $id)
        ->get();
        if(count($DataExist5)>0){
            return back()->withErrors(['authorized_email'=>'This authorized email is taken'])->withInput();
        }
        $DataExist2 =StudentInfoModel::select('id')
        ->where('student_name', '=', $request->get('student_name'))
        ->where('fathers_name', '=', $request->get('fathers_name'))
        ->where('mothers_name', '=', $request->get('mothers_name'))
        ->where('dob', '=', $request->get('dob'))
        ->where('id', '!=', $id)
        ->get();
        if(count($DataExist2)>0){
            return back()->withErrors(['student_name'=>'Already Added'])->withInput();
        }

        $student_name = $request->get('student_name');
        $fathers_name = $request->get('fathers_name');
        $mothers_name = $request->get('mothers_name');
        $dob = $request->get('dob');
        $registration_number = $request->get('registration_number');
        $academic_year = $request->get('academic_year');
        $discipline = $request->get('discipline');
        $roll_number = $request->get('roll_number');
        $doa = $request->get('doa');
        $emargency_contact_address= $request->get('emargency_contact_address');
        $emargency_contact_number = $request->get('emargency_contact_number');
        $permanent_address = $request->get('permanent_address');
        $permanent_address_number = $request->get('permanent_address_number');
        $mailing_address = $request->get('mailing_address');
        $mailing_address_number = $request->get('mailing_address_number');
        $legal_guardian_name = $request->get('legal_guardian_name');
        $legal_guardian_address = $request->get('legal_guardian_address');
        $legal_guardian_phone_number = $request->get('legal_guardian_phone_number');
        $personal_email = $request->get('personal_email');
        $authorized_email = $request->get('authorized_email');
        $isActive=$request->get('isActive');
    

        $StudentInfoModel = StudentInfoModel::find($id);
        $StudentInfoModel->student_name= $student_name;
        $StudentInfoModel->picture= $fileNameToStore;
        $StudentInfoModel->fathers_name= $fathers_name;
        $StudentInfoModel->mothers_name= $mothers_name;
        $StudentInfoModel->dob= $dob;
        $StudentInfoModel->registration_number= $registration_number;
        $StudentInfoModel->academic_year= $academic_year;
        $StudentInfoModel->discipline= $discipline;
        $StudentInfoModel->roll_number= $roll_number;
        $StudentInfoModel->doa= $doa;
        $StudentInfoModel->emargency_contact_address= $emargency_contact_address;
        $StudentInfoModel->emargency_contact_number= $emargency_contact_number;
        $StudentInfoModel->permanent_address= $permanent_address;
        $StudentInfoModel->permanent_address_number= $permanent_address_number;
        $StudentInfoModel->mailing_address= $mailing_address;
        $StudentInfoModel->mailing_address_number= $mailing_address_number;
        $StudentInfoModel->legal_guardian_name= $legal_guardian_name;
        $StudentInfoModel->legal_guardian_address= $legal_guardian_address;
        $StudentInfoModel->legal_guardian_phone_number= $legal_guardian_phone_number;
        $StudentInfoModel->personal_email= $personal_email;
        $StudentInfoModel->authorized_email= $authorized_email;
        $StudentInfoModel->isActive=$isActive;
        // add other fields
        $StudentInfoModel->save();

        $notification = array(
                'studentUpdateSuccess' => 'Successfully Updated',
            );
           return back()->with($notification);
    }


     public function destroy(Request $request)
    {
    StudentInfoModel::find ( $request->id )->delete ();
      $picture=$request->picture;
      $url="storage/uploaded/students/";
      $image_path=$url.$picture;
      if(file_exists( $image_path)){
                unlink($image_path);
     }
	return response ()->json ();
    }
}

