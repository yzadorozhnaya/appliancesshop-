@extends('layouts.layout')
@section('content')
    <div class="breadcrumb-area mt-30">
        <div class="container">
            <div class="breadcrumb">
                <ul class="d-flex align-items-center">
                    <li><a href="{{route('index')}}">Головна</a></li>
                    <li class="active"><a href="/terms">Terms and conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="terms-conditions ptb-45">
        <div class="container">
            <div class="terms-content sidbar-style">
                <h2 class="tems-tile">Terms and conditions of use</h2>
                <div class="single-term mb-20">
                    <h3 class="term-mini-title">Rule 1</h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="single-term mb-20">
                    <h3 class="term-mini-title">Rule 2</h3>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamю</p>
                </div>
                <div class="single-term mb-20">
                    <h3 class="term-mini-title">Rule 3</h3>
                    <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamю</p>
                </div>
            </div>
        </div>
     </div>
   @endsection