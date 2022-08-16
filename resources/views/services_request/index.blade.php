@extends('admin.layout.app')
@section('title')
Serivce Requests
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Serivce Requests</h1>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('services_request.table')
            </div>
       </div>
   </div>

    </section>
@endsection

