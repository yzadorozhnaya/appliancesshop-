@extends('layouts.layout')
@section('content')
    <div class="breadcrumb-area mt-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('index')}}">Головна</a></li>
                    <li><a href="{{route('categories')}}">Усі категорії</a></li>
                    <li><a href="#">{{$product->category->parent->parent->name}}</a></li>
                    <li><a href="#">{{$product->category->parent->name}}</a></li>
                    <li><a href="{{route('shop', ['slug' => $slug])}}">{{$product->category->name}}</a></li>
                    <li class='active'>{{$product->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-product-thumbnail ptb-100 ptb-sm-60">
        <div class="container">
            <div class="thumb-bg">
                <div class="row">
                    <div class="col-lg-5 mb-all-40">
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane fade show active">
                                <a data-fancybox="images" href="{{$product->image_path}}"><img src="{{$product->image_path}}" alt="product-view"></a>
                            </div>
                            <div id="thumb2" class="tab-pane fade">
                                <a data-fancybox="images" href="{{$product->image_path}}"><img src="{{$product->image_path}}" alt="product-view"></a>
                            </div>
                            <div id="thumb3" class="tab-pane fade">
                                <a data-fancybox="images" href="{{$product->image_path}}"><img src="{{$product->image_path}}" alt="product-view"></a>
                            </div>
                            <div id="thumb4" class="tab-pane fade">
                                <a data-fancybox="images" href="{{$product->image_path}}"><img src="{{$product->image_path}}" alt="product-view"></a>
                            </div>
                            <div id="thumb5" class="tab-pane fade">
                                <a data-fancybox="images" href="{{$product->image_path}}"><img src="{{$product->image_path}}" alt="product-view"></a>
                            </div>
                        </div>
                        <div class="product-thumbnail mt-15">
                            <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                <a class="active" data-toggle="tab" href="#thumb1"><img src="{{$product->image_path}}" alt="product-thumbnail"></a>
                                <a data-toggle="tab" href="#thumb2"><img src="{{$product->image_path}}" alt="product-thumbnail"></a>
                                <a data-toggle="tab" href="#thumb3"><img src="{{$product->image_path}}" alt="product-thumbnail"></a>
                                <a data-toggle="tab" href="#thumb4"><img src="{{$product->image_path}}" alt="product-thumbnail"></a>
                                <a data-toggle="tab" href="#thumb5"><img src="{{$product->image_path}}" alt="product-thumbnail"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="thubnail-desc fix">
                            <h3 class="product-header">{{$product->name}} {{$product->brand}} {{$product->articul}}</h3>
                            <div class="rating-summary fix mtb-10">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="rating-feedback">
                                        <a href="#">
                                            @if(count($comments)>0)
                                                ({{$count}} відгук)
                                            @else
                                                (0 відгукiв)
                                            @endif
                                        </a>
                                        <a href="#reviewreview">Додати свій відгук</a>
                                </div>
                            </div>
                            <div class="pro-price mtb-30">
                                    <p class="d-flex align-items-center">
                                        <span class="prev-price">
                                            @if(($product->sale)>0)
                                                {{$product->price}}
                                            @endif
                                        </span>
                                        <span class="price">
                                            @if(($product->sale)>0)
                                                {{$product->price*(1-$product->sale/100)}}
                                            @else
                                                {{$product->price}}
                                            @endif
                                        </span>
                                        @if(($product->sale)>0)
                                            <span class="saving-price">
                                                Повертаемо {{$product->sale}}%
                                            </span>
                                        @endif
                                    </p>
                            </div>
                            <p class="mb-20 pro-desc-details">{{$description}}</p>
                            <div class="color clearfix mb-20">
                                <label>color</label>
                                <ul class="color-list">
                                    <li>
                                        <a class="orange active" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="paste" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-quantity d-flex hot-product2">
                            @section('proactions')
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <form method="POST" action="{{route('cart.add')}}">
                                            @csrf
                                            <input name="id" type="hidden"  value="{{$product->id}}">
                                            <input name="count" class="quantity mr-15" type="number" min="1" value="1">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart inner-right-vs"></i> + Купити</button>
                                        </form>
                                    </div>
                                    <div class="actions-secondary">
                                        <!--<a href="{{route('cart')}}" title="" data-original-title="Купити"> + Купити</a>-->
                                        <form method="POST" action="{{route('wishlist.add')}}">
                                            @csrf
                                            <input name="id" type="hidden"  value="{{$product->id}}">
                                            <input name="count"  type="hidden" class="quantity mr-15" type="number" min="1" value="1">
                                            <button  type="submit"><a href="" data-original-title="Список Бажання"><i class="lnr lnr-heart"></i><span>Додати до списку бажань</span></a>
                                            </button>
                                        </form>                                       
                                    </div>
                                </div>
                            @show
                            </div>
                            <div class="pro-ref mt-20">
                                    <p><span class="in-stock"><i class="ion-checkmark-round"></i>
                                        @if($stok==1)
                                            В НАЯВНОСТІ
                                        @else
                                            НЕМАЄ В НАЯВНОСТІ
                                        @endif
                                        </span>
                                    </p>
                            </div>
                            <div class="socila-sharing mt-25">
                                <ul class="d-flex">
                                    <li>share</li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thumnail-desc pb-100 pb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="main-thumb-desc nav tabs-area" role="tablist">
                        <li><a class="active" data-toggle="tab" href="#dtail">Опис</a></li>
                        <li><a data-toggle="tab" id="reviewreview" href="#review">Відгуки</a></li>
                    </ul>
                    <div class="tab-content thumb-content border-default">
                        <div id="dtail" class="tab-pane fade show active">
                            <p>{{$product->description}}</p>
                        </div>
                        <div id="review" class="tab-pane fade">
                            <div class="review border-default universal-padding">
                                <div class="group-title">
                                    <h2>Відгуки клієнтів о {{$product->name}}</h2>
                                </div>
                                <div class="sidebar-desc mb-50">
                                    @foreach($comments as $comment)
                                        <blockquote class="mtb-30"> <p>{{$comment->body}}</span></blockquote>
                                        <p>{{$users->get($comment['user_id'])->name}}</p>
                                        <p>{{$comment->created_at->format('d.m.y')}}</p>
                                    @endforeach
                                </div>
                                <h4 class="review-mini-title">Truemart</h4>
                                <ul class="review-list">
                                    <li>
                                        <span>Quality</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <label>Truemart</label>
                                    </li>
                                    <li>
                                        <span>price</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <label>Review by <a href="https://themeforest.net/user/hastech">Truemart</a></label>
                                    </li>
                                    <li>
                                        <span>value</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <label>Posted on 7/20/18</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="review border-default universal-padding mt-30">
                                <h2 class="review-title mb-30">Ви переглядаєте: <br><span>{{$product->name}} {{$product->brand}} {{$product->articul}}</span></h2>
                                @if(!auth()->check())
                                    Будь ласка зареєструйтеся!Для того щоб мати можливість лишити відгук!
                                @else
                                    <p class="review-mini-title">your rating</p>
                                    <ul class="review-list">
                                        <li>
                                            <span>Quality</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li>
                                            <span>price</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                        <li>
                                            <span>value</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    @if(session('success'))
                                        <h1>{{session('success')}}</h1>
                                    @endif
                                    <div class="riview-field mt-40">
                                        <form method="POST" action="{{route('prodact.addComment', ['id' => $product->id])}}">
                                            @csrf   
                                            <div class="form-group">
                                                <label class="req" for="sure-name">Nickname</label>
                                                <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="subject">Summary</label>
                                                <input type="text" class="form-control" name="sub" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label class="req" for="comments">Review</label>
                                                <textarea class="form-control" rows="5" name="comment" required="required"></textarea>
                                            </div>
                                            <button type="submit" class="customer-btn">Submit Review</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
