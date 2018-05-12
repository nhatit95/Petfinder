<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\User;
use App\Model\Admin\Message;
use App\Model\Admin\User_roles;
use App\Http\Controllers\Admin\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class MessageController extends Controller
{

    public function __construct(Message $mMess ,User $mUser){
        $this->mMess = $mMess;
        $this->mUser = $mUser;
    }

    public function index(){
        $oItems  = $this->mMess->getItems();
        $arUsers = $this->mUser->getItems();
    	return view('admin.message.index', compact('oItems', 'arUsers'));
    }

    public function getAdd(){
        return view('admin.message.add');
    }

    public function postAdd(Request $request){
        $to_id   = trim($request->to_id);
        $check   = 0;
        $arUsers = $this->mUser->getItems();
        foreach ($arUsers as $arUser) {
            if ($arUser->username == $to_id) {
                $to_id = $arUser->id;
                $check = 1;
            }
        }

        if($check == 0){
            $request->session()->flash('msg', 'We did not found your address, please check again');
            return redirect()->route('admin.message.index');
        }

        $oItem   = [
            "mess_title"   => trim($request->mess_title),
            "from_id"      => trim($request->from_id),
            "to_id"        => $to_id,
            "mess_content" => trim($request->mess_content),
            "create_at"    => trim(date('Y-m-d H:i:s')),
        ];
        $result = $this->mMess->addItem($oItem);
        if ($result) {
            $request->session()->flash('msg', 'Create a new message is successful');
        }else{
            $request->session()->flash('msg', 'Something are wrong, Please check again!');
        }
        return redirect()->route('admin.message.index');
    }

    public function del($id, Request $request){
        $result = $this->mMess->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Delete Success');
        }else{
            $request->session()->flash('msg', 'There are some mistakes, check again please!');
        }
        return redirect()->route('admin.message.index');
    }

    public function getEdit($id){
        // $oItem = $this->mUser->getItem($id);
        // $arRoles = $this->mRole->getItems();
        // return view('admin.user.edit', compact('oItem', 'arRoles'));
    }

    public function postEdit($id, Request $request){
    }
}
