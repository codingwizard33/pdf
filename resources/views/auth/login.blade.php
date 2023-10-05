<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>6670 - PDF edit detection software</title>

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

            <div class="container-fluid">
                <div class="row d-flex justify-content-center align-items-center h_100">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2>Login</h2>
                                <h3 class="mb-3">to get started</h3>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input id="login" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" onkeyup="success()" placeholder="Login" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" id="pas" onkeyup="success()" required/>
                                    </div>

                                    <a href="{{ route('password.request') }}">Forgot Password?</a>

                                    <input type="submit" value="Continue" class="btn btn-success w-100 mt-3 mb-3" id="continue" disabled>

                                    {{-- <div class="text-center">
                                        <span>New User? <a href="">Register</a></span>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('dist/js/app.js') }}"></script>
    </body>
</html>
