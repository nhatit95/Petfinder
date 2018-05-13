<?php

namespace App\Http\Controllers\Petfinder;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Post;
use App\Model\Admin\Post_cat;
use App\Model\Admin\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
class BlogDetailController extends Controller
{
	public function __construct(Post $mBlog, Post_cat $mBlogCat, User $mUser){
        $this->mBlog = $mBlog;
        $this->mBlogCat = $mBlogCat;
        $this->mUser = $mUser;
    }

    public function show($id){
        $arBlog     = $this->mBlog->getItem($id);
        $arBlogCats = $this->mBlogCat->getItems();
        $arUsers    = $this->mUser->getItems();
    	// return view('petfinder.petfinder.servicedetail');
    	return view('petfinder.petfinder.blogdetail', compact('arBlog', 'arBlogCats', 'arUsers'));
    }
    
}
