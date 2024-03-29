<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Logo -->
    <link rel="icon" href="{{ asset('images/logo-site.png') }}"/>
</head>
<body>	
    <!-- Wrapper -->
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <h5 class="my-4">{{ trans('layouts.manager') }}</h5>
                </li>
                <hr>
                <li>
                    <a href="{{ route('admin.index') }}">{{ trans('layouts.admin') }}</a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}">{{ trans('layouts.user') }}</a>
                </li>
                <li>
                    <a href="{{ route('order.manager') }}">{{ trans('layouts.order') }}</a>
                </li>              
                <li>
                    <a href="#product" data-toggle="collapse" aria-expanded="false">{{ trans('layouts.product') }}</a>
                    <ul class="collapse list-unstyled" id="product">
                        <li>
                            <a href="{{ route('product.create') }}">{{ trans('layouts.creat_product') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('product.index') }}">{{ trans('layouts.list_product') }}</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('category.create') }}">{{ trans('layouts.category') }}</a>
                </li>
                <li>
                    <a href="{{ route('color.create') }}">{{ trans('layouts.color') }}</a>
                </li>
                <li>
                    <a href="{{ route('size.create') }}">{{ trans('layouts.size') }}</a>
                </li>
                <hr>
                <li>
                    <a href="{{ route('admin.password.edit', Auth::user()->id) }}">{{ trans('layouts.change_password') }}</a>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ trans('layouts.logout') }}</a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container" id="content">
                <!-- Navbar -->
                <nav id="nav-hide" class="navbar sticky-top navbar-expand-lg navbar-light bg-light rounded mb-4">
                    <div id="toggler">
                        <button id="menu-toggle" class="navbar-toggler" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item disabled">
                            {{ trans('layouts.welcome', ['name' => Auth::user()->name]) }}
                        </li>
                    </ul>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ trans('layouts.home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard.index') }}">{{ trans('layouts.dashboard') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if ('ba' == session()->get('website_language', 'en'))
                                    {{ trans('layouts.bosanski') }}
                                    @else
                                    {{ trans('layouts.english') }}
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.language', ['en']) }}">{{ trans('layouts.english') }}</a>
                                    <a class="dropdown-item" href="{{ route('user.language', ['ba']) }}">{{ trans('layouts.bosanski') }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Content -->
                @yield('content')
            </div>
            <!-- Footer -->
            @include('layouts.footer')
        </div>
    </div>
    <!-- Toggle action -->
    <script type="text/javascript">
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>