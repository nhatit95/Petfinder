<?php

namespace App\Http\Controllers\Petfinder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class FinderController extends Controller
{
    public function index(){
    	// $arItems = News::orderBy('id_news', 'DESC')->paginate(4);

    	// return view('petfinder.petfinder.index', ['arItems' => $arItems]);
    	return view('petfinder.petfinder.finder');
    }
}
