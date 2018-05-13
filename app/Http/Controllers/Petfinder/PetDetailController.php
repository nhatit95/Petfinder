<?php

namespace App\Http\Controllers\Petfinder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Pet;
use App\Model\Admin\Pet_cat;
use App\Model\Admin\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
class PetDetailController extends Controller
{
	public function __construct(Pet $mPet, Pet_cat $mPetCat, User $mUser){
        $this->mPet = $mPet;
        $this->mPetCat = $mPetCat;
        $this->mUser = $mUser;
    }

    public function show($id){
        $arPet     = $this->mPet->getItem($id);
        $arPetCats = $this->mPetCat->getItems();
        $arUsers   = $this->mUser->getItems();
    	// return view('petfinder.petfinder.Petdetail');
    	return view('petfinder.petfinder.Petdetail', compact('arPet', 'arPetCats', 'arUsers'));
    }
    
}
