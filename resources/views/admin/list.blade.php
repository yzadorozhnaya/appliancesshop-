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
        <a href="{{route('admin.create')}}">создать</a>
        <table class="table table-striped table-bordered table-hover" width="100%">
            <thead>
                <tr>
                    <td>id</td>
                    <td>имя</td>
                    <td>email</td>
                    <td>действие</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('admin.edit',['id'=>$user->id])}}">редактировать</td>
                     <td><a href="{{route('admin.delete',['id'=>$user->id])}}">удалить</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    {{$users->links()}}
    </div>
</div>
@endsection
