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
class PetRegisterController extends Controller
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


    public function getIndex($id, $pet_id){
        $arUser = $this->mUser->getItem($id);
        $arPet = $this->mPet->getItem($pet_id);
    	return view('petfinder.petfinder.petregister', compact('arUser', 'arPet'));
    }

 
}
