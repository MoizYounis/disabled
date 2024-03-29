@extends('admin.layout.app')
@section('content')
    @can('stats-view')
        <section id="dashboard-ecommerce">
            <div class="row match-height">
                <!-- Medal Card -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="card card-congratulation-medal">
                        <div class="card-body">
                            <h5>Welcome🎉 {{ $user->name }}!</h5>
                            <p class="card-text font-small-3">Here is the statistics of your Portal! </p>
                            {{-- <h3 class="mb-75 mt-2 pt-50">
                                <a href="#">$48.9k</a>
                            </h3>
                            <button type="button" class="btn btn-primary">View Profile</button>
                            <img src="../../../app-assets/images/illustration/badge.svg" class="congratulation-medal"
                                alt="Medal Pic" /> --}}
                        </div>
                    </div>
                </div>
                <!--/ Medal Card -->

                <!-- Statistics Card -->
                <div class="col-xl-8 col-md-6 col-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">Statistics of Users</h4>
                            <div class="d-flex align-items-center">
                                {{-- <p class="card-text font-small-2 me-25 mb-0">Updated 1 week ago</p> --}}
                            </div>
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-primary me-2">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0">{{ $total_users }}</h4>
                                            <p class="card-text font-small-3 mb-0">Total</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-info me-2">
                                            <div class="avatar-content">
                                                <i data-feather="user" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0">{{ $approved_users }}</h4>
                                            <p class="card-text font-small-3 mb-0">Approved</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-danger me-2">
                                            <div class="avatar-content">
                                                <i data-feather="box" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0">{{ $pending_users }}</h4>
                                            <p class="card-text font-small-3 mb-0">Pending</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Statistics Card -->
            </div>


            <div class="row match-height">
                <!-- Statistics Card -->
                <div class="col-xl-12 col-md-6 col-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">Statistics of Organizations and Stores</h4>
                            <div class="d-flex align-items-center">
                                {{-- <p class="card-text font-small-2 me-25 mb-0">Updated 1 week ago</p> --}}
                            </div>
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-primary me-2">
                                            <div class="avatar-content">
                                                <i data-feather="plus" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0">{{ $ngos }}</h4>
                                            <p class="card-text font-small-3 mb-0">NGO</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-info me-2">
                                            <div class="avatar-content">
                                                <i data-feather="user" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0">{{ $schools }}</h4>
                                            <p class="card-text font-small-3 mb-0">Schools</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-danger me-2">
                                            <div class="avatar-content">
                                                <i data-feather="box" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0">{{ $hospitals }}</h4>
                                            <p class="card-text font-small-3 mb-0">Hospitals</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-success me-2">
                                            <div class="avatar-content">
                                                <i class="fa-solid fa-store"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <?php $stores = \App\Models\Store::count(); ?>
                                            <h4 class="fw-bolder mb-0">{{ $stores_unq }}</h4>
                                            <p class="card-text font-small-3 mb-0">Stores</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Statistics Card -->
            </div>
            @if (auth()->user()->role == \App\Helpers\Constant::ADMIN)
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">Sr#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $key => $notification)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <th scope="row">{{ $notification->name }}</th>
                                <th scope="row">{{ $notification->email }}</th>
                                <th scope="row">{{ $notification->phone }}</th>
                                <th scope="row">{{ $notification->message }}</th>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            @endif
        </section>
    @endcan
@endsection
