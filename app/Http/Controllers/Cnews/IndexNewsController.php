<?php

namespace App\Http\Controllers\Cnews;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\News;
use App\Model\Admin\Advertisements;
class IndexNewsController extends Controller
{
    public function index(){
    	$arItems = News::orderBy('id_news', 'DESC')->paginate(4);

    	return view('cnews.news.index', ['arItems' => $arItems]);
    }
}
