<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Pet;

class AjaxController extends Controller
{
     public function searchPet(Request $request){
     	 if($request->ajax()){
	    	$breed = $request->breed;
	    	$html = "";
	    	$arPets = Pet::all();
	    	$html .= '<h2> Nothing </h2>';
	   	 }
    }

    
}
