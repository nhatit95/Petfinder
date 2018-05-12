<?php

namespace App\Http\Controllers\Petfinder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Admin\Pet;
use App\Model\Admin\Pet_cat;
use App\Model\Admin\User;
use App\Model\Admin\Event_cat;
use App\Model\Admin\Event;
use App\Model\Admin\Post;
use App\Model\Admin\Message;
use App\Model\Admin\Post_cat;
class ProfileController extends Controller
{

	public function __construct(Pet $mPet, Pet_cat $mCat, User $mUser, Event $mEvent, Event_cat $mEventCat, Post $mPost, Post_cat $mPostCat, Message $mMess){
        $this->mPet      = $mPet;
        $this->mCat      = $mCat;
        $this->mUser     = $mUser;
        $this->mEvent    = $mEvent;
        $this->mEventCat = $mEventCat;
        $this->mPost     = $mPost;
        $this->mPostCat  = $mPostCat;
        $this->mMess     = $mMess;
    }


    public function index(){
        $id          = Auth::user()->id;
        $arPets      = $this->mPet->getYourPets($id);
        $arPetCats   = $this->mCat->getItems();
        $arUsers     = $this->mUser->getItems();
        $arEvents    = $this->mEvent->getYourEvents($id);
        $arEventCats = $this->mEventCat->getItems();
        $arPosts     = $this->mPost->getYourPosts($id);
        $arPostCats  = $this->mPostCat->getItems();
        $arMessages  = $this->mMess->getYourMessages($id);
    	return view('petfinder.profile.index', compact('arPets', 'arPetCats', 'arUsers', 'arEvents', 'arEventCats', 'arPosts', 'arPostCats', 'arMessages'));
    }
// PET
    public function getPetAdd(){
        $arCats = $this->mCat->getItems();
        return view('petfinder.profile.petadd', compact('arCats'));
    }

    public function postPetAdd(Request $request){
         $picture = $request->hinhanh;

        if ($picture != '' ) {
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
            "status"      => 'No',
            "discription" => trim($request->discription),
        ];
        $result = $this->mPet->addItem($oItem);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('petfinder.profile.index');
    }

    public function petDel($id, Request $request){
        $result = $this->mPet->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('petfinder.profile.index');
    }

    public function getPetEdit($id){
        $oItem = $this->mPet->getItem($id);
        $arCats = $this->mCat->getItems();
        return view('petfinder.profile.petedit', compact('oItem', 'arCats'));
    }

    public function postPetEdit($id, Request $request){
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
                "status"      => 'No',
                "discription" => trim($request->discription),
                'avatar'     => $newPicture,
            ];
        }else{
            $moItem = [
               "pet_name"    => trim($request->pet_name),
                "cat_id"      => trim($request->cat_id),
                "user_id"     => trim($request->user_id),
                "age"         => trim($request->age),
                "gender"      => trim($request->gender),
                "city"        => trim($request->city),
                "address"     => trim($request->address),
                "status"      => 'No',
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
        return redirect()->route('petfinder.profile.index');
    }

// POST

    public function getPostAdd(){
        $arPostCats = $this->mPostCat->getItems();
        return view('petfinder.profile.postadd', compact('arPostCats'));
    }

    public function postPostAdd(Request $request){
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
        return redirect()->route('petfinder.profile.index');
    }

    public function postDel($id, Request $request){
        $result = $this->mPost->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Create was success');
        }else{
            $request->session()->flash('msg', 'We have some wrong thing, check again please!');
        }
        return redirect()->route('petfinder.profile.index');
    }

    public function getPostEdit($id){
        $arPosts    = $this->mPost->getItem($id);
        $arPostCats = $this->mPostCat->getItems();
        return view('petfinder.profile.postedit', compact('arPosts', 'arPostCats'));
    }

    public function postPostEdit($id, Request $request){
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
        return redirect()->route('petfinder.profile.index');
    }

// MESSAGE
    public function getMessageAdd(){
        return view('petfinder.profile.messageadd');
    }

    public function postMessageAdd(Request $request){
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
            return redirect()->route('petfinder.profile.messageadd');
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
        return redirect()->route('petfinder.profile.index');
    }

    public function messageDel($id, Request $request){
        $result = $this->mMess->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Delete Success');
        }else{
            $request->session()->flash('msg', 'There are some mistakes, check again please!');
        }
        return redirect()->route('petfinder.profile.index');
    }
}
