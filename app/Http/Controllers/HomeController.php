<?php
namespace App\Http\Middleware;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('auth');
//     }


//     /**
//      * Show the application dashboard.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index($request, $guard = null)
//     {
//          if (Auth::guard($guard)->check()) {
//         if (Auth::user()->accesscode == 'AU133') {
//             // return redirect('/admin');
//             dd("This User Is An Authority");
//         }else{
//             return redirect('/');
//         }
//     }
//         return view('dashboard.dashboard');
//     }
//     public function getLogout()
// {
//     \Auth::logout();
//     return redirect('/login');
// }
}
