@extends('layouts.app')
@section('title')
    Blogs
@endsection
@section('section')
    <section class="parallax-container"
        data-parallax-img="{{ asset('assets/images/thisisengineering-raeng-o6jUolZ7QJk-unsplash.jpg') }}">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <h2 class="breadcrumbs-custom-title">Blogs</h2>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Base typography -->
    <section class="section section-lg bg-default">
        <h2 class="text-center">Read Blogs</h2>
        <div class="container">
            <div class="row row-50 flex-lg-row-reverse justify-content-xl-between">
                <div class="col-xl-2">
                    <div class="block-bordered-left">
                        <div class="row row-40">
                            {{-- <div class="col-sm-6 col-xl-12">
                                <h5 class="thin-title">Fonts</h5>
                                <h2 class="heading-font text-accent-3">henric</h2>
                                <h3 class="heading-font">Poppins</h3>
                                <h2 class="heading-font text-accent-2">Tuesday </h2>
                            </div>
                            <div class="col-sm-6 col-xl-12">
                                <h5 class="thin-title">Colors</h5>
                                <ul class="list-color">
                                    <li>
                                        <div class="box-color bg-primary"></div>
                                    </li>
                                    <li>
                                        <div class="box-color bg-pink"></div>
                                    </li>
                                    <li>
                                        <div class="box-color bg-secondary"></div>
                                    </li>
                                    <li>
                                        <div class="box-color bg-green"></div>
                                    </li>
                                    <li>
                                        <div class="box-color bg-secondary-2"></div>
                                    </li>
                                    <li>
                                        <div class="box-color bg-gray-800"></div>
                                    </li>
                                    <li>
                                        <div class="box-color bg-gray-400"></div>
                                    </li>
                                    <li>
                                        <div class="box-color bg-gray-300"></div>
                                    </li>
                                    <li>
                                        <div class="box-color bg-gray-600"></div>
                                    </li>
                                    <li>
                                        <div class="box-color bg-gray-700"></div>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <ul class="list-xxl heading-list">
                        @forelse ($blogs as $blog)
                            <section class="section section-lg bg-default">
                                <div class="container">
                                    <div class="row row-50">
                                        <div class="col-lg-12 col-xl-12">
                                            <h3>{{ $blog->heading }}</h3>
                                            <!-- Quote Primary-->
                                            <article class="quote-primary">
                                                <div class="quote-primary-body">
                                                    <div class="quote-primary-text">
                                                        <p class="q">{{ $blog->blog }}</p>
                                                    </div>
                                                </div>
                                                <div class="quote-primary-footer">
                                                    <div class="bg-dot"></div>
                                                    <p class="quote-primary-cite">{{ $blog->user->name }}</p>
                                                </div>
                                            </article>
                                        @empty
                                            <h3 style="text-align: center">No Blogs Found</h3>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        @if ($blogs->hasPages())
            <div class="pagination-wrapper text-center mt-4">
                {{ $blogs->links() }}
            </div>
        @endif
    </section>
    <style>
        .w-5 {
            display: none;
        }

    </style>
@endsection
