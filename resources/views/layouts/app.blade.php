<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>PDF edit detection software</title>

        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}">

    </head>
    <body class="sidebar-mini layout-fixed layout-navbar-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <span class="text-danger">6670 - PDF edit detection software</span>
            </div>

            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">

                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="./dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">User Name</a>
                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link {{ Route::currentRouteNamed('home') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-columns"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="{{ route('create-user') }}" class="nav-link {{ Route::currentRouteNamed('create-user') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>Add-User</p>
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="{{ route('get-users') }}" class="nav-link {{ Route::currentRouteNamed('get-users') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('make-job') }}" class="nav-link {{ Route::currentRouteNamed('make-job') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>Jobs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('get-reports') }}" class="nav-link {{ Route::currentRouteNamed('get-reports') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-signal"></i>
                                    <p>Reports</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>Settings</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a type="button" class="nav-link" onclick="document.getElementById('logout').submit()">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>Logout</p>
                                </a>
                                <form action="{{  route('logout') }}" id="logout" method="post">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            @yield('content')

            <footer class="main-footer">
                <strong>Copyright &copy; 2023 <a class="text-danger" href="#">6670 - PDF edit detection software</a></strong>
                All rights reserved.
            </footer>
            <aside class="control-sidebar control-sidebar-dark">
            </aside>
        </div>

        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('dist/js/app.js') }}"></script>
        <script>
            chart("jobsChart", [1, 2, 3, 4, 5, 6, 7], [10, 47, 24, 2, 5, 16, 9], "Jobs");
            chart("usersChart", [1, 2, 3, 4, 5, 6, 7], [5, 5, 5, 5, 5, 5, 5], "Users");
            chart("reportsChart", [1, 2, 3, 4, 5, 6, 7], [7, 7, 7, 7, 7, 7, 7], "Reports");
        </script>
    </body>
</html>
