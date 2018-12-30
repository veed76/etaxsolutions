<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', "E-Tax Solutions India | Let's Tax Make Easy") }}</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.5.94/css/materialdesignicons.min.css">
        <link href="{{ asset('scss/bootstrap.css') }}" type="text/css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


        <script src="{{ asset('js/respossive_tab.js') }}"></script>
        <script src="{{ asset('js/slick.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </head>
    <body>
            <!-- sticky-top -->
        <div class="container-fluid shadow bg-white main-header py-2">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-md-between w-100 px-0 py-2">
                        <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 order-2 order-lg-1 text-center">
                            <a class="navbar-brand mr-0" href="{{ url('/') }}"><img src="{{ url('/') }}/images/logo.png" alt="" class="mw-100" /></a>
                        </div>
                        <div class="col-3 col-sm-3 col-md-4 order-1 d-lg-none">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="col-12 col-lg-7 col-xl-7 order-4 order-lg-2">
                            <div class="collapse navbar-collapse" id="navbar">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link px-3 ls-p5" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3 ls-p5" href="#">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3 ls-p5" href="#">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3 ls-p5" href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-sm-5 col-md-4 col-lg-3 col-xl-3 order-3 order-lg-3">
                            <div class="custom_login_btn">
                                <ul class="list-unstyled mb-0 d-flex align-items-center justify-content-end">
                                    @if (Route::has('login'))
                                        <li>
                                            @auth
                                                <a href="{{ url('/home') }}">Home</a>
                                            @else
                                                 <a class="d-none d-sm-block text-secondary ls-p5" href="{{ route('login') }}">Login</a> 
                                            @endauth
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        @yield('content')
@extends('front_page.common.footer')