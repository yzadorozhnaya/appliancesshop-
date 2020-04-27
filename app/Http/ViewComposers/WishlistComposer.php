<?php

namespace App\Http\ViewComposers;

use App\Models\Wishlist;
use Illuminate\View\View;

class WishlistComposer
{
    public function compose(View $view) {        
        $wishlist = new Wishlist();
    return $view->with('wishlist', $wishlist);
    }
}