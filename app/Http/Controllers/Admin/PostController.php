<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Post;
use App\Model\Admin\Post_cat;
use App\Model\Admin\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class PostController extends Controller
{
    public function __construct(Post $mPost, Post_cat $mCat, User $mUser){
        $this->mPost = $mPost;
        $this->mCat = $mCat;
        $this->mUser = $mUser;
    }

    public function index(){
        $oItems = $this->mPost->getItems();
        $arCats = $this->mCat->getItems();
        $arUsers = $this->mUser->getItems();
    	return view('admin.post.index', compact('oItems', 'arCats', 'arUsers'));
    }

    public function getAdd(){
        $arCats = $this->mCat->getItems();
    	return view('admin.post.add', compact('arCats'));
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
            "cat_id"      => trim($request->cat_id),
            "user_id"     => trim($request->user_id),
            "post_name"   => trim($request->post_name),
            "avatar"      => $picture,
            "discription" => trim($request->discription),
            "content"     => trim($request->content),
            "create_at"   => date('Y-m-d'),
            "status"      => trim($request->status),
        ];
        $result = $this->mPost->addItem($oItem);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.post.index');
    }

    public function del($id, Request $request){
        $result = $this->mPost->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.post.index');
    }

    public function getEdit($id){
        $oItem = $this->mPost->getItem($id);
        $arCats = $this->mCat->getItems();
        return view('admin.post.edit', compact('oItem', 'arCats'));
    }

    public function postEdit($id, Request $request){
        $newPicture = $request->newPicture;

        if ($newPicture != '') {
            $path = $request->file('newPicture')->store('files');
            $tmp = explode('/', $path);
            $newPicture = end($tmp);
            $moItem = [
                "cat_id"      => trim($request->cat_id),
                "user_id"     => trim($request->user_id),
                "post_name"   => trim($request->post_name),
                "avatar"      => $newPicture,
                "discription" => trim($request->discription),
                "content"     => trim($request->content),
                "update_at"   => date('Y-m-d'),
                "status"      => trim($request->status),
                ];
        }else{
            $moItem = [
                "cat_id"      => trim($request->cat_id),
                "user_id"     => trim($request->user_id),
                "post_name"   => trim($request->post_name),
                "discription" => trim($request->discription),
                "content"     => trim($request->content),
                "update_at"   => date('Y-m-d'),
                "status"      => trim($request->status),
            ];
        }
        // var_dump($moItem); die();
        $result =  $this->mPost->editItem($id, $moItem);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
            }else{
                $request->session()->flash('msg', 'We have some wrong thing, check again please!');
            }
        return redirect()->route('admin.post.index');
    }
}
