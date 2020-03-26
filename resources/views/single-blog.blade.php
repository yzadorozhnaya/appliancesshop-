@extends('layouts.layout')
    @section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="{{route('index')}}">Головна</a></li>
                        <li><a href="{{route('blog')}}">блог</a></li>
                        <li class="active"><a href="#">{{$article->title}}</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Single Blog Page Start Here -->
        <div class="single-blog ptb-100  ptb-sm-60">
            <div class="container">
                <div class="row">
                    <!-- Single Blog Sidebar Start --> 

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
                                            <!-- category submenu end-->
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                                <!-- category-menu-end -->
                             </div>
                            @endforeach
                            <div class="single-sidebar latest-pro mb-30">
                                <h3 class="sidebar-title">последние записи</h3>
                                <ul class="sidbar-style">
                                    @foreach($articles as $article_item)
                                    <li><h4><a href="{{route('single', ['slug' => $article_item->slug])}}">{{$article_item->title}}</a></h4></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-img mb-30">
                                <a href="{{route('categories')}}"><img src="{{asset("img/banner/banner-sidebar.jpg")}}" alt="slider-banner"></a>
                            </div>
                            <div class="single-sidebar mb-30">
                                 <h3 class="sidebar-title">others</h3>
                                 <ul class="sidbar-style">
                                     <li><a href="{{route('login')}}">Log in</a></li>
                                     <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                     <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                     <li><a href="#">Others link</a></li>
                                 </ul>
                            </div>
                            <div class="tags">
                                 <h3 class="sidebar-title">Tags</h3>
                                 <div class="sidbar-style">
                                    <ul class="tag-list">
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">design</a></li>
                                        <li><a href="#">Latest</a></li>
                                        <li><a href="#">Male</a></li>
                                        <li><a href="#">Female</a></li>
                                    </ul>
                                 </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Single Blog Sidebar End -->
                    <!-- Single Blog Sidebar Description Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="single-sidebar-desc mb-all-40">
                            <div class="sidebar-img">
                                <img src="{{asset("img/blog/10.jpg")}}" alt="single-blog-img">
                            </div>
                            <div class="sidebar-post-content">
                                <h3 class="sidebar-lg-title">{{$article->title}}</h3>
                                <ul class="post-meta d-sm-inline-flex">
                                    <li><span>Posted</span> by Demo Posthemes</li>
                                    <li><span>{{$article->created_at}}</span></li>
                                </ul>
                            </div>
                            <div class="sidebar-desc mb-50">
                                <p>{{$article->description}}</p>
                                 @foreach($comments as $comment)
                                <blockquote class="mtb-30"> <p>{{$comment->body}}</span></blockquote>
                                    @if($comment['user_id']!=0)
                                <p>{{$users->get($comment['user_id'])->name}}</p>
                                     @else
                                <p>{{$comment->name}}</p>
                                    @endif
                                <p>{{$comment->created_at->format('d.m.y')}}</p>
                                @endforeach
                            </div>
                            <!-- Contact Email Area Start -->
                            <div class="blog-detail-contact">
                                <h3 class="mb-15 leave-reply">Leave a Reply</h3>
                                <div class="submit-review">
                                    <form method="POST" action="{{route('blog.buy', ['id' => $article->id])}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="usr">Your Name:</label>
                                            <input  type="text" class="form-control  @error('name') is-invalid @enderror" name="name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="usr">your email:</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="sub">Subject:</label>
                                            <input type="text" class="form-control" name="sub">
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Comment:</label>
                                            <textarea class="form-control" rows="5" name="comment"></textarea>
                                        </div>
                                         
                                        <div class="sbumit-reveiew">
                                            
                                            
                                            <button type="submit" class="btn btn-primary checkout-btn">відправити</button>
                                            
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                            <!-- Contact Email Area End -->
                        </div>
                    </div>
                    <!-- Single Blog Sidebar Description End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        @endsection