<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    //after login
    protected $redirectTo = '/dashboard';
    //login path
    protected $loginPath = '/auth/login';
    //after logout
    protected $redirectAfterLogout = '/auth/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'status'    =>  0,
            'role'      =>  0
        ]);
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' =>$request->password])) {
           if(Auth::user()->status != 1){
                Auth::logout();
                flash('You need to be approved by admin before login','warning');
                return redirect()->back();
           }
        return redirect('dashboard');
       }else{
        flash('Invalid username or password','warning');
       return redirect()->back();
       }
    }
}