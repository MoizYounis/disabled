@extends('admin.layout.app')
@section('title')
    Role Details
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>Role Details</h1>
        {{--  <div class="section-header-breadcrumb">
            <a href="{{ route('roles.index') }}"
                 class="btn btn-primary form-btn float-right">Back</a>
        </div>  --}}
      </div>
   @include('flash::message')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('roles.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
