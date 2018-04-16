<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Cat;

class CatController extends Controller
{
    public function __construct(Cat $mCat){
        $this->mCat = $mCat;
    }

    public function index(){
        $oItems = $this->mCat->getItems();
        
    	return view('admin.cat.index', compact('oItems'));
    }

    public function getAdd(){
        return view("admin.cat.add");
    }

    public function postAdd(Request $request){
        $oItem = [
            'name'  => trim($request->name),
        ];
        $result = $this->mCat->addItem($oItem);
        if ($result) {
            $request->session()->flash('msg', 'Thêm thành công');
        }else{
            $request->session()->flash('msg', 'Lỗi trong quá trình thêm');
        }
        return redirect()->route('admin.cat.index');
    }

    public function del($id, Request $request){
        $result = $this->mCat->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Xóa thành công');
        }else{
            $request->session()->flash('msg', 'Lỗi trong quá trình xóa');
        }
        return redirect()->route('admin.cat.index');
    }


    public function getEdit($id){
        $oItem = $this->mCat->getItem($id);
        return view('admin.cat.edit', compact('oItem'));
    }

    public function postEdit($id, Request $request){
        // echo $id;die();
        $noItem = [
            'name'   =>  trim($request->name),
        ];
        // dd($noItem);
        $result = $this->mCat->editItem($id, $noItem);
        if ($result) {
            $request->session()->flash('msg', 'Sửa thành công');       
        }else{
            $request->session()->flash('msg', 'Lỗi trong quá trình sửa');
        }
        return redirect()->route('admin.cat.index');
    }
}
