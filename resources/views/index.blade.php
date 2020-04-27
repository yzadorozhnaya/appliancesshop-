@extends('layouts.layout')
@section('sliderwrapper')
        <div class="main-page-banner pb-50 off-white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 d-none d-lg-block">  
                    </div>
                    <div class="col-xl-9 col-lg-8 slider_box">
                        <div class="slider-wrapper theme-default">
                            <div id="slider" class="nivoSlider">
                                <a href="/shop"><img src="img/slider/1.jpg" data-thumb="img/slider/1.jpg" alt="" title="#htmlcaption" />1</a>
                                <a href="/shop"><img src="img/slider/2.jpg" data-thumb="img/slider/2.jpg" alt="" title="#htmlcaption2" />2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('content')
        <div class="image-banner pb-50 off-white-bg">
            <div class="container">
                <div class="col-img">
                    <a href="#"><img src="img/banner/h1-banner.jpg" alt="image banner"></a>
                </div>
            </div>
        </div>
        <div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
            <div class="container">
                <div class="post-title pb-30">
                    <h2>Горячі пропозиції</h2>
                </div>
                <div class="hot-deal-active owl-carousel">
                    @foreach($products as $product)
                    <div class="single-product">
                        <div class="pro-img">
                            <a href="{{route('product', ['id' => $product->id])}}">
                                <img class="primary-img" src="{{$product->image_path}}" alt="single-product">
                                <img class="secondary-img" src="{{$product->image_path}}"single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="{{route('product', ['id' => $product->id])}}">{{$product->name}}{{$product->brand}}{{$product->articul}}</a></h4>
                                    <p><span class="price"> 
                                        @if(($product->sale)>0)
                                            {{$product->price*(1-$product->sale/100)}}
                                        @else
                                            {{$product->price}}
                                        @endif
                                        </span>
                                        <del class="prev-price">
                                            @if(($product->sale)>0)
                                                {{$product->price}}
                                            @endif
                                        </del>
                                    </p>
                                    <div class="label-product l_sale">
                                        @if(($product->sale)>0)
                                            {{$product->sale}}
                                            <span class="symbol-percent">%</span>
                                        @endif
                                    </div>
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
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Нові натходження</h2>
                        </div>
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
                    <div class="tab-content">
                        <div  class="tab-pane fade show active">
                            <div class="electronics-pro-active owl-carousel">
                                @foreach($products as $product)
                                <div class="double-product">
                                    <div class="single-product">
                                        <div class="pro-img">
                                            <a href="{{route('product', ['id' => $product->id])}}">
                                                <img class="primary-img" src="{{$product->image_path}}" alt="single-product">
                                                <img class="secondary-img" src="{{$product->image_path}}"single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="{{route('product', ['id' => $product->id])}}">{{$product->name}}{{$product->brand}}{{$product->articul}}</a></h4>
                                                    <p><span class="price">
                                                            @if(($product->sale)>0)
                                                                {{$product->price*(1-$product->sale/100)}}
                                                            @else
                                                                {{$product->price}}
                                                            @endif
                                                        </span>
                                                        <del class="prev-price">
                                                            @if(($product->sale)>0)
                                                                {{$product->price}}
                                                            @endif
                                                        </del>
                                                    </p>
                                                    <div class="label-product l_sale">
                                                        @if(($product->sale)>0)
                                                            {{$product->sale}}
                                                            <span class="symbol-percent">%</span>
                                                        @endif
                                                    </div>
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
                                        <span class="sticker-new">new</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection