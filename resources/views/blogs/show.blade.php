@extends('layouts.new_app')
@section('title')
    Zone Details 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Zone Details</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('zones.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>
      </div>
   @include('flash::message')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('zones.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
