<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - Reset Password</title>

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
                    <div class="card-header h5 text-white text-center bg-info">Reset Password</div>
                    <div class="card-body px-5">
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf

                            <input type="hidden" name="token" value="{{ request()->token }}">
                            <input type="hidden" name="email" value="{{ request()->email }}">
                            <div class="form-outline">
                                <label class="form-label" for="new_password">New Password</label>
                                <input type="password" name="password" id="new_password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} mb-3" required />

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-outline">
                                <label class="form-label" for="confirm_password">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="confirm_password" class="form-control mb-3" required />

                            </div>
                            <button type="submit" class="btn btn-success w-100">Reset password</button>
                        </form>
                        <div class="d-flex justify-content-between mt-4">
                            <a class="btn btn-outline-info" href="{{ route('login') }}">Login</a>
                            {{-- <a class="btn btn-outline-info" href="#">Register</a> --}}
                        </div>
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
