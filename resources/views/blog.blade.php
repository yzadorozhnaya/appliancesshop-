@extends('layouts.layout')
    @section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="{{route('index')}}">Головна</a></li>
                        <li class="active"><a href="{{route('about')}}">Про нас</a></a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Blog Page Start Here -->
        <div class="blog ptb-100  ptb-sm-60">
            <div class="container">
                <div class="main-blog">
                    <div class="row">
                        <!-- Single Blog Start -->
                        <div class="col-lg-6 col-sm-12">
                          @foreach($article as $article_item)
                           <div class="single-latest-blog">
                               <div class="blog-img">
                                   <a href="{{route('single', ['slug' => $article_item->slug])}}"><img src="{{asset("img/blog/1.jpg")}}" alt="blog-image"></a>
                               </div>
                               <div class="blog-desc">
                                   <h4><a href="{{route('single', ['slug' => $article_item->slug])}}">{{$article_item->title}}</a></h4>
                                    <ul class="meta-box d-flex">
                                        <li><a href="#">By Truemart</a></li>
                                    </ul>
                                    <p>{{$article_item->description}}...</p>
                                    <a  class="readmore" href="{{route('single', ['slug' => $article_item->slug])}}">Read More</a>
                               </div>
                               <div class="blog-date">
                                    <span>{{$article_item->created_at}}</span>
                                    June
                                </div>
                           </div>
                           @endforeach
                        </div>
                        <!-- Single Blog End -->
                    </div>

                  {{$article->links()}}
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Blog Page End Here -->
    @endsection