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
        <a href="{{route('admin.orders.create')}}">создать</a>
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
@endsection
