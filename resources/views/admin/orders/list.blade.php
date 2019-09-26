@extends('layouts.app')
@section('content')
<div class="row align-items-center">
    <div class="container">
        <div class="row ">
            @include('admin.admin')
            <div  class="col-xl-9 col-lg-8 col-md-12 d-none d-sm-block alert-block ">
                <div class="alert alert-success alert-block breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li class='active'>Заказы</li>
                        <li><a href="{{route('admin.orders.create')}}">создать</a></li>
                    </ul>
                </div>
                @if ($message = Session::get ('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert"> x</button>
                    <strong>{{$message}}</strong>
                </div>
                @endif
                <table class="table table-striped table-bordered table-hover" width="100%">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>user_id</td>
                            <td>phone</td>
                            <td>created at</td>
                            <td>updated at</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->user_id}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->updated_at}}</td>
                            <td><a href="{{route('admin.orders.edit',['id'=>$order->id])}}">редактировать</td>
                            <td><a href="{{route('admin.orders.delete',['id'=>$order->id])}}">удалить</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$orders->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
