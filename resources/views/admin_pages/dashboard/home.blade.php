@extends('admin_pages.common.header')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Dashboard</h4>
        <p class="text-muted page-title-alt">Welcome to admin panel !</p>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box fadeInDown animated">
            <div class="bg-icon bg-icon-info pull-left">
                <i class="md md-attach-money text-info"></i>
            </div>
            <div class="text-right">
                <h3 class="text-dark"><b class="counter">0</b></h3>
                <p class="text-muted">Total PM</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
            <div class="bg-icon bg-icon-pink pull-left">
                <i class="md md-add-shopping-cart text-pink"></i>
            </div>
            <div class="text-right">
                <h3 class="text-dark"><b class="counter">0</b></h3>
                <p class="text-muted">Total Employees</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
            <div class="bg-icon bg-icon-purple pull-left">
                <i class="md md-equalizer text-purple"></i>
            </div>
            <div class="text-right">
                <h3 class="text-dark"><b class="counter">0</b></h3>
                <p class="text-muted">Total Tasks</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
