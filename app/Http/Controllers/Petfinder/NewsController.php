<?php

namespace App\Http\Controllers\petfinder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\News;
use App\Model\Admin\Cat;

class NewsController extends Controller
{

    public function cat($slug, $id){
        $arItems = News::where('id_cat', '=', $id)->orderBy('id_news', 'DESC')->paginate(getenv('ROW_COUNT'));
        $arCat = Cat::find($id);
    	return view('petfinder.news.cat', ['arItems' => $arItems, 'arCat' => $arCat]);
    }
    public function add(){
    	return view('petfinder.news.add');
    }
    public function detail($slug, $id = 0){
        if ($id == 0) {
            return view('petfinder.news.error');
        }else{
            
            $arItem = News::findOrFail($id);
        	return view('petfinder.news.detail', ['arItem' => $arItem]);
        }
    }

}
