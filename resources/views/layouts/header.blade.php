<!-- Main Header Area Start Here -->
        <header>
            <!-- Header Top Start Here -->
            <div class="header-top-area">
                <div class="container">
                    <!-- Header Top Start -->
                    <div class="header-top">
                        <ul>
                            <li><a href="#">Безкоштовна доставка на замовлення понад 3000 грн</a></li>
                        </ul>
                        <ul>                                          
                            <li><span>Мова</span> <a href="#">Українська<i class="lnr lnr-chevron-down"></i></a>
                                <!-- Dropdown Start -->
                                <ul class="ht-dropdown">
                                    <li><a href="#"><img src="{{asset("img/header/1.jpg")}}" alt="language-selector">Українська</a></li>
                                    <li><a href="#"><img src="{{asset("img/header/2.jpg")}}" alt="language-selector">Російська</a></li>
                                </ul>
                                <!-- Dropdown End -->
                            </li>
                        </ul>
                            @if (auth()->check())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Вихід') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('admin.users.edit',['id'=>\Auth::user()->id])}}">Pедагувати</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                                @else
                                <ul>                                          
                            <li><span>Мій кабінет</span> <a href="#"><i class="lnr lnr-chevron-down"></i></a>
                                <!-- Dropdown Start -->
                                <ul class="ht-dropdown">
                                    <li><a href="{{route('register')}}">Реєстрація</a></li>
                                    <li><a href="{{route('login')}}">Вхід</a></li>
                                </ul>
                                <!-- Dropdown End -->
                            </li>
                        </ul>
                            @endif
                    </div>
                    <!-- Header Top End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End Here -->
            <!-- Header Middle Start Here -->
            <div class="header-middle ptb-15">
                <div class="container">
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-3 col-md-12">
                            <div class="logo mb-all-30">
                                <a href="{{route('index')}}"><img src="{{asset("/img/logo/logo.png")}}" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Cart Box Start Here -->
                        <div class="col-lg-4 col-md-12">
                            <div class="cart-box mt-all-30">
                                <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                                    <li><a href="{{route('cart')}}"><i class="lnr lnr-cart"></i><span class="my-cart"><span class="total-pro">{{$cart->count}}</span><span>cart</span></span></a>
                                        <ul class="ht-dropdown cart-box-width">
                                            <li>
                                            @if(count($cart->products)<1)
                                                <h1>Кошик порожній</h1>
                                                 <div class="wc-proceed-to-checkout">
                                                    <a href="{{route('categories')}}">продолжить покупки</a>
                                                </div>
                                            @else
                                                <!-- Cart Box Start -->

                                                @foreach($products as $product)
                                                <div class="single-cart-box">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="{{$products->get($product['id'])->image_path}}" alt="cart-image"></a>
                                                        <span class="pro-quantity">{{$product['count']}}X</span>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6><a href="#">{{$products->get($product['id'])->name}}</a></h6>
                                                        <span class="cart-price">{{$product['price']}}</span>
                                                        <!--<span>Size: S</span>
                                                        <span>Color: Yellow</span>-->
                                                    </div>
                                                    <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                                </div>
                                                @endforeach
                                                <!-- Cart Box End -->
                                                <!-- Cart Footer Inner Start -->
                                                <div class="cart-footer">
                                                   <ul class="price-content">
                                                       <li>СУММА <span>{{$cart->sum}}</span></li>
                                                       <li>Доставка <span></span></li>
                                                       <li>Разом+%Знижка<span>{{$cart->sum}}</span></li>
                                                   </ul>
                                                    <div class="cart-actions text-center">
                                                        <a class="cart-checkout" href="{{route('checkout')}}">Checkout</a>
                                                    </div>
                                                </div>
                                                <!-- Cart Footer Inner End -->
                                            @endif
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="lnr lnr-heart"></i><span class="my-cart"><span>Wish</span><span>list (0)</span></span></a>
                                    </li>
                                    <li><a href="#"><i class="lnr lnr-user"></i><span class="my-cart"><span> <strong>Sign in</strong> Or</span><span> Join My Site</span></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Middle End Here -->
            <!-- Header Bottom Start Here -->
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                         <div class="col-xl-3 col-lg-4 col-md-6 vertical-menu d-none d-lg-block">
                            <span class="categorie-title">Купуйте за категоріями</span>
                        </div>                       
                        <div class="col-xl-9 col-lg-8 col-md-12 ">
                            <nav class="d-none d-lg-block">
                               
                                <ul class="header-bottom-list d-flex">
                                    <li class="active"><a href="{{route('index')}}">Головна</a></li>
                                    <li><a href="{{route('categories')}}">Магазин<i class="fa fa-angle-down"></i></a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown dropdown-style-two">
                                            <li><a href="{{route('categories')}}">Усі категорії</a></li>
                                            <li><a href="#">Деталі продукту</a></li>
                                            <li><a href="{{route('cart')}}">кошик</a></li>
                                            <li><a href="{{route('checkout')}}">Оформити замовлення</a></li>
                                            <li><a href="{{route('wishlist')}}">Список бажань</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="{{route('blog')}}">блог<i class="fa fa-angle-down"></i></a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown dropdown-style-two">
                                            <li><a href="#">подробиці блогу</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="#">Мой кабинет<i class="fa fa-angle-down"></i></a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown dropdown-style-two">
                                            <li><a href="{{route('register')}}">register</a></li>
                                            <li><a href="{{route('login')}}">sign in</a></li>
                                            <li><a href="{{route('forgot')}}">forgot password</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="{{route('about')}}">Про нас</a></li>
                                    <li><a href="{{route('contact')}}">контакти</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu d-block d-lg-none">
                                <nav>
                                    <ul>
                                        <li><a href="{{route('index')}}">Головна</a></li>
                                        <li><a href="#">Магазин</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="#">Деталі продукту</a></li>
                                                <li><a href="{{route('cart')}}">кошик</a></li>
                                                <li><a href="{{route('checkout')}}">Оформити замовлення</a></li>
                                                <li><a href="{{route('wishlist')}}">Список бажань</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                        <li><a href="{{route('blog')}}">блог</a>
                                            <!-- Mobile Menu Dropdown Start -->
                                            <ul>
                                                <li><a href="#">подробиці блогу</a></li>
                                            </ul>
                                            <!-- Mobile Menu Dropdown End -->
                                        </li>
                                       <li><a href="#">Мой кабинет</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown dropdown-style-two">
                                            <li><a href="{{route('register')}}">register</a></li>
                                            <li><a href="{{route('login')}}">sign in</a></li>
                                            <li><a href="{{route('forgot')}}">forgot password</a></li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                        <li><a href="{{route('about')}}">Про нас</a></li>
                                        <li><a href="{{route('contact')}}">контакти</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End Here -->
            <!-- Mobile Vertical Menu Start Here -->

        </header>