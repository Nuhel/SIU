<?php

namespace App\Http\Controllers;
use App\StudentInfoModel;
use App\ResultModel;
use Illuminate\Http\Request;
use App\StudentUser;
use Session;
use Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class StudentLoginController extends Controller
{
   public function index()
      {

  return view('dashboard.student_profile.student_login');
        
    }
          public function getStudentLogout()
{
    Session::flush();
    Session::put('logedOutStudent','logedOut');
    return redirect('/');
}

       public function getLogin(Request $request)
      {

            $this->validate($request,[
            'email'=>'required|email|string|exists:studentuser',
            'password'=>'required'
        ]);

         $DataExist =StudentUser::select('s_id','password')
        ->where('email',$request->get('email')) ->first();
     
            if ($DataExist!=null && Hash::check($request->get('password'), $DataExist->password)) {
        $id=$DataExist->s_id;
     Session::put('VNzLf4w8uRnXOy1SroBBuyYJpdVP8kA2mrzN4a',base64_encode($id));
     Session::put('logedInStudent','logedIn');

        
     return redirect()->route('Profile');
            }

        else{
          return back()->withErrors(['email'=>"These credentials do not match our records."])->withInput();
        }
         
        
    }
           public function getProfile(){

            if (Session::get('VNzLf4w8uRnXOy1SroBBuyYJpdVP8kA2mrzN4a')) {
        $id=base64_decode(Session::get('VNzLf4w8uRnXOy1SroBBuyYJpdVP8kA2mrzN4a'));

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

   
     return view('dashboard.student_profile.student_profile')->with('id',$id)->with('StudentInfo',$StudentInfo)->with('exam_result',$exam_result);
            }

        else{
          return view('dashboard.student_profile.student_login');
        }
         
        
    }




        public function ForGotPasswordRedirect(){
        return view('dashboard.student_profile.forgot_password');

            }

            
        public function ResetPassword(Request $request){
         if (Session::get('dfgaertaefaweyhtrhaswer') && Session::get('sdrteawerrbytrhsrerWA3THS') && Session::get('dgsdervdfgdgdrsdrtfhgdssdf')) {

        $this->validate($request,[
                    'new_pass'=>'required',
                    'confirmation_pass'=>'required'
                ]);

                if ($request->get('new_pass')!=null && $request->get('confirmation_pass')!=null) {
                    $stringLength=$request->get('new_pass');
                    if(strlen($stringLength)>7){

                if($request->get('new_pass')==$request->get('confirmation_pass')){
                $email=base64_decode(Session::get('dfgaertaefaweyhtrhaswer'));
                $s_id=base64_decode(Session::get('sdrteawerrbytrhsrerWA3THS'));
                $DataExist =StudentUser::select('id','s_id')
                ->where('email',$email)->where('s_id',$s_id)->first();
                if ($DataExist) {
                    $StudentUser = StudentUser::find($DataExist->id);
                    $StudentUser->password= Hash::make($request->get('new_pass'));
                    $StudentUser->save();

                    $StudentInfo = StudentInfoModel::where('id',$DataExist->s_id)->first();
                    //Email Start
                    $name=$StudentInfo->student_name;
                    $data = array('name'=>$name);
                    Mail::send(['text'=>'mail'], $data, function($message) use ($email, $name)  {
                    $message->to($email,$name)->subject
                    ('Password Changed');
                    $message->from('siu@gmail.com','Ahsan Asif');
                    });
                    //Email Ends
                    Session::flush();
                    Session::put('passwordReseted','Password Successfully Reseted Try Log In With Your New Password');
                     return redirect()->route('studentLogin');
                }
                else {
                    Session::flush();
                    return view ( 'dashboard.student_profile.forgot_password')->withErrors(['email'=>"Something Went Wrong Please Try Again"]);
                }
                
            }
            else {
                     $message="Please Set Your New Password Correctly";
                    return view ( 'dashboard.student_profile.forgot_password')->withMessage($message)->withErrors(['confirmation_pass'=>"Password Doesn't Match"]);
                }
            }
            else {
                     $message="Please Set Your New Password Correctly";
                    return view ( 'dashboard.student_profile.forgot_password')->withMessage($message)->withErrors(['new_pass'=>"Minimum Length Is 8"]);
                }

            }
            else {
                     $message="Please Set Your New Password Correctly";
                    return view ( 'dashboard.student_profile.forgot_password')->withMessage($message)->withErrors(['new_pass'=>"Password Is Required"]);
                }
        }
    else{
        Session::flush();
        Session::put('SessionExpired','SessionExpired');
        return redirect()->route('passwordReset');
        
    }
        }


        public function ForGotPassword(Request $request){
            
            if(!$request->get('confirmation_code')){
              $this->validate($request,[
                    'email'=>'required|email|string|exists:studentuser',
                    'registration_number'=>'required|integer|exists:student_info'
                ]);
              
                $email=$request->get('email');

                $DataExist =StudentUser::select('id','s_id')
                ->where('email',$email) ->first();
                if ($DataExist) {

                    $textRand=$s = substr(str_shuffle(str_repeat("EFLMNO1ZABPQ23GHIXYUVKJT456789CDRSW", 5)), 0, 7);
                    $requestTime=Carbon::now()->toDateTimeString();
                    $StudentUser = StudentUser::find($DataExist->id);
                    $StudentUser->remember_token=$textRand;
                    $StudentUser->updateRequest= $requestTime;
                    $StudentUser->save();



                    $StudentInfo = StudentInfoModel::where('id',$DataExist->s_id)->first();
                    //Email Start
                    $email=$request->get('email');
                    $name=$StudentInfo->student_name;
                    $data = array('name'=>$name,'code'=>$textRand);
                    Mail::send(['text'=>'mail'], $data, function($message) use ($email, $name)  {
                    $message->to($email,$name)->subject
                    ('Password Reset');
                    $message->from('siu@gmail.com','Ahsan Asif');
                    });
                    // Email End
                    $sd_email=base64_encode($email);
                    $sd_id=base64_encode($DataExist->s_id);
                    Session::put('dfgaertaefaweyhtrhaswer',$sd_email);
                    Session::put('sdrteawerrbytrhsrerWA3THS',$sd_id);

                    $details='A confirmation code has been sent to your email: '.$email.' This code will be invalid after 5 minutes' ;
                    return view ( 'dashboard.student_profile.forgot_password')->withDetails ($details)->with('requestedCode',$details);
                    }
                    else {
                    return back()->withErrors(['email'=>"Something Went Wrong Please Try Again"])->withInput();
                    }
              

        }
        

        else{
            if (Session::get('dfgaertaefaweyhtrhaswer') && Session::get('sdrteawerrbytrhsrerWA3THS')) {
             $this->validate($request,[
                    'confirmation_code'=>'required',
                ]);
            
                $email=base64_decode(Session::get('dfgaertaefaweyhtrhaswer'));
                $s_id=base64_decode(Session::get('sdrteawerrbytrhsrerWA3THS'));
                $DataExist =StudentUser::select('id','remember_token','updateRequest')
                ->where('email',$email)
                ->where('s_id',$s_id)
                ->where('remember_token',$request->get('confirmation_code'))
                ->whereDay('updateRequest', '=', date('d'))
                ->whereMonth('updateRequest', '=', date('m'))
                ->whereYear('updateRequest', '=', date('Y'))
                ->first();
                if ($DataExist!=null) {
                   if(+Carbon::parse($DataExist->updateRequest)->diffInMinutes()>5){
                        Session::flush();
                       $details='Your Are Late, Request Again';
                      return view ( 'dashboard.student_profile.student_login')->withDetails ($details)->with('lateRequest',$details);
                   }
                   else {
                       
                        Session::put('dgsdervdfgdgdrsdrtfhgdssdf','Ok');
                       $message="Please Set Your New Password Correctly";
                       
                       return view ( 'dashboard.student_profile.forgot_password')->withMessage($message);
                   }
                  

                 }
                 else {
                      $details='Your Inserted Code Is Incorrect';
                      return view ( 'dashboard.student_profile.forgot_password')->withDetails ($details)->with('incorrect',$details);
                 }

                }
               else{
               
                Session::flush();
                Session::put('SessionExpired','SessionExpired');
                return redirect()->route('passwordReset');
               
            }
            }
        }
}
