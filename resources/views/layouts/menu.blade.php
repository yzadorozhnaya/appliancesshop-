
        <div class="main-page-banner pb-50 off-white-bg">
            <div class="container"> 
                <div class="row">  
                    <div class="col-xl-3 col-lg-4 d-none d-lg-block">                         
                        <div class="vertical-menu mb-all-30">
                            <nav>                               
                                <ul class="vertical-menu-list">
                                @foreach($categories->where('parent_id',0) as $cat)
                                    <li class=""><a href="#"><span><img src="img/vertical-menu/1.png" alt=""></span>{{$cat->name}} <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <ul class="ht-dropdown mega-child">
                                             @foreach($cat->child()->get() as $cat2)
                                              <li><a href="#">{{$cat2->name}}<i class="fa fa-angle-right"></i></a>
                                                <ul class="ht-dropdown mega-child">
                                                    @foreach($cat2->child()->get() as $cat3)
                                                    <li><a href="{{route('shop', ['slug' => $cat3->slug])}}">{{$cat3->name}}</a></li>                     
                                                    @endforeach
                                                </ul>
                                              </li>
                                             @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                                </ul>                                
                            </nav>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

 <!-- Mobile Vertical Menu Start Here -->
<div class="container d-block d-lg-none">
                <div class="vertical-menu mt-30">
                    <span class="categorie-title mobile-categorei-menu">Купуйте за категоріями</span>
                    <nav>
                        <div id="cate-mobile-toggle" class="category-menu sidebar-menu sidbar-style mobile-categorei-menu-list menu-hidden ">@foreach($categories->where('parent_id',0) as $cat)
                            <ul>
                                <li class="has-sub"><a href="#">{{$cat->name}}</a>
                                    <ul class="category-sub">
                                        @foreach($cat->child()->get() as $cat2)
                                            <li class="has-sub"><a href="#">{{$cat2->name}}</a>
                                                <ul class="category-sub">
                                                    @foreach($cat2->child()->get() as $cat3)
                                                       <li><a href="{{route('shop', ['slug' => $cat3->slug])}}">{{$cat3->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </nav>
                </div>
            </div>