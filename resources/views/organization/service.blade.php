@extends('layouts.app')
@section('title')
Services
@endsection
@section('section')
    <!-- Swiper-->
    <style>
        ul {
            list-style-type: disc;
            font-size: 18px;
        }

        p {
            font-size: 20px;
        }
    </style>
    <section class="section section-lg section-main-bunner section-main-bunner-filter">
        <div class="main-bunner-img"
            style="background-image: url(&quot;{{ asset('assets/images/hospital.jpg') }}&quot;); background-size: cover;">
        </div>
        <div class="main-bunner-inner">
            <div class="container">
                <div class="row row-50 justify-content-lg-center align-items-lg-center">
                    <div class="col-lg-12">
                        <div class="bunner-content-modern text-center">
                            <h1 class="main-bunner-title">Services</h1>
                            {{-- <p>A hero is an ordinary individual who finds the strength to persevere and endure in spite of overwhelming obstacles.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xl">
        <div class="container">
        <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">Sr#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $key => $service)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <th scope="row">{{ $service->name ?? 'N/A' }}</th>
                            <th scope="row">{{ $service->description ?? 'N/A' }}</th>
                            <td>
                                <a href="{{ route('service.show', $service->id) }}" class="action-btn">
                                    {{--  <i class="fas fa-eye"></i>  --}}
                                    Services
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection
