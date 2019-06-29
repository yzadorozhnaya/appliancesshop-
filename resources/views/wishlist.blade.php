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
       <div class="cart-main-area wish-list ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Form Start -->
                        <form action="#">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-remove">Remove</th>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Unit Price</th>
                                            <th class="product-quantity">Stock Status</th>
                                            <th class="product-subtotal">add to cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="img/products/6.jpg" alt="cart-image" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">Vestibulum suscipit</a></td>
                                            <td class="product-price"><span class="amount">£165.00</span></td>
                                            <td class="product-stock-status"><span>in stock</span></td>
                                            <td class="product-add-to-cart"><a href="#">add to cart</a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                            <td class="product-thumbnail">
                                               <a href="#"><img src="img/products/22.jpg" alt="cart-image" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
                                            <td class="product-price"><span class="amount">£50.00</span></td>
                                            <td class="product-stock-status"><span>in stock</span></td>
                                            <td class="product-add-to-cart"><a href="#">add to cart</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Content Start -->
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </div>
    @endsection