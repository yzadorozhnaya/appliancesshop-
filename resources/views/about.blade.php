@extends('layouts.layout')
    @section('content')
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="{{route('index')}}">Головна</a></li>
                        <li class="active"><a href="{{route('about')}}">Про нас</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="about-us pt-100 pt-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sidebar-img mb-all-30">
                            <img src="img/blog/10.jpg" alt="single-blog-img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-desc">
                            <h3 class="mb-10 about-title">про магазин Електрон</h3>
                            <p class="mb-20">Електрон - це великий інтернет-магазин побутової, комп'ютерної техніки та електроніки.</p>
                            <p class="mb-20">Тут ви легко і просто можете купити ваші товари не відходячи від комп'ютера! Це прекрасне рішення для тих, хто вважає за краще витрачати час на щось більш важливе і корисне ніж тривалі поїздки по місту в пошуках потрібної техніки.</p>
                            <p>Ми пропонуємо тільки сертифіковані товари з можливістю гарантійного обслуговування в авторизованих сервісних центрах..</p>
                            <!--<a href="#" class="return-customer-btn read-more">read more</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection