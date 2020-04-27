@extends('layouts.app')
@section('content')
    <div class="row align-items-center">
        <div class="container">
            <div class="row ">
                @include('admin.admin')
                <div  class="col-xl-9 col-lg-8 col-md-12 d-none d-sm-block alert-block ">
                    <div class="alert alert-success alert-block breadcrumb">
                        <ul class="d-flex align-items-center">
                            <li class='active'>Продукты</li>
                            <li><a href="{{route('admin.products.create')}}">создать</a></li>
                        </ul>
                    </div>
                    @if ($message = Session::get ('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert"> x</button>
                            <strong>{{$message}}</strong>
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>id</td>
                                <td></td>
                                <td></td>
                                <td>name</td>
                                <td>articul</td>
                                <td>brand</td>
                                <td>image</td>
                                <td>description</td>
                                <td>price</td>
                                <td>sale</td>
                                <td>category_id</td>
                                <td>created at</td>
                                <td>updated at</td>
                                <td>is publish</td>
                            </tr>
                        </thead>
                        @foreach($products as $product)
                        <tbody>                    
                            <tr>
                                <td class="tqw">{{$product->id}}</td>
                                <td><a href="{{route('admin.products.edit',['id'=>$product->id])}}"><i class="fa fa-chevron-down" aria-hidden="true"></i></td>
                                <td><a href="{{route('admin.products.delete',['id'=>$product->id])}}"><i class="fa fa-times"></i></td>
                                <td class="tqw">{{$product->name}}</td>
                                <td class="tqw">{{$product->articul}}</td>
                                <td class="tqw">{{$product->brand}}</td>
                                <td><img src="{{$product->image_path}}" width="100px"></td></td>
                                <td class="product-description" width="20%"><div class="col-md-6">{{$product->description}}</div></td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->sale}}</td>
                                <td>{{$product->category_id}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>{{$product->updated_at}}</td>
                                <td>{{$product->is_publish}}</td>

                            </tr>                        
                        </tbody>
                        @endforeach
                    </table>
                    
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
