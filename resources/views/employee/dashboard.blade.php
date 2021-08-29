
@extends('employee.app')
@section('title','Employee Dashboard')


@section('content')

    <h1 class="text-center"> Employee dashboard</h1>
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

@endsection
