@extends('admin.layout.app')
@section('title')
    Product Detail
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Product Detail</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('store.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('flash::message')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('store.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
