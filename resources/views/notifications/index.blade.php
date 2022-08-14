@extends('admin.layout.app')
@section('title')
Notifications
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Notifications</h1>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('notifications.table')
            </div>
       </div>
   </div>

    </section>
@endsection

