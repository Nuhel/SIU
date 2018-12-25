<?php
namespace App\Http\Middleware;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use App\StudentInfoModel;
use App\Event;
use App\Notice;
use App\Teacher;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($request, $guard = null)
    {
        //
        if (Auth::guard($guard)->check()) {

        //Admin is an Authority
        if (Auth::user()->accesscode == 'AU133') {
            
           $userPosition="You are an Authority";
           $userRole=Auth::user()->accesscode;
           $discipline=base64_encode('Authority');
           Session::put('discipline', $discipline);
           Session::put('accesscode', $userRole);
           Session::put('username', Auth::user()->name);

            $studentNumber=StudentInfoModel::count();
            $noticeNumber=Notice::count();
            $eventNumber=Event::count();
            $teacherNumber=Teacher::count();

            return view('dashboard.dashboard')
            ->with('userPosition',$userPosition)
            ->with('studentNumber',$studentNumber)
            ->with('noticeNumber',$noticeNumber)
            ->with('eventNumber',$eventNumber)
            ->with('teacherNumber',$teacherNumber);
        }
         //Admin is from CSE
         if (Auth::user()->accesscode == 'CSE133') {
           $userPosition="Your Are CSE Departmental Admin";
           $userRole=Auth::user()->accesscode;
           Session::put('accesscode', $userRole);
            Session::put('username', Auth::user()->name);
            $discipline=base64_encode('CSE');
           Session::put('discipline', $discipline);
           $studentNumber=StudentInfoModel::where('discipline','CSE')->count();
            $noticeNumber=Notice::where('department','CSE')->count();
            $eventNumber=Event::where('department','CSE')->count();
            $teacherNumber=Teacher::where('department','CSE')->count();

            return view('dashboard.dashboard')
            ->with('userPosition',$userPosition)
            ->with('studentNumber',$studentNumber)
            ->with('noticeNumber',$noticeNumber)
            ->with('eventNumber',$eventNumber)
            ->with('teacherNumber',$teacherNumber);
        }
        //Admin is from BBA
        if (Auth::user()->accesscode == 'BBA133') {
           $userPosition="Your Are BBA Departmental Admin";
           $userRole=Auth::user()->accesscode;
           Session::put('accesscode', $userRole);
            Session::put('username', Auth::user()->name);
            $discipline=base64_encode('BBA');
           Session::put('discipline', $discipline);
            $studentNumber=StudentInfoModel::where('discipline','BBA')->count();
            $noticeNumber=Notice::where('department','BBA')->count();
            $eventNumber=Event::where('department','BBA')->count();
            $teacherNumber=Teacher::where('department','BBA')->count();

            return view('dashboard.dashboard')
            ->with('userPosition',$userPosition)
            ->with('studentNumber',$studentNumber)
            ->with('noticeNumber',$noticeNumber)
            ->with('eventNumber',$eventNumber)
            ->with('teacherNumber',$teacherNumber);
        }
        //Admin is from LLB
        if (Auth::user()->accesscode == 'LLB133') {
           $userPosition="Your Are LLB Departmental Admin";
           $userRole=Auth::user()->accesscode;
          Session::put('accesscode', $userRole);
           Session::put('username', Auth::user()->name);
           $discipline=base64_encode('LLB');
           Session::put('discipline', $discipline);
          $studentNumber=StudentInfoModel::where('discipline','LLB')->count();
            $noticeNumber=Notice::where('department','LLB')->count();
            $eventNumber=Event::where('department','LLB')->count();
            $teacherNumber=Teacher::where('department','LLB')->count();

            return view('dashboard.dashboard')
            ->with('userPosition',$userPosition)
            ->with('studentNumber',$studentNumber)
            ->with('noticeNumber',$noticeNumber)
            ->with('eventNumber',$eventNumber)
            ->with('teacherNumber',$teacherNumber);
        }
         //Admin is from English
        if (Auth::user()->accesscode == 'ENG133') {
           $userPosition="Your Are English Departmental Admin";
           $userRole=Auth::user()->accesscode;
        Session::put('accesscode', $userRole);
         Session::put('username', Auth::user()->name);
         $discipline=base64_encode('ENG');
           Session::put('discipline', $discipline);
           $studentNumber=StudentInfoModel::where('discipline','ENG')->count();
            $noticeNumber=Notice::where('department','ENG')->count();
            $eventNumber=Event::where('department','ENG')->count();
            $teacherNumber=Teacher::where('department','ENG')->count();

            return view('dashboard.dashboard')
            ->with('userPosition',$userPosition)
            ->with('studentNumber',$studentNumber)
            ->with('noticeNumber',$noticeNumber)
            ->with('eventNumber',$eventNumber)
            ->with('teacherNumber',$teacherNumber);
        }
         //Admin is from ECE
          if (Auth::user()->accesscode == 'ECE133') {
           $userPosition="Your Are ECE Departmental Admin";
           $userRole=Auth::user()->accesscode;
           Session::put('accesscode', $userRole);
            Session::put('username', Auth::user()->name);
            $discipline=base64_encode('ECE');
           Session::put('discipline', $discipline);
           $studentNumber=StudentInfoModel::where('discipline','ECE')->count();
            $noticeNumber=Notice::where('department','ECE')->count();
            $eventNumber=Event::where('department','ECE')->count();
            $teacherNumber=Teacher::where('department','ECE')->count();

            return view('dashboard.dashboard')
            ->with('userPosition',$userPosition)
            ->with('studentNumber',$studentNumber)
            ->with('noticeNumber',$noticeNumber)
            ->with('eventNumber',$eventNumber)
            ->with('teacherNumber',$teacherNumber);
        }

         //Authentication Failure
        else{
            return redirect('/login');
        }
    }
        
    }

    //Log Out Logic

      public function getLogout()
{
     Session::flush();
    \Auth::logout();
    return redirect('/');
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
