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
                                <a href="/shop"><img src="img/slider/1.jpg" data-thumb="img/slider/1.jpg" alt="" title="#htmlcaption" /></a>
                                <a href="/shop"><img src="img/slider/2.jpg" data-thumb="img/slider/2.jpg" alt="" title="#htmlcaption2" /></a>
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
                   <h2>hot deals</h2>
               </div>
               <!-- Product Title End -->
                <!-- Hot Deal Product Activation Start -->
                <div class="hot-deal-active owl-carousel">
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="#">
                                <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/7.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="#">Poly and Bark Vortex Side</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="#">
                                <img class="primary-img" src="img/products/24.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/25.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="#">Light Inverted Pendant Quick</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="/cart" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="#">
                                <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="/product">Terra Xpress HE Cooking </a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="/cart" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="/product">
                                <img class="primary-img" src="img/products/30.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/31.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="/product">Calandiva Wrapped 12cm</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="/cart" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="/product">
                                <img class="primary-img" src="img/products/8.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/9.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="/product">Gpoly and Bark Eames Styl...</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="/cart" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="/product">
                                <img class="primary-img" src="img/products/10.jpg" alt="single-product">
                                <img class="secondary-img" src="img/products/11.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">37<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="/cart" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
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
                            <h2>New Arrivals</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#fshion">Fashion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Baby/Kids</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Electronics </a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/2.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/3.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/4.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Gpoly and Bark Eames Style</a></h4>
                                                <p><span class="price">$150.30</span><del class="prev-price">$175.50</del></p>
                                                <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/5.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/6.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/8.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/9.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Eames and Bark  Style</a></h4>
                                                <p><span class="price">$180.45</span><del class="prev-price">$200.50</del></p>
                                                <div class="label-product l_sale">18<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/11.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/12.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Eames and Vortex Side</a></h4>
                                                <p><span class="price">$160.45</span><del class="prev-price">$190.50</del></p>
                                                <div class="label-product l_sale">12<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/15.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/16.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Bark Vortex Side Eames</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/13.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/14.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/7.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids" class="tab-pane fade show active">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/42.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/43.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Utensils and Knives Block</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/40.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/41.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Terra Xpress HE Cooking </a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$300.50</del></p>
                                                <div class="label-product l_sale">25<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/39.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/38.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Robert Welch Knife Block</a></h4>
                                                <p><span class="price">$100.45</span><del class="prev-price">$150.50</del></p>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/36.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/37.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$90.50</span><del class="prev-price">$120.50</del></p>
                                                <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/35.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/36.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Bark and  Vortex Side</a></h4>
                                                <p><span class="price">$69.20</span><del class="prev-price">$145.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/34.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/35.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Compary and Bark Vortex Shewe</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/32.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/33.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">kallery kids  weare</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/7.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/41.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/39.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/5.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/6.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/9.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/10.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/11.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/12.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/3.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/4.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/43.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/42.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/7.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="electronics-pro-active owl-carousel">
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/17.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/18.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Flos Chasen S2 Suspension</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/19.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/20.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Country Squire Florist</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/20.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/21.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Concord Fabric Single</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/21.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/22.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/23.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/24.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Gpoly and Bark Eames Style</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/24.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/25.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Vortex and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                                <!-- Double Product Start -->
                                <div class="double-product">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/26.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/27.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Bark and Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="/product">
                                                <img class="primary-img" src="img/products/28.jpg" alt="single-product">
                                                <img class="secondary-img" src="img/products/29.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="/product">Electronic and Bark Vortex</a></h4>
                                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="/cart" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
            
                                                    <a href="/wishlist" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                        <span class="sticker-new">new</span>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- Double Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #electronics End Here -->
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