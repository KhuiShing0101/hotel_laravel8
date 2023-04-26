<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/backend/login';
    protected $guard='Admin';

    protected $redirectAfterLogout = '/backend/login';
    public function __construct(){
        $this->middleware('guest',['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('auth.login');
    }
    public function postLogin(LoginRequest $request)
    {
        $validation = Auth::guard('Admin')->attempt([
            'name' => $request->get('name'),
            'password' => $request->get('password')
        ]);
        if($validation){
            return redirect('backend/index');
        }
        else{
            return redirect('backend/login')->with('error_message','Wrong Credential!');
        }
    }
}
