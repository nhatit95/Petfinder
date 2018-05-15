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
class GuestController extends Controller
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


    public function getIndex($id){
        $arUser = $this->mUser->getItem($id);
    	return view('petfinder.profile.guestprofile', compact('arUser'));
    }
    public function postIndex($id){

    }
    // public function getGuestMessageAdd (Request $request){

    // }
    public function postGuestMessageAdd(Request $request){
        // if($check == 0){
        //     $request->session()->flash('msg', 'We did not found your address, please check again');
        //     return view('petfinder.profile.index');
        // }

        $oItem   = [
            "mess_title"   => trim($request->mess_title),
            "from_id"      => trim($request->from_id),
            "to_id"        => trim($request->to_id),
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
}
