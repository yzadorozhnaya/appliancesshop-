@extends('layouts.layout')
    @section('content')

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="{{route('index')}}">Головна</a></li>
                        <li class="active"><a href="{{route('categories')}}">Магазин</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Shop Page Start -->
        <div class="main-shop-page pt-100 pb-100 ptb-sm-60">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                   <div class="col-lg-3 order-2 order-lg-1">
                        <div class="sidebar">
                            <!-- Sidebar Electronics Categorie Start -->
                            @foreach($categories->where('parent_id',0) as $cat)
                             <div class="electronics mb-40">
                                <h3 class="sidebar-title">{{$cat->name}}</h3>
                                <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                                    <ul>
                                         @foreach($cat->child()->get() as $cat2)
                                        <li class="has-sub"><a href="#">{{$cat2->name}}</a>
                                            <ul class="category-sub">
                                                @foreach($cat2->child()->get() as $cat3)
                                                <li><a href="{{route('shop', ['slug' => $cat3->slug])}}">{{$cat3->name}}</a></li>
                                                @endforeach
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                                <!-- category-menu-end -->
                             </div>
                            @endforeach
                            <!-- Sidebar Electronics Categorie End -->
                            <div class="search-filter mb-40">
                             <div class="sidbar-style"><!--price-range-->
                                <div class="well">
                                   <h3 class="sidebar-title">filter by price</h3>
                                    <div id="slider-range"></div>
                                    <br>
                                    <b class="pull-left">$
                                        <input size="2" type="text" id="amount_start" name="start_price"
                                               value="500" style="border:0px; font-weight: bold; color:green" readonly="readonly" /></b>
                                    <b class="pull-right">$
                                        <input size="2" type="text" id="amount_end" name="end_price" value="10000"
                                               style="border:0px; font-weight: bold; color:green" readonly="readonly"/></b>
                                   </div>
                            </div><!--/price-range-->
                            </div>
                            <!-- Product Size Start -->
                            <div class="size mb-40">
                                <h3 class="sidebar-title">size</h3>
                                <ul class="size-list sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="small" type="checkbox">
                                        <label class="form-check-label" for="small">S (6)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="medium" type="checkbox">
                                        <label class="form-check-label" for="medium">M (9)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="large" type="checkbox">
                                        <label class="form-check-label" for="large">L (8)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Size End -->
                            <!-- Product Color Start -->
                            <div class="color mb-40">
                                <h3 class="sidebar-title">color</h3>
                                <ul class="color-option sidbar-style">
                                    <li>
                                        <span class="white"></span>
                                        <a href="#">white (4)</a>
                                    </li>
                                    <li>
                                        <span class="orange"></span>
                                        <a href="#">Orange (2)</a>
                                    </li>
                                    <li>
                                        <span class="blue"></span>
                                        <a href="#">Blue (6)</a>
                                    </li>
                                    <li>
                                        <span class="yellow"></span>
                                        <a href="#">Yellow (8)</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Color End -->
                            <!-- Product Top Start -->
                            <div class="top-new mb-40">
                                <h3 class="sidebar-title">Top New</h3>
                                <div class="side-product-active owl-carousel">
                                    <!-- Side Item Start -->
                                    <div class="side-pro-item">
                                        <!-- Single Product Start -->
                                        @foreach($products->sortByDesc('created_at') as $product_item)
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="{{route('product', ['id' => $product_item->id])}}">
                                                    <img class="primary-img" src="{{$product_item->image_path}}" alt="single-product">
                                                    <img class="secondary-img" src="{{$product_item->image_path}}" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">@if(($product_item->sale)>0){{$product_item->sale}} @endif<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="{{route('product', ['id' => $product_item->id])}}">{{$product_item->name}}</a>
                                                    <a>{{$product_item->brand}}</a>
                                                    <a>{{$product_item->articul}}</a>
                                                </h4>
                                                
                                                    <p><span class="price">@if(($product_item->sale)>0){{$product_item->price*(1-$product_item->sale/100)}}</span>
                                                        <del class="prev-price">{{$product_item->price}}</del></p>
                                                    @else<p><span class="price">{{$product_item->price}}</span></p>@endif
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        @endforeach
                                        <!-- Single Product End -->           
                                    </div>
                                </div>
                            </div>
                            <!-- Product Top End -->                            
                            <!-- Single Banner Start -->
                            <div class="col-img">
                                <a href="#"><img src="{{asset("img/banner/banner-sidebar.jpg")}}" alt="slider-banner"></a>
                            </div>
                            <!-- Single Banner End -->
                        </div>
                    </div>
                    <!-- Sidebar Shopping Option End -->
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- Grid & List View Start -->
                        <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                            <div class="grid-list-view  mb-sm-15">
                                <ul class="nav tabs-area d-flex align-items-center">
                                    <li><a class="active" data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li><a data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-flex align-items-center">
                                    <label>Фильтр:</label>
                                    <select class="sorter wide">
                                        <option value="Position">Актуальность</option>
                                        <option value="Product Name">Имя, A to Z</option>
                                        <option value="Product Name">Имя, Z to A</option>
                                        <option value="Price">Цена от низкой к высокой </option>

                                     <option value="Price" selected>Цена от высокой к низкой</option>
                                    </select>

                                </div>
                            </div>
                            <nav class="d-none d-lg-block">
                               
                                <ul class="header-bottom-list d-flex">
                            <li><a>Фильтр<i class="fa fa-angle-down"></i></a>
                                        <ul class="ht-dropdown dropdown-style-two">
                                            <li><a href="{{route('pricedown', ['slug' => $slug])}}">Цена от высокой к низкой</a></li>
                                           <li> <a href="{{route('priceup', ['slug' => $slug])}}">Цена от низкой к высокой </a></li> 
                                            
                                        </ul>
                                             </ul>
                                </nav>
                            <!-- Toolbar Short Area End -->
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-flex align-items-center">
                                    <label>Show:</label>
                                    <select class="sorter wide">
                                        <option value="12">12</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                        </div>
                       
                        <div>
                            <form method="POST" action="{{route('product.search')}}"  class="filter">
                                @csrf
                                    <input type="text" name="name" placeholder="" id="search_name">
                                    <input type="text" name="brand" placeholder="" id="search_brand">
                            </form>        
                        </div>
                        <!-- Grid & List View End -->
                        <div class="main-categorie mb-all-40" id="updateDiv">
                            <!-- Grid & List Main Area End -->
                            @if(count($products)<1)
                                <h1 >Товар відсутній</h1>
                            @else
                            <div class="tab-content fix">
                                <div id="grid-view" class="tab-pane fade show active">
                                    <div class="products">
                                        <div class="row">
                                            @foreach($products as $product_item)
                                            <!-- Single Product Start -->
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                    <div class="single-product">
                                                        <div class="product">   
                                                            <div class="pro-img">
                                                                    <a href="{{route('product', ['id' => $product_item->id])}}" hrefname="name">
                                                                        <img class="primary-img" src="{{$product_item->image_path}}" alt="single-product">
                                                                        <img class="secondary-img" src="{{$product_item->image_path}}" alt="single-product">
                                                                    </a>
                                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View">
                                                                        <i class="lnr lnr-magnifier"></i>
                                                                    </a>
                                                            </div>
                                            
                                                            <div class="pro-content">
                                                                <div class="pro-info">
                                                                        <h4 id="name">
                                                                            <a href="{{route('product', ['id' => $product_item->id])}}">{{$product_item->name}}</a>
                                                                        </h4>
                                                                            <a>{{$product_item->brand}}</a>
                                                                            <a>{{$product_item->articul}}</a>
                                                                        @if(($product_item->sale)>0)
                                                                            <p><span class="price">
                                                                                {{$product_item->price*(1-$product_item->sale/100)}}</span>
                                                                                <del class="prev-price">{{$product_item->price}}</del>
                                                                            </p>
                                                                            <div class="label-product l_sale">{{$product_item->sale}}
                                                                                <span class="symbol-percent">%</span>
                                                                            </div>
                                                                        @else
                                                                            <p>
                                                                                <span class="price">{{$product_item->price}}</span>
                                                                            </p>
                                                                        @endif
                                                                </div>        
                                                                <div class="pro-actions">
                                                                    <div class="actions-primary">
                                                                        <form method="POST" action="{{route('cart.add')}}">
                                                                            @csrf
                                                                            <input name="id" type="hidden"  value="{{$product_item->id}}">
                                                                            <input name="count" class="quantity mr-15" type="number" min="1" value="1">
                                                                            <button class="btn btn-primary" type="submit" ><i class="fa fa-shopping-cart inner-right-vs"></i> + Купити</button>
                                                                        </form>
                                                                    </div>
                                                                   
                                                                    <div class="actions-secondary">
                                                                        <form method="POST" action="{{route('wishlist.add')}}">
                                                                            @csrf
                                                                            <input name="id" type="hidden"  value="{{$product_item->id}}">
                                                                            <input name="count"  type="hidden" class="quantity mr-15" type="number" min="1" value="1">
                                                                            <button class="btn btn-primary" type="submit" > + до списку бажань</button>
                                                                        </form>
                                                                    </div>   

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>    
                                    </div>
                                    <!-- Row End -->
                                </div>
                              
                                <!-- #grid view End -->
                                <div id="list-view" class="tab-pane fade">
                                    <!-- Single Product Start -->
                                    <div class="products">
                                        @foreach($products as $product_item)
                                            <div class="single-product"> 
                                                <div class="row"> 
                                                    <div class="product"> 
                                                        <div class="col-lg-4 col-md-5 col-sm-12">
                                                            <div class="pro-img">
                                                                <a href="{{route('product', ['id' => $product_item->id])}}">
                                                                    <img class="primary-img" src="{{$product_item->image_path}}"  alt="single-product">
                                                                    <img class="secondary-img" src="{{$product_item->image_path}}" alt="single-product">
                                                                </a>
                                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                                 <span class="sticker-new">new</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-7 col-sm-12">
                                                            <div class="pro-content hot-product2">
                                                                <h4><a href="{{route('product', ['id' => $product_item->id])}}">{{$product_item->name}}
                                                                {{$product_item->brand}}{{$product_item->articul}}</a>
                                                                </h4>
                                                               <p><span class="price">@if(($product_item->sale)>0){{$product_item->price*(1-$product_item->sale/100)}}</span>
                                                               <del class="prev-price">{{$product_item->price}}</del></p>
                                                               @else<p><span class="price">{{$product_item->price}}</span></p>@endif
                                                                <p>{{$product_item->description}}</p>
                                                                <div class="pro-actions">
                                                                    <div class="actions-primary">
                                                                       <form method="POST" action="{{route('cart.add')}}">
                                                                        @csrf
                                                                            <input name="id" type="hidden"  value="{{$product_item->id}}">
                                                                            <input name="count" class="quantity mr-15" type="number" min="1" value="1">
                                                                            <button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart inner-right-vs"></i> + Купити</button>
                                                                        </form>
                                                                    </div>
                                                                    <div class="actions-secondary">
                                                                        <a href="{{route('wishlist')}}" title data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>+ Список Бажань</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- #list view End -->
                            </div>
                            @endif
                            <!-- Grid & List Main Area End -->
                        </div>
                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div> 
        <script type="text/javascript">
            window.onload = function() {
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });
                
                     $('#search_name,#search_brand').keyup(function(){
                            var name = $('#search_name').val();
                            var brand = $('#search_brand').val();
                           
                            $.ajax({
                                url:"/product/search",
                                method: 'POST',
                                
                                data: {
                                    'name':name,
                                    'brand':brand,
                                },

                            })
                                .done(function(data){
                                        console.log(data);
                                        $(".product").remove();
                                        var html='';
                                        $.each(data, function ( index, value ) {
                                            console.log( value.name,value.brand,value.image_path,value.id);
                                        html += '<div class="product content"><div class="pro-info"><h4 id="name"><a href="">'+value.name+'</a></h4><a>'+value.brand+'</a><a>'+value.articul+'</a><p><span class="price">'+value.price+'</span><del class="prev-price">'+value.price+'</del></p><a><img class="primary-img" src= '+value.image_path+' alt="single-product"></img></a></div></div>'
                                        });
                                        $('.products').append(html);
                                })

                                    .fail(function(jqXHR,textStatus){
                                        alert("(((((((:"+ textStatus);
                                    });
                    });

        $(function () {
        $("#slider-range").slider({
            range: true,
            min: 100,
            max: 15000,
            values: [500, 10000],
            slide: function (event, ui) {
                $("#amount_start").val(ui.values[ 0 ]);
                $("#amount_end").val(ui.values[ 1 ]);
                var start = $('#amount_start').val();
                var end = $('#amount_end').val();
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "start=" + start + "& end=" + end,
                    success: function (response) {
                        console.log(response);
                        $('#updateDiv').html(response);        
                    }

                });
            }
        }); 
         });  
            };
     
        </script> 
        

    @endsection