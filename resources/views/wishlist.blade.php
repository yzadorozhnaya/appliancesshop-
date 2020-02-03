@extends('layouts.layout')
    @section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="{{route('index')}}">Головна</a></li>
                        <li class="active"><a href="/wishlist">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Wish List Start -->
        @if(session('success'))
            <h1>{{session('success')}}</h1>
        @endif
       <div class="cart-main-area wish-list ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        @if(!$wishlist->products)
                         <h1 >Список бажань</h1>
                          <div class="wc-proceed-to-checkout">
                                            <a href="{{route('categories')}}">продолжить покупки</a>
                                        </div>
                        
                        @else
                        <!-- Form Start -->
                        
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-remove">Видалити</th>
                                            <th class="product-thumbnail">зображення</th>
                                            <th class="product-name">Продукт</th>
                                            <th class="product-price">Ціна</th>
                                            <th class="product-quantity">статус</th>
                                            <th class="product-subtotal">+ купити</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        @foreach($wishlist->products as $product)
                                        <tr>
                                            <form method="POST" action="{{route('wishlist.remove')}}">
                                                @csrf
                                                    <td class="product-remove">
                                                        <input name="id" type="hidden"  value="{{$product['id']}}">
                                                        <button type="submit"> <a href=""><i class="fa fa-times"></i></a></button>
                                                    </td>
                                            </form>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="{{$products->get($product['id'])->image_path}}" alt="cart-image"></a>
                                            </td>
                                            <td class="product-name"><a href="#"></a>{{$products->get($product['id'])->name}}<br>{{$products->get($product['id'])->articul}}</td>
                                            <td class="product-price"><span class="amount">{{$product['price']}}</span></td>
                                            <td class="product-quantity">Є в наявності</td>
                                            <form method="POST" action="{{route('cart.add')}}">
                                                                        @csrf
                                                                        <td class="product-quantity">
                                                                            <input name="id" type="hidden"  value="{{$product['id']}}">
                                                                            <input name="count" class="quantity mr-15" type="number" min="1" value="1">
                                                                            <button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart inner-right-vs"></i></button>
                                                                        </td>
                                            </form>
                                            
                                        </tr> 
                                        @endforeach 
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Content Start -->
                       
                        <!-- Form End -->
                         @endif
  
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </div>
    @endsection