
@extends('admin.app')
@section('title','Admin Dashboard')


@section('content')

    <div class="row match-height">

        <!-- Subscribers Chart Card starts -->
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-primary p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="activity" class="font-medium-5 text-success"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bolder mt-1">{{ $present}}</h2>
                    <p class="card-text text-success">Present - {{ $date }}</p>
                </div>
                <div id="gained-chart"></div>
            </div>
        </div>
        <!-- Subscribers Chart Card ends -->

        <!-- Orders Chart Card starts -->
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-success p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="alert-triangle" class="font-medium-5 text-danger"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bolder mt-1">{{ $absent}}</h2>
                    <p class="card-text text-danger">Absent - {{ $date }}</p>
                </div>
                <div id="order-chart"></div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-warning p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="alert-circle" class="font-medium-5 text-warning"></i>
                        </div>
                    </div>

                    <h2 class="font-weight-bolder mt-1">{{ $leave}}</h2>
                    <p class="card-text text-warning">Leave - {{ $date }}</p>
                </div>
                <div id="order-chart"></div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-danger p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="alert-octagon" class="font-medium-5 text-info"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bolder mt-1">{{ $offday}}</h2>
                    <p class="card-text text-info">Off Day - {{ $date }}</p>
                </div>
                <div id="order-chart"></div>
            </div>
        </div>
        <!-- Orders Chart Card ends -->
    </div>

    <div class="row match-height">

        <!-- total user -->
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-primary p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="users" class="font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="font-weight-bolder mt-1">{{ auth()->user()->count()}}</h2>
                    <p class="card-text">Total User</p>
                </div>
                <div id="gained-chart"></div>
            </div>
        </div>
        <!-- total user ends -->

        <!-- total admin -->
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-danger p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="command" class="font-medium-5"></i>
                        </div>
                    </div>
                    @php

                        $admin = auth()->user()->where('role','1')->count();
                    @endphp
                    <h2 class="font-weight-bolder mt-1">{{ $admin }}</h2>
                    <p class="card-text">Total Admin</p>
                </div>
                <div id="order-chart"></div>
            </div>
        </div>
        <!-- total admin ends -->

        <!-- total manager -->
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-danger p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="compass" class="font-medium-5"></i>
                        </div>
                    </div>
                    @php

                        $manager = auth()->user()->where('role','2')->count();
                    @endphp
                    <h2 class="font-weight-bolder mt-1">{{ $manager }}</h2>
                    <p class="card-text">Total Manager</p>
                </div>
                <div id="order-chart"></div>
            </div>
        </div>
        <!-- end manager -->

        <!-- total hr-manager -->
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-warning p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="package" class="font-medium-5"></i>
                        </div>
                    </div>

                    @php

                        $hrmanager = auth()->user()->where('role','3')->count();
                    @endphp
                    <h2 class="font-weight-bolder mt-1">{{ $hrmanager }}</h2>
                    <p class="card-text">Total HR manager</p>
                </div>
                <div id="order-chart"></div>
            </div>
        </div>
        <!-- end hr-manager -->

        <!-- total employee -->
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                    <div class="avatar bg-light-success p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather="star" class="font-medium-5"></i>
                        </div>
                    </div>
                    @php
                        $employee = auth()->user()->where('role','0')->count();

                    @endphp
                    <h2 class="font-weight-bolder mt-1">{{ $employee }}</h2>
                    <p class="card-text">Total Employee</p>
                </div>
                <div id="order-chart"></div>
            </div>
        </div>
        <!-- end employee -->

    </div>


@endsection

