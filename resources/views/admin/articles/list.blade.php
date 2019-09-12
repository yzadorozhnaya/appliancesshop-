@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($message = Session::get ('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"> x</button>
            <strong>{{$message}}</strong>
        </div>
        @endif
        <a href="{{route('admin.articles.create')}}">создать</a>
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
@endsection
