<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'accesscode' => ['required', 'string','in:Authority,CSE Departmental,BBA Departmental,LLB Departmental,English Departmental,ECE Departmental'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $customAccesscode;
    if($data['accesscode']=="Authority"){
        $customAccesscode="AU133";
    }
        if($data['accesscode']=="CSE Departmental"){
        $customAccesscode="CSE133";
    }
        if($data['accesscode']=="BBA Departmental"){
        $customAccesscode="BBA133";
    }
        if($data['accesscode']=="LLB Departmental"){
        $customAccesscode="LLB133";
    }
        if($data['accesscode']=="English Departmental"){
        $customAccesscode="ENG133";
    }
        if($data['accesscode']=="ECE Departmental"){
        $customAccesscode="ECE133";
    }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'accesscode' => $customAccesscode,
        ]);
    }
}
