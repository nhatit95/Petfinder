<?php

namespace App\Http\Controllers\Petfinder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Pet;
use App\Model\Admin\Pet_cat;
use App\Model\Admin\User;
class FinderController extends Controller
{

	public function __construct(Pet $mPet, Pet_cat $mPetCats, User $mUser){
        $this->mPet = $mPet;
        $this->mCat = $mPetCats;
        $this->mUser = $mUser;
    }
    public function index(){
		$arPets    = $this->mPet->getItems();
		$arPetCats = $this->mCat->getItems();
		$arUsers   = $this->mUser->getItems();
    	return view('petfinder.petfinder.finder' , compact('arPets', 'arPetCats', 'arUsers'));
    }
}
