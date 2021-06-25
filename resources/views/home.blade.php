@extends('layouts.app')
@section('title-block', 'SoundBro')
@section('content')
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7 px-0 d-none d-md-block">
                <img class="img-fluid" src="/images/home-3.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-5">
                @include('includes.signup')
            </div>
        </div>
    </div>
@endsection
