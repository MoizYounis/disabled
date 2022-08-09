@extends('layouts.app')
@section('title')
    Stores
@endsection
@section('section')
    <section class="parallax-container"
        data-parallax-img="{{ asset('assets/images/thisisengineering-raeng-o6jUolZ7QJk-unsplash.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Stores</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Stores</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Base typography -->
    <section class="section section-lg bg-default">
        <h4 class="text-center mb-3">Stores</h4>
        <div class="container">
            <div class="row">
                @foreach ($stores_arr as $store_arr)
                    @forelse ($store_arr as $store)
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $store->name }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Total Products</h6>
                                    <h3 class="card-text">{{ $store->products_count }}</h3>
                                    <a href="{{ route('allProducts', $store->id) }}" class="card-link">View All
                                        Products</a>
                                </div>
                            </div>
                        </div>
                    @empty
                       
                    @endforelse
                @endforeach
            </div>
        </div>
    </section>
    <style>
        .w-5 {
            display: none;
        }

    </style>
@endsection
