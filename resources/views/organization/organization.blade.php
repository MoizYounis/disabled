@extends('layouts.app')
@section('title')
{{ $name->role ?? 'Organization' }}
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
                            <h1 class="main-bunner-title">{{ $name->role ?? 'Organization' }}</h1>
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
                        @if(Auth::user())
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        @endif
                        <th scope="col">City</th>
                        <th scope="col">Provice</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($organizations as $key => $organization)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <th scope="row">{{ $organization->name ?? 'N/A' }}</th>
                            @if(Auth::user())
                            <th scope="row">{{ $organization->email ?? 'N/A' }}</th>
                            <th scope="row">{{ $organization->phone ?? 'N/A' }}</th>
                            @endif
                            <th scope="row">{{ $organization->city ?? 'N/A' }}</th>
                            <th scope="row">{{ $organization->provice->name ?? 'N/A' }}</th>
                            <th scope="row">{{ $organization->address ?? 'N/A' }}</th>
                            <td>
                                <a href="{{ route('organization-services', $organization->id) }}" class="action-btn">
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
