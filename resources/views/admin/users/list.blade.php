@extends('layouts.app')
@section('content')
    <div class="row align-items-center">
        <div class="container">
            <div class="row ">
                @include('admin.admin')
                <div  class="col-xl-9 col-lg-8 col-md-12 d-none d-sm-block alert-block ">
                    <div class="alert alert-success alert-block breadcrumb">
                        <ul class="d-flex align-items-center">
                            <li class='active'>Пользователи</li>
                            <li><a href="{{route('admin.users.create')}}">создать</a></li>
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
                                <td><a href="{{route('admin.users.edit',['id'=>$user->id])}}">редактировать</td>
                                 <td><a href="{{route('admin.users.delete',['id'=>$user->id])}}">удалить</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>    
            </div>
        </div>
    </div>
@endsection
