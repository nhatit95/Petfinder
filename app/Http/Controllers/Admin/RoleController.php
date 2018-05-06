<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\User_roles;

class RoleController extends Controller
{
    public function __construct(User_roles $mRole){
        $this->mRole = $mRole;
    }

    public function index(){
        $oItems = $this->mRole->getItems();
    	return view('admin.role.index', compact('oItems'));
    }

    public function getAdd(){
        return view('admin.role.add');
    }

    public function postAdd(Request $request){
        $oItem = [
            'role_name' => trim($request->role_name),
        ];

        $result = $this->mRole->addItem($oItem);
        if($result){
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.role.index');
    }

    public function getEdit($id, Request $request){
        $oItem = $this->mRole->getItem($id);
        return view('admin.role.edit', compact('oItem'));
    }

    public function postEdit($id, Request $request){
        $oItem= [
            'role_name' => trim($request->role_name),
        ];

        $result = $this->mRole->editItem($id, $oItem);
        if($result){
            $request->session()->flash('msg', 'Update was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.role.index');
    }

    public function del($id, Request $request){
        $result = $this->mRole->delItem($id);
        if($result){
            $request->session()->flash('msg', 'Delete was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.role.index');
    }

}
