<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Service;
use App\Model\Admin\Service_cat;
use App\Model\Admin\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class ServiceController extends Controller
{
    public function __construct(Service $mService, Service_cat $mCat, User $mUser){
        $this->mService = $mService;
        $this->mCat = $mCat;
        $this->mUser = $mUser;
    }

    public function index(){
        $oItems = $this->mService->getItems();
        $arCats = $this->mCat->getItems();
        $arUsers = $this->mUser->getItems();
    	return view('admin.service.index', compact('oItems', 'arCats', 'arUsers'));
    }

    public function getAdd(){
        $arCats = $this->mCat->getItems();
    	return view('admin.service.add', compact('arCats'));
    }
    public function postAdd(Request $request){
        $picture = $request->hinhanh;

        if ($picture != '') {
            $path = $request->file('hinhanh')->store('files');
            $tmp = explode('/', $path);
            $picture = end($tmp);
        }else{
            $picture = 'nopic.jpg';
        }
        $oItem = [
            "cat_id"       => trim($request->cat_id),
            "user_id"      => trim($request->user_id),
            "service_name" => trim($request->service_name),
            "avatar"       => $picture,
            "description"  => trim($request->description),
            "content"      => trim($request->content),
            "price"        => trim($request->price),
            "status"       => trim($request->status),
        ];
        $result = $this->mService->addItem($oItem);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.service.index');
    }

    public function del($id, Request $request){
        $result = $this->mService->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.service.index');
    }

    public function getEdit($id){
        $oItem = $this->mService->getItem($id);
        $arCats = $this->mCat->getItems();
        return view('admin.service.edit', compact('oItem', 'arCats'));
    }

    public function postEdit($id, Request $request){
        $newPicture = $request->newPicture;

        if ($newPicture != '') {
            $path = $request->file('newPicture')->store('files');
            $tmp = explode('/', $path);
            $newPicture = end($tmp);
            $moItem = [
                "cat_id"       => trim($request->cat_id),
                "user_id"      => trim($request->user_id),
                "service_name" => trim($request->service_name),
                "avatar"       => $newPicture,
                "description"  => trim($request->description),
                "content"      => trim($request->content),
                "price"        => trim($request->price),
                "status"       => trim($request->status),
            ];
        }else{
            $moItem = [
                "cat_id"       => trim($request->cat_id),
                "user_id"      => trim($request->user_id),
                "service_name" => trim($request->service_name),
                "description"  => trim($request->description),
                "content"      => trim($request->content),
                "price"        => trim($request->price),
                "status"       => trim($request->status),
            ];
        }
        // var_dump($moItem); die();
        $result =  $this->mService->editItem($id, $moItem);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
            }else{
                $request->session()->flash('msg', 'We have some wrong thing, check again please!');
            }
        return redirect()->route('admin.service.index');
    }
}
