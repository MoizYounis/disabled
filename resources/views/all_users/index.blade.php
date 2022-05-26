@extends('admin.layout.app')
@section('title')
    All Users
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>All Users</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('all_users.create')}}" class="btn btn-primary form-btn">Create Users <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('all_users.table')
            </div>
       </div>
   </div>

    </section>
@endsection

