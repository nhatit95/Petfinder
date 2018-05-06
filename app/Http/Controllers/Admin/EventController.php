<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Event;
use App\Model\Admin\Event_cat;
use App\Model\Admin\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;

class EventController extends Controller
{

    public function __construct(Event $mEvent, Event_cat $mCat, User $mUser){
        $this->mEvent = $mEvent;
        $this->mCat = $mCat;
        $this->mUser = $mUser;
    }

    public function index(){
        $oItems = $this->mEvent->getItems();
        $arCats = $this->mCat->getItems();
        $arUsers = $this->mUser->getItems();
    	return view('admin.event.index', compact('oItems', 'arCats', 'arUsers'));
    }

    public function getAdd(){
        $arCats = $this->mCat->getItems();
    	return view('admin.event.add', compact('arCats'));
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
            "event_name" => trim($request->event_name),
            "cat_id"     => trim($request->cat_id),
            "user_id"    => trim($request->user_id),
            "time"       => trim($request->time),
            "avatar"     => $picture,
            "location"   => trim($request->location),
            "price"      => trim($request->price),
            "content"    => trim($request->content),
            "status"     => trim($request->status),
        ];
        $result = $this->mEvent->addItem($oItem);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.event.index');
    }

    public function del($id, Request $request){
        $result = $this->mEvent->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('admin.event.index');
    }

    public function getEdit($id){
        $oItem = $this->mEvent->getItem($id);
        $arCats = $this->mCat->getItems();
        return view('admin.event.edit', compact('oItem', 'arCats'));
    }

    public function postEdit($id, Request $request){
        $newPicture = $request->newPicture;

        if ($newPicture != '') {
            $path = $request->file('newPicture')->store('files');
            $tmp = explode('/', $path);
            $newPicture = end($tmp);
            $moItem = [
                "event_name" => trim($request->event_name),
                "cat_id"     => trim($request->cat_id),
                "time"       => trim($request->time),
                "location"   => trim($request->location),
                "price"      => trim($request->price),
                "content"    => trim($request->content),
                "status"     => trim($request->status),
                'avatar'     => $newPicture,
            ];
        }else{
            $moItem = [
               "event_name" => trim($request->event_name),
                "cat_id"     => trim($request->cat_id),
                "time"       => trim($request->time),
                "location"   => trim($request->location),
                "price"      => trim($request->price),
                "content"    => trim($request->content),
                "status"     => trim($request->status),
            ];
        }
        // var_dump($moItem); die();
        $result =  $this->mEvent->editItem($id, $moItem);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
            }else{
                $request->session()->flash('msg', 'We have some wrong thing, check again please!');
            }
        return redirect()->route('admin.event.index');
    }
}
