<?php

namespace App\Http\Controllers\Petfinder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Pet;
use App\Model\Admin\Pet_cat;
use App\Model\Admin\User;
use Illuminate\Support\Facades\DB;
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
        $arCities  = DB::table('pets')->select('city')->groupBy('city')->orderBy('city', 'ASC')->get();
        $arAges    = DB::table('pets')->select('age')->groupBy('age')->orderBy('age', 'ASC')->get();
        $arBreeds  = DB::table('pet_categories')->select('cat_name')->groupBy('cat_name')->orderBy('cat_name', 'ASC')->get();
    	return view('petfinder.petfinder.finder' , compact('arPets', 'arPetCats', 'arUsers', 'arCities', 'arAges', 'arBreeds'));
    }

    public function postindex(Request $request){
        $arPetCats = $this->mCat->getItems();
        $arUsers   = $this->mUser->getItems();
        $arCities  = DB::table('pets')->select('city')->groupBy('city')->orderBy('city', 'ASC')->get();
        $arAges    = DB::table('pets')->select('age')->groupBy('age')->orderBy('age', 'ASC')->get();
        $arBreeds  = DB::table('pet_categories')->select('cat_name')->groupBy('cat_name')->orderBy('cat_name', 'ASC')->get();

        $sbreed  = $request->breed;
        $sage    = $request->age;
        $sgender = $request->gender;
        $scity   = $request->city;
        $ssbreed = '';
        
        foreach ($arPetCats as $arPetCat) {
            if ($arPetCat->cat_name == $sbreed) {
                $ssbreed = $arPetCat->cat_id;
            }
        }

        $arPets    = DB::table('pets')
                      ->where('cat_id', '=', $ssbreed)
                      ->orwhere('age', '=', $sage)
                      ->orWhere('gender', '=', $sgender)
                      ->orWhere('city', '=', $scity)
                      ->get();

        return view('petfinder.petfinder.finder' , compact('arPets', 'arPetCats', 'arUsers', 'arCities', 'arAges', 'arBreeds', 'sbreed', 'sage', 'sgender', 'scity' ));
    }
}
