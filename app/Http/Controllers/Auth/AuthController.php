<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\User;
use App\Model\Admin\User_roles;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class AuthController extends Controller
{

    public function __construct(User $mUser, User_roles $mRole){
        $this->mUser = $mUser;
        $this->mRole = $mRole;
    }

    public function getRegister(){
        return view('auth.auth.register');
    }
    public function postRegister(UserRequest $request){
        $picture = $request->hinhanh;

        if ($picture != '') {
            $path = $request->file('hinhanh')->store('files');
            $tmp = explode('/', $path);
            $picture = end($tmp);
        }else{
            $picture = 'nopic.jpg';
        }
        $oItem = [
            "username"     => trim($request->username),
            "fullname"     => trim($request->fullname),
            "role_id"      => trim($request->role),
            "email"        => trim($request->email),
            "phone_number" => trim($request->phone_number),
            "status"       => trim($request->status),
            "avatar"       => $picture,
            "birthday"     => trim($request->birthday),
            "gender"       => trim($request->gender),
            "password"     => bcrypt(trim($request->password)),
        ];
        $result = $this->mUser->addItem($oItem);
        if ($result) {
            $request->session()->flash('msg', 'Create Success');
            return redirect()->route('auth.auth.login');
        }else{
            $request->session()->flash('msg', 'Have something wrong, check again please!');
            return redirect()->route('auth.auth.register');
        }
    }
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


}
