<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\User;
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

    public function __construct(User $mUser){
        $this->mUser = $mUser;
    }

    public function index(){
        $oItems = $this->mUser->getItems();
        
    	return view('admin.user.index', compact('oItems'));
    }

    public function getAdd(){
    	return view('admin.user.add');
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
            "username"       => trim($request->username),
            "fullname"       => trim($request->fullname),
            "role"           => trim($request->role),
            "email"          => trim($request->email),
            "phone_number"   => trim($request->phone_number),
            "status"         => trim($request->status),
            "avartar"        => $picture,
            "birthday"       => trim($request->birthday),
            "gender"       => trim($request->gender),
            "password"       => bcrypt(trim($request->password)),
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
        return view('admin.user.edit', compact('oItem'));
    }

    public function postEdit($id, UserEditRequest $request){
        if ($request->password == '') {
            $noItem = [
                'fullname'   =>  trim($request->fullname),
             ];
        }else{
            $noItem = [
                'fullname'   =>  trim($request->fullname),
                'password'   =>  bcrypt(trim($request->password)),
             ];
        }
        // dd($noItem);
        $result = $this->mUser->editItem($id, $noItem);
        if ($result) {
            $request->session()->flash('msg', 'Sửa thành công');       
        }else{
            $request->session()->flash('msg', 'Lỗi trong quá trình sửa');
        }
        return redirect()->route('admin.user.index');
    }
}
