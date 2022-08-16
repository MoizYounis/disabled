@extends('admin.layout.app')
@section('title')
Product Request
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Requests</h1>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('products_request.table')
            </div>
       </div>
   </div>

    </section>
@endsection

