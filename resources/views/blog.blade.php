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
    <div class="blog ptb-100  ptb-sm-60">
      <div class="container">
        <div class="main-blog">
          <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
              <aside>
                @foreach($categories->where('parent_id',0) as $cat)
                  <div class="electronics mb-40">
                    <h3 class="sidebar-title">{{$cat->name}}</h3>
                    <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                      <ul>
                        @foreach($cat->child()->get() as $cat2)
                          <li class="has-sub"><a href="#">{{$cat2->name}}</a>
                              <ul class="category-sub">
                                @foreach($cat2->child()->get() as $cat3)
                                  <li><a href="{{route('blogsingle', ['id' => $cat3->id])}}">{{$cat3->name}}</a></li>
                                @endforeach
                              </ul>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                @endforeach
              </aside>
            </div> 
            <div class="col-lg-9 order-1 order-lg-2">
              <div class="row">
                @foreach($article as $article_item)
                  <div class="col-lg-6 col-sm-12">
                    <div class="single-latest-blog">
                      <div class="blog-img">
                         <a href="{{route('single', ['slug' => $article_item->slug])}}"><img src="{{asset("img/blog/1.jpg")}}" alt="blog-image"></a>
                      </div>
                      <div class="blog-desc">
                        <h4><a href="{{route('single', ['slug' => $article_item->slug])}}">{{$article_item->title}}</a></h4>
                        <ul class="meta-box d-flex">
                          <li><a href="{{route('index')}}">Електрон</a></li>
                        </ul>
                        <p>{{$article_item->description}}</p>
                        <a  class="readmore" href="{{route('single', ['slug' => $article_item->slug])}}">Read More</a>
                      </div>
                      <div class="blog-date">
                        <span>{{$article_item->created_at->format('d')}}</span>
                        {{$article_item->created_at->format('F')}}
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            {{$article->links()}}
          </div>
        </div>
      </div>
    </div>
  @endsection