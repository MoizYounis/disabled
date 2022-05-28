@extends('layouts.app')
@section('title')
    All Products
@endsection
@section('section')
    <section class="parallax-container"
        data-parallax-img="{{ asset('assets/images/thisisengineering-raeng-o6jUolZ7QJk-unsplash.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">All Products</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">All Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Base typography -->
    <section class="section section-lg bg-default">
        <h4 class="text-center mb-3">All Products</h4>
        <div class="container">
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('storage/' . $product->image) }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link">Request For Product</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3 class="text-center">Products Not Found</h3>
                @endforelse

            </div>
        </div>
        @if ($products->hasPages())
            <div class="pagination-wrapper text-center mt-4">
                {{ $products->links() }}
            </div>
        @endif
    </section>
    <style>
        .w-5 {
            display: none;
        }

    </style>
@endsection
