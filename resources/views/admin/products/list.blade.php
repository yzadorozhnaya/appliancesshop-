@extends('layouts.app')
@section('content')
 <div class="row align-items-center">
<div class="container">
    <div class="row ">

 @include('admin.admin')
        <div  class="col-xl-9 col-lg-8 col-md-12 d-none d-sm-block alert-block ">
        @if ($message = Session::get ('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"> x</button>
            <strong>{{$message}}</strong>
        </div>
        @endif
        <a href="{{route('admin.products.create')}}">создать</a>
        <table class="table table-striped table-bordered table-hover" width="100%">
            <thead>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>articul</td>
                    <td>brand</td>
                    <td>image</td>
                    <td>description</td>
                    <td>price</td>
                    <td>category_id</td>
                    <td>created at</td>
                    <td>updated at</td>
                    <td>is publish</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->articul}}</td>
                    <td>{{$product->brand}}</td>
                    <td><img src="{{$product->image_path}}" width="150px"></td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category_id}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>{{$product->updated_at}}</td>
                    <td>{{$product->is_publish}}</td>
                    <td><a href="{{route('admin.products.edit',['id'=>$product->id])}}">редактировать</td>
                     <td><a href="{{route('admin.products.delete',['id'=>$product->id])}}">удалить</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    {{$products->links()}}
    </div>
</div>
</div>
@endsection
