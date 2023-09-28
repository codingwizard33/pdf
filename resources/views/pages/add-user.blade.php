@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add User
                            @if (session('message'))
                                <h2 class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </h2>
                            @endif
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Create User</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user-create') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" id="firstName" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="First Name"
                                           required>
                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" id="lastName" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="Last Name"
                                           required>
                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label for="tel">User Name</label>
                                    <input type="text" id="user_name" name="user_name" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" placeholder="Phone" required>
                                    @if ($errors->has('user_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('user_name') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label for="organization">Organization</label>
                                    <input type="text" id="organization" name="organization" class="form-control{{ $errors->has('organization') ? ' is-invalid' : '' }}" placeholder="Organization"
                                           required>
                                    @if ($errors->has('organization'))
                                       <span class="invalid-feedback">
                                           <strong>{{ $errors->first('organization') }}</strong>
                                       </span>
                                   @endif

                                </div>

                                <div class="form-group">
                                    <label for="organization">Password</label>
                                    <input type="password" id="organization" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Organization"
                                           required>
                                    @if ($errors->has('password'))
                                       <span class="invalid-feedback">
                                           <strong>{{ $errors->first('password') }}</strong>
                                       </span>
                                   @endif

                                </div>

                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select id="role" name="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }} custom-select" required>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('role'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('role') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                <input type="submit" value="Send" class="btn btn-success float-right">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
