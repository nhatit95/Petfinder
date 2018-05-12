<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Pet;
use App\Model\Admin\Pet_cat;
use App\Model\Admin\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class PetController extends Controller
{
    public function __construct(Pet $mPet, Pet_cat $mCat, User $mUser){
        $this->mPet = $mPet;
        $this->mCat = $mCat;
        $this->mUser = $mUser;
    }

    public function index(){
        $oItems = $this->mPet->getItems();
        $arCats = $this->mCat->getItems();
        $arUsers = $this->mUser->getItems();
    	return view('admin.pet.index', compact('oItems', 'arCats', 'arUsers'));
    }

    public function getAdd(){
        $arCats = $this->mCat->getItems();
    	return view('admin.pet.add', compact('arCats'));
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
            "pet_name"    => trim($request->pet_name),
            "cat_id"      => trim($request->cat_id),
            "user_id"     => trim($request->user_id),
            "age"         => trim($request->age),
            "avatar"      => $picture,
            "gender"      => trim($request->gender),
            "city"        => trim($request->city),
            "address"     => trim($request->address),
            "status"      => trim($request->status),
            "discription" => trim($request->discription),
        ];
        $result = $this->mPet->addItem($oItem);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.pet.index');
    }

    public function del($id, Request $request){
        $result = $this->mPet->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.pet.index');
    }

    public function getEdit($id){
        $oItem = $this->mPet->getItem($id);
        $arCats = $this->mCat->getItems();
        return view('admin.pet.edit', compact('oItem', 'arCats'));
    }

    public function postEdit($id, Request $request){
        $newPicture = $request->newPicture;

        if ($newPicture != '') {
            $path = $request->file('newPicture')->store('files');
            $tmp = explode('/', $path);
            $newPicture = end($tmp);
            $moItem = [
                "pet_name"    => trim($request->pet_name),
                "cat_id"      => trim($request->cat_id),
                "user_id"     => trim($request->user_id),
                "age"         => trim($request->age),
                "gender"      => trim($request->gender),
                "city"        => trim($request->city),
                "address"     => trim($request->address),
                "status"      => trim($request->status),
                "discription" => trim($request->discription),
                'avatar'      => $newPicture,
            ];
        }else{
            $moItem = [
               "pet_name"     => trim($request->pet_name),
                "cat_id"      => trim($request->cat_id),
                "user_id"     => trim($request->user_id),
                "age"         => trim($request->age),
                "gender"      => trim($request->gender),
                "city"        => trim($request->city),
                "address"     => trim($request->address),
                "status"      => trim($request->status),
                "discription" => trim($request->discription),
            ];
        }
        // var_dump($moItem); die();
        $result =  $this->mPet->editItem($id, $moItem);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
            }else{
                $request->session()->flash('msg', 'We have some wrong thing, check again please!');
            }
        return redirect()->route('admin.pet.index');
    }
}
