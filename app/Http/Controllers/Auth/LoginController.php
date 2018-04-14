<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function checkLogin()
    {
        $rules = array 
                    (
                        'username'  =>  'required',
                        'password'  =>  'required'
                    );

        $validator = Validator::make(Input::all(),$rules);
        if($validator->fails())
        {
            return Redirect::to('login')
                ->withErrors($validator);
        }
        else
        {
            $userInfo   =   array
                            (
                                'username'  =>  Input::post('username'),
                                'password'  =>  Input::post('password')
                            );

            if(Auth::attempt($userInfo))
            {
                return Redirect::to('/home');
            }
            else
            {
                return Redirect::to('/');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
