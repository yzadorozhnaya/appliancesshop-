@extends('layouts.layout')
@section('sliderwrapper')
<!-- Categorie Menu & Slider Area Start Here -->
        <div class="main-page-banner pb-50 off-white-bg">
            <div class="container">
                <div class="row">
                    <!-- Vertical Menu Start Here -->
                    <div class="col-xl-3 col-lg-4 d-none d-lg-block">  
                    </div>
                    <!-- Vertical Menu End Here -->
		<!-- Slider Area Start Here -->
                    <div class="col-xl-9 col-lg-8 slider_box">
                        <div class="slider-wrapper theme-default">
                            <!-- Slider Background  Image Start-->
                            <div id="slider" class="nivoSlider">
                                <a href="/shop"><img src="img/slider/1.jpg" data-thumb="img/slider/1.jpg" alt="" title="#htmlcaption" />1</a>
                                <a href="/shop"><img src="img/slider/2.jpg" data-thumb="img/slider/2.jpg" alt="" title="#htmlcaption2" />2</a>
                            </div>
                            <!-- Slider Background  Image Start-->
                        </div>
                    </div>
                    <!-- Slider Area End Here -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        @endsection
	@section('content')
        <!-- Categorie Menu & Slider Area End Here -->
        <!-- Brand Banner Area Start Here -->
        <div class="image-banner pb-50 off-white-bg">
            <div class="container">
                <div class="col-img">
                    <a href="#"><img src="img/banner/h1-banner.jpg" alt="image banner"></a>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Brand Banner Area End Here -->
        <!-- Hot Deal Products Start Here -->
        <div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
            <div class="container">
               <!-- Product Title Start -->
               <div class="post-title pb-30">
                   <h2>Горячі пропозиції</h2>
               </div>
               <!-- Product Title End -->
                <!-- Hot Deal Product Activation Start -->
                <div class="hot-deal-active owl-carousel">
                    @foreach($products as $product)
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="{{route('product', ['id' => $product->id])}}">
                                <img class="primary-img" src="{{$product->image_path}}" alt="single-product">
                                <img class="secondary-img" src="{{$product->image_path}}"single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{route('product', ['id' => $product->id])}}">{{$product->name}}</a></h4>
                                <p><span class="price">{{$product->price}}</span><del class="prev-price">{{$product->price}}</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <form method="POST" action="{{route('cart.add')}}">
                                        @csrf
                                        <input name="id" type="hidden"  value="{{$product->id}}">
                                        <input name="count" class="quantity mr-15" type="number" min="1" value="1">
                                        <button class="btn btn-primary" type="submit" ><i class="fa fa-shopping-cart inner-right-vs"></i> + Купити</button>
                                    </form>
                                </div>
                                <div class="actions-secondary">
                                    <form method="POST" action="{{route('wishlist.add')}}">
                                        @csrf
                                        <input name="id" type="hidden"  value="{{$product->id}}">
                                         <input name="count"  type="hidden" class="quantity mr-15" type="number" min="1" value="1">
                                        <button class="btn btn-primary" type="submit" > + до списку бажань</button>
                                    </form>
                                </div>  
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    @endforeach
                </div>
                <!-- Hot Deal Product Active End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Hot Deal Products End Here -->
        <!-- Hot Deal Products End Here -->
        <!-- Arrivals Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Нові натходження</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            @foreach($categories->where('parent_id',0) as $cat)
                                @foreach($cat->child()->get() as $cat2)
                                    @foreach($cat2->child()->get() as $cat3)
                                        <li class="nav-item">
                                            <a href="{{route('newarrivals', ['slug' => $cat3->slug])}}">{{$cat3->name}}</a>
                                        </li>
                                    @endforeach
                                @endforeach
                            @endforeach
                        </ul>
                    </div> 
                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div  class="tab-pane fade show active">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                @foreach($products as $product)
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="{{route('product', ['id' => $product->id])}}">
                                                <img class="primary-img" src="{{$product->image_path}}" alt="single-product">
                                                <img class="secondary-img" src="{{$product->image_path}}"single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{route('product', ['id' => $product->id])}}">{{$product->name}}</a></h4>
                                                <p><span class="price">{{$product->price}}</span><del class="prev-price">{{$product->price}}</del></p>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <form method="POST" action="{{route('cart.add')}}">
                                                        @csrf
                                                        <input name="id" type="hidden"  value="{{$product->id}}">
                                                        <input name="count" class="quantity mr-15" type="number" min="1" value="1">
                                                        <button class="btn btn-primary" type="submit" ><i class="fa fa-shopping-cart inner-right-vs"></i> + Купити</button>
                                                    </form>
                                                </div>
                                                
                                                <div class="actions-secondary">
                                                    <form method="POST" action="{{route('wishlist.add')}}">
                                                        @csrf
                                                        <input name="id" type="hidden"  value="{{$product->id}}">
                                                        <button class="btn btn-primary" type="submit" > + до списку бажань</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                @endforeach
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->
        <!-- Register Account End -->
    @endsection