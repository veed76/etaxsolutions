@extends('admin_common.header')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">{{ __('Detail User') }}</h4>
        <ol class="breadcrumb">
            <li><a href="{{ route('root') }}">Dashboard</a></li>
            <li>Overview</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-sm-push-3">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>{{ __('Overview') }}</b></h4>
            <hr/>
            <div class="row">
                <div class="profile-detail card-box">
                                    <div>
                                        <img src="{{ image_url($users->profile_image) }}" class="img-square" alt="profile-image">

                                        <ul class="list-inline status-list m-t-20">
                                            <li>
                                                <h3 class="text-primary m-b-5">0</h3>
                                                <p class="text-muted">Total Tasks</p>
                                            </li>

                                            <li>
                                                <h3 class="text-success m-b-5">0</h3>
                                                <p class="text-muted">Completed Tasks</p>
                                            </li>

                                            <li>
                                                <h3 class="text-danger m-b-5">0</h3>
                                                <p class="text-muted">Pending Tasks</p>
                                            </li>
                                        </ul>

                                        <a href="{{ route('editUsers') .'/'. $users->id }}"> <button type="button" class="btn btn-pink btn-custom btn-rounded waves-effect waves-light">Update</button> </a>

                                        <hr>
                                        <h4 class="text-uppercase font-600">About Me</h4>
                                        <p class="text-muted font-13 m-b-30">
                                            Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                        </p>

                                        <div class="text-left">
                                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{ $users->name }}</span></p>

                                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{ $users->phone_no }}</span></p>

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{ $users->email }}</span></p>
                                        </div>


                                        <div class="button-list m-t-20">
                                            <button type="button" class="btn btn-facebook waves-effect waves-light">
                                               <i class="fa fa-facebook"></i>
                                            </button>

                                            <button type="button" class="btn btn-twitter waves-effect waves-light">
                                               <i class="fa fa-twitter"></i>
                                            </button>

                                            <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                               <i class="fa fa-linkedin"></i>
                                            </button>

                                            <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                               <i class="fa fa-dribbble"></i>
                                            </button>

                                        </div>
                                    </div>

                                </div>
            </div>
        </div>
    </div>
</div>
@endsection
