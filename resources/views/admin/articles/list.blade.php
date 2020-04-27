@extends('layouts.app')
@section('content')
    <div class="row align-items-center">
        <div class="container">
            <div class="row ">
                @include('admin.admin')
                <div  class="col-xl-9 col-lg-8 col-md-12 d-none d-sm-block alert-block ">
                    <div class="alert alert-success alert-block breadcrumb">
                        <ul class="d-flex align-items-center">
                            <li class='active'>Статьи</li>
                            <li><a href="{{route('admin.articles.create')}}">создать</a></li>
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
                                <td>title</td>
                                <td>slug</td>
                                <td>description</td>
                                <td>created at</td>
                                <td>updated at</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->id}}</td>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->slug}}</td>
                                    <td>{{$article->description}}</td>
                                    <td>{{$article->created_at}}</td>
                                    <td>{{$article->updated_at}}</td>
                                    <td><a href="{{route('admin.articles.edit',['id'=>$article->id])}}">редактировать</td>
                                    <td><a href="{{route('admin.articles.delete',['id'=>$article->id])}}">удалить</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
