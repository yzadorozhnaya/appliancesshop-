@extends('layouts.layout')
    @section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                     <ul class="d-flex align-items-center">
                        <li><a href="{{route('index')}}">Головна</a></li>
                        <li class="active"><a href="{{route('about')}}">Про нас</a></a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Cart Main Area Start -->
        <div class="cart-main-area ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    @if(count($cart->products)<1)
                <h1>The shopping cart is empty</h1>
            @else
                    <div class="col-md-12 col-sm-12">
                        <!-- Form Start -->
                        <form action="#">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-45">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Картинка</th>
                                            <th class="product-name">Продукт</th>
                                            <th class="product-price">Цена</th>
                                            <th class="product-quantity">Количество</th>
                                            <th class="product-subtotal">Общее количество</th>
                                            <th class="product-remove">Удалить</th>
                                        </tr>
                                    </thead>
                                     @foreach($cart->products as $product)
                                        <tbody>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="{{$products->get($product['id'])->image_path}}" alt="cart-image"></a>
                                                </td>
                                                <td class="product-name"><a href="#">{{$products->get($product['id'])->name}}</a></td>
                                                <td class="product-price"><span class="amount">{{$product['price']}}</span></td>
                                                <td class="product-quantity"><input type="number" value="1" /><a href="#">{{$product['count']}}</a></td> 
                                                <td class="product-subtotal">£165.00</td>
                                                <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                            </tr>                                    
                                        </tbody> 
                                    @endforeach
                                </table>
                            </div>
                            <!-- Table Content Start -->
                            <div class="row">
                               <!-- Cart Button Start -->
                                <div class="col-md-8 col-sm-12">
                                    <div class="buttons-cart">
                                        <input type="submit" value="обновить корзину" />
                                        <a href="{{route('categories')}}">продолжить покупки</a>
                                    </div>
                                </div>
                                <!-- Cart Button Start -->
                                <!-- Cart Totals Start -->
                                <div class="col-md-4 col-sm-12">
                                    <div class="cart_totals float-md-right text-md-right">
                                        <h2>Cart Totals</h2>
                                        <br />
                                        <table class="float-md-right">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>сумма</th>
                                                    <td><span class="amount">{{$cart->sum}}</span></td>
                                                </tr>
                                                <tr class="cart-subtotal">
                                                    <th>количество</th>
                                                    <td><span class="amount">{{$cart->count}}</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong><span class="amount">$215.00</span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="#">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Totals End -->
                            </div>
                            <!-- Row End -->
                        </form>
                        <!-- Form End -->
                    </div>
                        @endif
                </div>
                 <!-- Row End -->
            </div>
        </div>
        <!-- Cart Main Area End -->
         @include('layouts.footer')
    </div>
    <!-- Main Wrapper End Here -->
   @endsection