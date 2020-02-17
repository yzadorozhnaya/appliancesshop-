<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\CartComposer;
use App\Http\ViewComposers\WishlistComposer;
use App\Http\ViewComposers\ProductComposer;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
          view()->composer('*', CartComposer::class);
          view()->composer('*', WishlistComposer::class);
         view()->composer('layouts.header', ProductComposer::class);
    }
}
