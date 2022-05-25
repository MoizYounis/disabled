@extends('admin.layout.app')
@section('title')
    Create Product
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">New Product</h3>
            {{-- <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('zones.index') }}" class="btn btn-primary">Back</a>
            </div> --}}
        </div>
        <div class="content">
            @include('flash::message')
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ">
                                {!! Form::open(['route' => 'store.store', 'files' => true]) !!}
                                <div class="row">
                                    @include('store.fields')
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
