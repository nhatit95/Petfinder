<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Model\Admin\Cat;
use App\Model\Admin\News;
use App\Model\Admin\Advertisements;


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
        View::share('arCats', Cat::all());
        View::share('arItems', $arItems = News::orderBy('id_news', 'DESC')->paginate(4));
        View::share('advertisements', $advertisements = Advertisements::all());
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
