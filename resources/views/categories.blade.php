@extends('layouts.layout')
    @section('content')
        <div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="{{route('index')}}">Головна</a></li>
                        <li class="active"><a href="{{route('categories')}}">Усі категорії</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-shop-page pt-100 pb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="sidebar">
                        </div>
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="main-categorie mb-all-40">
                            <div class="tab-content fix">
                                 <h1><b> Усі категорії товарів </b></h1>
                                <div id="grid-view" class="tab-pane fade show active">
                                    <div class="row">                                      
                                        @foreach($categories->where('parent_id',0) as $cat)
                                        <div class="col-lg-4 col-md-4">
                                            <div class="single-product">
                                                    <h2>{{$cat->name}}</h2>
                                                    @foreach($cat->child()->get() as $cat2)
                                                        <h3>{{$cat2->name}}</h3>
                                                        @foreach($cat2->child()->get() as $cat3)
                                                            <p><a href="{{route('shop', ['slug' => $cat3->slug])}}">{{$cat3->name}}</a></p>
                                                        @endforeach
                                                    @endforeach
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection