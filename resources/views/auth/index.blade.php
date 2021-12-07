@extends('login_layout.master')
@section('title')
Register
@endsection
@section('section')
    {{-- <section class="parallax-container" data-parallax-img="images/bg-breadcrumbs-about.jpg"> --}}
    <section class="parallax-container" data-parallax-img="https://cdn.pixabay.com/photo/2018/04/24/22/33/key-3348307_960_720.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Register</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a class="button button-primary button-sm" href="{{route('login')}}">Login Now</a></li>
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
                    <h3>Register Yourself</h3>
                        @include('auth.fields')
                </div>
            </div>
        </div>
    </section>
@endsection