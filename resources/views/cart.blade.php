@extends('layouts.layout')
    @section('content')
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                     <ul class="d-flex align-items-center">
                        <li><a href="{{route('index')}}">Головна</a></li>
                        <li class="active"><a href="{{route('about')}}">Про нас</a></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-main-area ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                    @if(count($cart->products)<1)
                        <h1 >Кошик порожній</h1>
                        <div class="wc-proceed-to-checkout">
                            <a href="{{route('categories')}}">продолжить покупки</a>
                        </div>
                    @else
                        <div class="table-content table-responsive mb-45">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">зображення</th>
                                        <th class="product-name">Продукт</th>
                                        <th class="product-price">Ціна</th>
                                        <th class="product-quantity">Кількість</th>
                                        <th class="product-subtotal">загальна Ціна</th>
                                        <th class="product-remove">Видалити</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart->products as $product)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="{{$products->get($product['id'])->image_path}}" alt="cart-image"></a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#"></a>{{$products->get($product['id'])->name}}<br>{{$products->get($product['id'])->articul}}
                                        </td>
                                        <td class="product-price">
                                            <span class="amount">
                                                <del class="prev-price">
                                                    @if($product['sale']>0)
                                                        {{$product['price']}}
                                                    @endif
                                                </del>
                                            </span>
                                            <span class="price">
                                            @if($product['sale']>0)
                                                {{$product['price']*(1-$product['sale']/100)}}
                                            @else                                            
                                                {{$product['price']}}
                                            @endif
                                            </span>
                                        </td>
                                        <form method="POST" action="{{route('cart.change')}}">
                                            @csrf
                                                <td class="product-quantity">
                                                    <input name="id" type="hidden"  value="{{$product['id']}}">
                                                    <input name="count" class="quantity mr-15" type="number" min="1" value="{{$product['count']}}">
                                                    <button class="btn btn-danger" type="submit"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
                                                </td>
                                        </form>
                                        <td class="product-subtotal">
                                            <del class="prev-price">
                                                    @if($product['sale']>0)
                                                        {{$product['count']*$product['price']}}
                                                    @endif
                                                </del>
                                            <span class="price">
                                                @if($product['sale']>0)
                                                    {{$product['count']*$product['price']*(1-$product['sale']/100)}}
                                                @else
                                                    {{$product['count']*$product['price']}}
                                                @endif
                                            </span>
                                        </td>
                                        <form method="POST" action="{{route('cart.remove')}}">
                                            @csrf
                                                <td class="product-remove">
                                                    <input name="id" type="hidden"  value="{{$product['id']}}">
                                                    <button type="submit"><a href=""><i class="fa fa-times"></i></a></button>
                                                </td>
                                        </form>
                                    </tr> 
                                    @endforeach                                   
                                </tbody> 
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="buttons-cart">
                                    <a href="{{route('cart')}}">обновить корзину</a>
                                    <a href="{{route('categories')}}">продолжить покупки</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="cart_totals float-md-right text-md-right">
                                    <h2>Cart Totals</h2><br/>                                    
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
                                                <th>сумма+%скидки</th>
                                                <td>
                                                    <strong><span class="amount">{{$cart->sumsale}}</span></strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="{{route('checkout')}}">оформление заказа</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
   @endsection