<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Service_cat;

class ServiceCatController extends Controller
{
    public function __construct(Service_cat $mCat){
        $this->mCat = $mCat;
    }

    public function index(){
        $oItems = $this->mCat->getItems();
    	return view('admin.service_cat.index', compact('oItems'));
    }

    public function getAdd(){
        return view('admin.service_cat.add');
    }

    public function postAdd(Request $request){
        $oItem = [
            'cat_name' => trim($request->cat_name),
        ];

        $result = $this->mCat->addItem($oItem);
        if($result){
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.service_cat.index');
    }

    public function getEdit($id, Request $request){
        $oItem = $this->mCat->getItem($id);
        return view('admin.service_cat.edit', compact('oItem'));
    }

    public function postEdit($id, Request $request){
        $oItem= [
            'cat_name' => trim($request->cat_name),
        ];

        $result = $this->mCat->editItem($id, $oItem);
        if($result){
            $request->session()->flash('msg', 'Update was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.service_cat.index');
    }

    public function del($id, Request $request){
        $result = $this->mCat->delItem($id);
        if($result){
            $request->session()->flash('msg', 'Delete was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.service_cat.index');
    }

}
