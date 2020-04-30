<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/bd6d7b078c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,900;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body style="overflow: hidden;">
    <nav style="background-color: #f7f7f7;" class="navbar navbar-dark flex-md-nowrap border-bottom">
        <div class="col-3">
            <a style="color: rgb(50,124,193);" class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">{{config('app.name')}}</a>
        </div>
        <div class="col btn-group mr-6">
            <button style="width: 10%" class="btn btn-sm btn-outline-primary">
                <svg class="bi bi-chevron-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 010 .708L5.707 8l5.647 5.646a.5.5 0 01-.708.708l-6-6a.5.5 0 010-.708l6-6a.5.5 0 01.708 0z" clip-rule="evenodd" />
                </svg>
            </button>
            <button style="width: 10%" class="btn btn-sm btn-outline-primary">
                <svg class="bi bi-chevron-right" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L10.293 8 4.646 2.354a.5.5 0 010-.708z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
        <div class="col-5">
            <form class="searchform" action="">
                <div class="input-group">
                    <input class="form-control py-2" type="search" value="search" id="search-input">
                    <span class="input-group-append">
                        <button style="border-color: #CED4DA; background-color: #FFFFFF" class="btn btn-outline-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div align="right" class="float-right col-3 nav">
            <a style="color: black;" class="nav-link text-right" href="#">
                <i class="far fa-bell"></i>
            </a>
            <a style="color: black;" class="nav-link text-right" href="#">
                <i class="fas fa-cogs"></i>
            </a>
        </div>
    </nav>
    <div class="container-fluid ">
        <div class="row">
            <nav style="background-color: #f7f7f7;" class="col-md-2 d-none d-md-block bg-light sidebar border-right">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-1 text-muted">
                            <span>YOUR LIBRARY</span>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="far fa-clock"></i> Recently Played
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-music"></i> Songs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-compact-disc"></i> Albums
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user"></i> Artist
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-heart"></i> Liked
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-inbox"></i> Local Files
                            </a>
                        </li>
                    </ul>
                    @yield('customsidebar')
                </div>
            </nav>
            <main style="background-color: #fefefe; padding-right: 0px!important;" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>

</body>

</html>