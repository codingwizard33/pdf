@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
                        <a href="{{ route('create-user') }}" class="btn btn-outline-success mt-3">
                            <i class="nav-icon fas fa-users"></i>
                            Add User
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="chart">
                            <div class="chart_header">
                                <h3>Users</h3>
                                <p>total users</p>
                            </div>
                            <div class="chart_body">
                                <span>13</span>
                                <canvas id="usersChart" style="width:100%;max-width:700px"></canvas>
                                <div class="border-top border-bottom chart_body_box">
                                    <p>new users last 90 days</p>
                                    <span>3</span>
                                    <p>users run wf last 90 days</p>
                                    <span>8</span>
                                </div>
                            </div>
                            <div class="chart_footer">
                                <a href="#">
                                    <img src="{{ asset('dist/img/arrow-up-light.png') }}" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <section class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3>Add User</h3>
                                <form action="{{ route('user-create') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input type="text" name="first_name" id="firstName" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="First Name"
                                               required>
                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" name="last_name" id="lastName" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="Last Name"
                                               required>
                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                           </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="username ">User Name</label>
                                        <input type="text" name="user_name" id="username " class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" placeholder="User Name" required>
                                        @if ($errors->has('user_name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('user_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="organization">Organization</label>
                                        <input type="text" name="organization" id="organization" class="form-control{{ $errors->has('organization') ? ' is-invalid' : '' }}" placeholder="Organization"
                                               required>
                                        @if ($errors->has('organization'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('organization') }}</strong>
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

                                    <button type="submit" class="btn btn-success float-right">Add New User</button>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="w-100 h-50">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="card-title">Users</h3>
                                            </div>
                                        </div>
                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Username
                                                    </th>
                                                    <th>
                                                        Date Added
                                                    </th>
                                                    <th>
                                                        Date Removed
                                                    </th>
                                                    <th>
                                                        Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td>
                                                                <span>{{ $user->name }}</span>
                                                            </td>
                                                            <td>
                                                                <span>{{ $user->user_name }}</span>
                                                            </td>
                                                            <td>
                                                                <span>{{ $user->created_at }}</span>
                                                            </td>
                                                            <td>
                                                                <span></span>
                                                            </td>
                                                            <td class="project-actions">
                                                                <a class="btn btn-info btn-sm" href="#">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                                <a class="btn btn-danger btn-sm" href="#">
                                                                    <i class="fas fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                {{-- <tr>
                                                    <td>
                                                        <span>
                                                          Claudio Barrera
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          edd_n_flow
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          12 Nov, 2022
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          13 Dec, 2022
                                                        </span>
                                                    </td>
                                                    <td class="project-actions">
                                                        <a class="btn btn-info btn-sm" href="#">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm" href="#">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                          Claudio Barrera
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          edd_n_flow
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          12 Nov, 2022
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          13 Dec, 2022
                                                        </span>
                                                    </td>
                                                    <td class="project-actions">
                                                        <a class="btn btn-info btn-sm" href="#">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm" href="#">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                          Claudio Barrera
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          edd_n_flow
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          12 Nov, 2022
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          13 Dec, 2022
                                                        </span>
                                                    </td>
                                                    <td class="project-actions">
                                                        <a class="btn btn-info btn-sm" href="#">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm" href="#">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>
                                                          Claudio Barrera
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          edd_n_flow
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          12 Nov, 2022
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          13 Dec, 2022
                                                        </span>
                                                    </td>
                                                    <td class="project-actions">
                                                        <a class="btn btn-info btn-sm" href="#">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <a class="btn btn-danger btn-sm" href="#">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
