@extends('login_layout.master')
@section('title')
    Login
@endsection
@section('section')
    {{-- <section class="parallax-container" data-parallax-img="images/bg-breadcrumbs-about.jpg"> --}}
    <section class="parallax-container"
        data-parallax-img="https://cdn.pixabay.com/photo/2016/08/12/08/01/door-1587863_960_720.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Login</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a class="button button-primary button-sm" href="{{ route('register') }}">Register Now</a>
                            </li>
                            {{-- <li class="active">Home</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register-->
    <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-7">
                    <h3>Login</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger p-0">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @include('layouts.flash-message')
                    @include('login.fields')
                </div>
            </div>
        </div>
    </section>
@endsection
