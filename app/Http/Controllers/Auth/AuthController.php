<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function getLogin(){
    	return view('auth.auth.login');
    }

    public function postLogin(Request $request){
    	$username = $request->username;
    	$password = $request->password;
    	$result = Auth::attempt([
    		'username'  => $username,
    		'password'  => $password,
    		/*'active' =>1*/

    	]);
    	if($result){
    		return redirect()->route('admin.index.index');
    	}else{
    		$request->session()->flash('msg', 'Your username/password is not correctly.');
    		return redirect()->route('login');
    	}
    }

    public function logout(){
    	Auth::logout();
    	return view('auth.auth.login');

    }
}
