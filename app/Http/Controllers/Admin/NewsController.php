<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Model\Admin\News;
use App\Model\Admin\Cat;
use App\Http\Requests\NewsRequest;
class NewsController extends Controller
{
    public function __construct(News $mNews, Cat $mCat){
        $this->mNews = $mNews;
        $this->mCat  = $mCat;
    }
    public function index(){
        $oItems = $this->mNews->getItems();
    	return view('admin.news.index', compact('oItems'));
    }

    public function getAdd(){
        $oItems = $this->mCat->getItems();
    	return view('admin.news.add', compact('oItems'));
    }
    public function postAdd(NewsRequest $request){
        $picture = $request->hinhanh;

        if ($picture != '') {
            $path = $request->file('hinhanh')->store('files');
            $tmp = explode('/', $path);
            $picture = end($tmp);
        }else{
            $picture = 'nopic.jpg';
        }
        $oItem = [
            'name'           => trim($request->name),
            'preview_text'   => trim($request->preview_text),
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s'),
            'detail_text'    => trim($request->detail_text),
            'id_cat'         => trim($request->id_cat),
            'picture'        => $picture,
        ];

        $result = $this->mNews->addItem($oItem);
        if ($result) {
            $request->session()->flash('msg', 'Thêm thành công');
        }else{
            $request->session()->flash('msg', 'Lỗi trong quá trình thêm');
        }
        return redirect()->route('admin.news.index');
    }

    public function getEdit($id){
    	$oItem = $this->mNews->getItem($id);
        $arCats = $this->mCat->getItems();
        return view('admin.news.edit', compact('oItem', 'arCats'));
    }

    public function postEdit($id, NewsRequest $request){
        $newPicture = $request->newPicture;

        if ($newPicture != '') {
            $path = $request->file('newPicture')->store('files');
            $tmp = explode('/', $path);
            $newPicture = end($tmp);
            $moItem = [
                'name'           => trim($request->name),
                'preview_text'   => trim($request->preview_text),
                'detail_text'    => trim($request->detail_text),
                'id_cat'         => trim($request->id_cat),
                'updated_at'     => date('Y-m-d H:i:s'),
                'picture'        => $newPicture,
            ];
        }else{
            $moItem = [
                'name'           => trim($request->name),
                'preview_text'   => trim($request->preview_text),
                'detail_text'    => trim($request->detail_text),
                'updated_at'     => date('Y-m-d H:i:s'),
                'id_cat'         => trim($request->id_cat),
            ];
        }

        $result = $this->mNews->editItem($id, $moItem);
        if ($result) {
            $request->session()->flash('msg', 'Sửa thành công');
        }else{
            $request->session()->flash('msg', 'Lỗi trong quá trình sửa');
        }
        return redirect()->route('admin.news.index');
    }

    public function del($id, Request $request){

        $result = $this->mNews->delItem($id);
        if ($result) {
            $request->session()->flash('msg', 'Xóa thành công');
        }else{
            $request->session()->flash('msg', 'Lỗi trong quá trình xóa');
        }
        return redirect()->route('admin.news.index');
    }
    public function search(){
        
    }
}
