<header>
    @if(session('success'))
        <h1>{{session('success')}}</h1>
    @endif
    <div class="header-top-area">
        <div class="container">
            <div class="header-top">
                <ul>
                    <li><a href="#">Безкоштовна доставка на замовлення понад 3000 грн</a></li>
                </ul>
                <ul>                                          
                    <li><span>Мова</span> <a href="#">Українська<i class="lnr lnr-chevron-down"></i></a>
                        <ul class="ht-dropdown">
                            <li><a href="#"><img src="{{asset("img/header/1.jpg")}}" alt="language-selector">Українська</a></li>
                            <li><a href="#"><img src="{{asset("img/header/2.jpg")}}" alt="language-selector">Російська</a></li>
                        </ul>
                    </li>
                </ul>
                @if(auth()->check())
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                            <ul class="ht-dropdown">
                                <li><a href="{{route('register')}}">Реєстрація</a></li>
                                <li><a href="{{route('login')}}">Вхід</a></li>
                            </ul>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
    <div class="header-middle ptb-15">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div class="col-lg-3 col-md-12">
                    <div class="logo mb-all-30">
                        <a href="{{route('index')}}"><img src="{{asset("/img/logo/logo.png")}}" alt="logo-image"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
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
                                            @foreach($cart->products as $product)
                                                <div class="single-cart-box">
                                                    <div class="cart-img">                                                       
                                                        <a href="#"><img src="{{$products->get($product['id'])->image_path}}" alt="cart-image"></a>
                                                        <span class="pro-quantity">{{$product['count']}}X</span>
                                                    </div>
                                                    <div class="cart-content">                                                     
                                                        <h6><a href="#"></a>"{{$products->get($product['id'])->name}}" </h6>
                                                        <span class="cart-price">
                                                            <del class="prev-price">
                                                                @if($product['sale']>0)
                                                                    {{$product['count']*$product['price']}}
                                                                @endif
                                                            </del>                                                            
                                                                @if($product['sale']>0)
                                                                    {{$product['count']*$product['price']*(1-$product['sale']/100)}}
                                                                @else
                                                                    {{$product['count']*$product['price']}}
                                                                @endif                                                          
                                                        </span>   
                                                    </div>                                                    
                                                    <form method="POST" action="{{route('cart.remove')}}">
                                                    @csrf
                                                        <td class="product-remove">
                                                            <input name="id" type="hidden"  value="{{$product['id']}}">
                                                            <button type="submit"><a class="del-icone" href="#"><i class="ion-close"></i></a></button>
                                                        </td>
                                                    </form>                                                    
                                                </div>
                                            @endforeach
                                            <div class="cart-footer">
                                                <ul class="price-content">
                                                   <li>СУММА <span>{{$cart->sum}}</span></li>
                                                   <li>Доставка <span></span></li>
                                                   <li>Разом+%Знижка<span>{{$cart->sumsale}}</span></li>
                                                </ul>
                                                <div class="cart-actions text-center">
                                                    <a class="cart-checkout" href="{{route('checkout')}}">Checkout</a>
                                                </div>
                                            </div>
                                        @endif
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('wishlist')}}"><i class="lnr lnr-heart"></i><span class="my-cart"><span>Список</span><span>бажань <span class="total-pro">{{$wishlist->count}}</span></span></span></a>
                            </li>
                            @if(auth()->check())
                                <li><a href="" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="lnr lnr-user"></i><span class="my-cart"><span><strong>{{ Auth::user()->name }}</strong> </span></span></a>
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
                                <li><a href="{{route('login')}}"><i class="lnr lnr-user"></i><span class="my-cart"><span> <strong>Увійдіть в</strong> </span><span> особистий кабінет</span></span></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <ul class="ht-dropdown dropdown-style-two">
                                    <li><a href="{{route('categories')}}">Усі категорії</a></li>
                                    <li><a href="{{route('cart')}}">кошик</a></li>
                                    <li><a href="{{route('checkout')}}">Оформити замовлення</a></li>
                                    <li><a href="{{route('wishlist')}}">Список бажань</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('blog')}}">блог</a></li>
                            <li><a href="#">Мой кабинет<i class="fa fa-angle-down"></i></a>
                                <ul class="ht-dropdown dropdown-style-two">
                                    <li><a href="{{route('register')}}">register</a></li>
                                    <li><a href="{{route('login')}}">sign in</a></li>
                                    <li><a href="{{ route('password.request') }}">forgot password</a></li>
                                </ul>
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
                                    <ul>
                                        <li><a href="#">Деталі продукту</a></li>
                                        <li><a href="{{route('cart')}}">кошик</a></li>
                                        <li><a href="{{route('checkout')}}">Оформити замовлення</a></li>
                                        <li><a href="{{route('wishlist')}}">Список бажань</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('blog')}}">блог</a>
                                    <ul>
                                        <li><a href="#">подробиці блогу</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Мой кабинет</a>
                                    <ul class="ht-dropdown dropdown-style-two">
                                        <li><a href="{{route('register')}}">register</a></li>
                                        <li><a href="{{route('login')}}">sign in</a></li>
                                        <li><a href="{{route('forgot')}}">forgot password</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('about')}}">Про нас</a></li>
                                <li><a href="{{route('contact')}}">контакти</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>