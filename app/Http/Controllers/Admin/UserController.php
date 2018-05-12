<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\User;
use App\Model\Admin\User_roles;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class UserController extends Controller
{
    public function getRememberToken()
      {
        return null; // not supported
      }

      public function setRememberToken($value)
      {
        return null;
      }

      public function getRememberTokenName()
      {
        return null; // not supported
      }

    public function __construct(User $mUser, User_roles $mRole){
        $this->mUser = $mUser;
        $this->mRole = $mRole;
    }

    public function index(){
        $oItems = $this->mUser->getItems();
        $arRoles = $this->mRole->getItems();
    	return view('admin.user.index', compact('oItems', 'arRoles'));
    }

    public function getAdd(){
        $arRoles = $this->mRole->getItems();
    	return view('admin.user.add', compact('arRoles'));
    }
    public function postAdd(UserRequest $request){
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
            $request->session()->flash('msg', 'Thêm user thành công');
        }else{
            $request->session()->flash('msg', 'Lỗi trong quá trình thêm');
        }
        return redirect()->route('admin.user.index');
        
    }

    public function del($id, Request $request){
        $result = $this->mUser->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Xóa thành công');
        }else{
            $request->session()->flash('msg', 'Lỗi trong quá trình xóa');
        }
        return redirect()->route('admin.user.index');
    }

    public function getEdit($id){
        $oItem = $this->mUser->getItem($id);
        $arRoles = $this->mRole->getItems();
        return view('admin.user.edit', compact('oItem', 'arRoles'));
    }

    public function postEdit($id, Request $request){
        $newPicture = $request->newPicture;
        $check = $request->check;

        if ($newPicture != '' && $request->new_password != '') {
            $path = $request->file('newPicture')->store('files');
            $tmp = explode('/', $path);
            $newPicture = end($tmp);
            $moItem = [
                'username'     => trim($request->username),
                'fullname'     => trim($request->fullname),
                'password'     => bcrypt(trim($request->new_password)),
                'role_id'      => trim($request->role),
                'email'        => trim($request->email),
                'phone_number' => trim($request->phone_number),
                'gender'       => trim($request->gender),
                'birthday'     => $request->birthday,
                'status'       => trim($request->status),
                'avatar'       => $newPicture,
            ];
        }else if($newPicture != '' && $request->new_password == ''){
            $path = $request->file('newPicture')->store('files');
            $tmp = explode('/', $path);
            $newPicture = end($tmp);
            $moItem = [
                'username'     => trim($request->username),
                'fullname'     => trim($request->fullname),
                'role_id'      => trim($request->role),
                'email'        => trim($request->email),
                'phone_number' => trim($request->phone_number),
                'gender'       => trim($request->gender),
                'birthday'     => $request->birthday,
                'status'       => trim($request->status),
                'avatar'       => $newPicture,
            ];
        }else if($newPicture == '' && $request->new_password != ''){
            $moItem = [
                'username'     => trim($request->username),
                'fullname'     => trim($request->fullname),
                'password'     => md5(trim($request->new_password)),
                'role_id'      => trim($request->role),
                'email'        => trim($request->email),
                'phone_number' => trim($request->phone_number),
                'gender'       => trim($request->gender),
                'birthday'     => $request->birthday,
                'status'       => trim($request->status),
            ];
        }else{
            $moItem = [
                'username'     => trim($request->username),
                'fullname'     => trim($request->fullname),
                'role_id'      => trim($request->role),
                'email'        => trim($request->email),
                'phone_number' => trim($request->phone_number),
                'gender'       => trim($request->gender),
                'birthday'     => $request->birthday,
                'status'       => trim($request->status),
            ];
        }
        // var_dump($moItem); die();
        $result =  $this->mUser->editItem($id, $moItem);
        if ($result) {
            $request->session()->flash('msg', 'Sửa thành công');
        }else{
            $request->session()->flash('msg', 'Lỗi trong quá trình sửa');
        }
        if ($check == 'member') {            
            return redirect()->route('petfinder.profile.index');
        }else{
            return redirect()->route('admin.user.index');
        }
    }
}
