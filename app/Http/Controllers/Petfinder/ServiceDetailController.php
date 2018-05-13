<?php

namespace App\Http\Controllers\Petfinder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Service;
use App\Model\Admin\Service_cat;
use App\Model\Admin\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
class ServiceDetailController extends Controller
{
	public function __construct(Service $mService, Service_cat $mCat, User $mUser){
        $this->mService = $mService;
        $this->mCat = $mCat;
        $this->mUser = $mUser;
    }

    public function show($id){
		$arService    = $this->mService->getItem($id);
		$arServiceCats = $this->mCat->getItems();
		$arUsers       = $this->mUser->getItems();
    	// return view('petfinder.petfinder.servicedetail');
    	return view('petfinder.petfinder.servicedetail', compact('arService', 'arSercviceCats', 'arUsers'));
    }
    
}
