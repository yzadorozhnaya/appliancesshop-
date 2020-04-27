@extends('layouts.app')
@section('content')
    <div class="row align-items-center">
        <div class="container">
            <div class="row ">
                @include('admin.admin')
                    <div  class="col-xl-9 col-lg-8 col-md-12 d-none d-sm-block alert-block ">
                        <div class="alert alert-success alert-block breadcrumb">
                            <ul class="d-flex align-items-center">
                                <li class='active'>Категории</li>
                                <li><a href="{{route('admin.categories.create')}}">создать</a></li>
                            </ul>
                        </div>
                        @if($message = Session::get ('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert"> x</button>
                                <strong>{{$message}}</strong>
                            </div>
                        @endif
                        <table class="table table-striped table-bordered table-hover" width="100%">
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>name</td>
                                    <td>description</td>
                                    <td>publish</td>
                                    <td>created at</td>
                                    <td>updated at</td>
                                    <td>slug</td>
                                    <td>parent_id</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>{{$category->publish}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td>{{$category->updated_at}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>{{$category->parent_id}}</td>
                                    <td><a href="{{route('admin.categories.edit',['id'=>$category->id])}}">редактировать</td>
                                    <td><a href="{{route('admin.categories.delete',['id'=>$category->id])}}">удалить</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
            </div>
        </div>
    </div>
@endsection
