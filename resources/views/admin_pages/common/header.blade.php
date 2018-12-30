<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ asset('theme/px/plugins/morris/morris.css') }}">
        <link href="{{ asset('theme/px/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('theme/px/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('theme/px/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('theme/px/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('theme/px/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('theme/px/css/responsive.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('theme/px/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- custom css -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />

        <!-- jQuery  -->
        <script src="{{ asset('theme/px/js/jquery.min.js') }}"></script> 

        <link href="{{ asset('theme/px/plugins/sweetalert/dist/sweetalert.css') }}" rel="stylesheet" type="text/css">

        <script src="{{ asset('theme/px/js/modernizr.min.js') }}"></script>
        
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{ url('/') }}" class="logo">
                            <span>{{ config('app.name', 'Laravel') }}</span>
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <ul class="nav navbar-nav navbar-right pull-right">
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ image_url('dd')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="ti-power-off m-r-5"></i>{{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            @include('admin_pages.common.nav')
            <div class="content-page">
                <div class="content">
                    <div class="container" id="MAINCONTAINER">
                        @yield('content')
                    
            @extends('admin_pages.common.footer')