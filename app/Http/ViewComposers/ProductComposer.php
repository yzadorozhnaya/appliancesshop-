<?php

namespace App\Http\ViewComposers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\View\View;

class ProductComposer
{
    public function compose(View $view) {
    	$cart = new Cart();
        $ids=[];
        foreach($cart->products as $product) {
           $ids[] = $product['id'];
        }
        $products = Product::whereIn('id',$ids)->get()->keyBy('id');              
    return $view->with('products', $products);       
    }
}