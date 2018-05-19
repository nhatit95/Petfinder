<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Model\Admin\Event;
use App\Model\Admin\Event_cat;
use App\Model\Admin\Message;
use App\Model\Admin\Pet;
use App\Model\Admin\Pet_cat;
use App\Model\Admin\Post;
use App\Model\Admin\Post_cat;
use App\Model\Admin\Service;
use App\Model\Admin\Service_cat;
use App\Model\Admin\User;
use App\Model\Admin\User_cat;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('PUBLIC_URL', getenv('PUBLIC_URL'));
        View::share('ADMIN_URL', getenv('ADMIN_URL'));
        View::share('SHARE_URL', getenv('SHARE_URL'));
        View::share('PIC_URL', getenv('PIC_URL'));
        View::share('arServices', Service::all());
        View::share('arServiceCats', Service_cat::all());
        View::share('arPostCats', Post_cat::all());
        View::share('arPosts', Post::all());
        View::share('arUsers', User::all());
        // View::share('arCats', Cat::all());
        View::share('arOtherServices', $arOtherServices = Service::orderBy('service_id', 'ASC')->paginate(5));
        View::share('arOtherPosts', $arOtherPosts = Post::orderBy('post_id', 'DESC')->paginate(5));
        View::share('arOtherPets', $arOtherPets = Pet::orderBy('pet_id', 'DESC')->paginate(5));
        View::share('arBlogs', $arBlogs = Post::orderBy('post_id', 'DESC')->paginate(3));
        // View::share('advertisements', $advertisements = Advertisements::all());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
