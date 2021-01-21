<?php

namespace App\Providers;

use App\Shop;
use App\Observers\ShopObserver;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::useModel('Category', \App\Category::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Shop::observe(ShopObserver::class);
    }
}
