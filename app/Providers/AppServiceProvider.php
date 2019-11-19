<?php

namespace App\Providers;

use App\Models\Categor;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\View;
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
        //

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cart=new Cart();
        View::share('cart', $cart);
        $categories = Categor::all();
        View::share('categories', $categories);

    }
    
     // public function cartview() {
     // }
    
}
