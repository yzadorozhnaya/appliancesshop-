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
        $this->cart=new Cart();
         $ids=[];
            foreach($this->cart->products as $product) {
               $ids[] = $product['id'];
            }
        $products = Product::whereIn('id',$ids)->get()->keyBy('id');
        View::share('products', $products);
        View::share('cart', $this->cart);
        $categories = Categor::all();
        View::share('categories', $categories);

    }
    
}
