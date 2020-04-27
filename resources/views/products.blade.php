@if(count($products)<1)
    <h1 >Товар відсутній</h1>
@else
    <div class="tab-content fix">
        <div id="grid-view" class="tab-pane fade show active">
            <div class="products">
                <div class="row">
                    @foreach($products as $product_item)
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
                                            
                                                <p><span class="price">
                                                    @if(($product_item->sale)>0)
                                                        {{$product_item->price*(1-$product_item->sale/100)}}
                                                    @else
                                                        {{$product_item->price}}
                                                    @endif
                                                    </span>
                                                    <del class="prev-price">
                                                        @if(($product_item->sale)>0)
                                                            {{$product_item->price}}
                                                        @endif
                                                    </del>
                                                </p>
                                                <div class="label-product l_sale">
                                                    @if(($product_item->sale)>0)
                                                        {{$product_item->sale}}
                                                        <span class="symbol-percent">%</span>
                                                    @endif
                                                </div>
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
        </div>
        <div id="list-view" class="tab-pane fade">
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
                                        <p><span class="price">
                                                @if(($product_item->sale)>0)
                                                    {{$product_item->price*(1-$product_item->sale/100)}}
                                                @else 
                                                    {{$product_item->price}}  
                                                @endif  
                                            </span>
                                            <del class="prev-price">
                                                @if(($product_item->sale)>0)
                                                    {{$product_item->price}}
                                                @endif
                                            </del>
                                        </p>
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
                                                <a href="{{route('wishlist')}}" title data-original-title="WishList"><i class="lnr lnr-heart"></i><span>+ Список Бажань</span></a>
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
    </div>
@endif