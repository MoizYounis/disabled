@extends('admin.layout.app')
@section('title')
    Roles
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Roles</h1>
            {{--  <div class="section-header-breadcrumb">
                @can('create-role')
                <a href="{{ route('roles.create')}}" class="btn btn-primary form-btn">Role <i class="fas fa-plus"></i></a>
                @endcan
            </div>  --}}
        </div>
    <div class="section-body">
        @include('flash::message')
       <div class="card">
            <div class="card-body">
                @include('roles.table')
            </div>
       </div>
   </div>

    </section>
@endsection

