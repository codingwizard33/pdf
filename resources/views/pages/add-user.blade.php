@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add User</h1>
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
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" id="firstName" class="form-control" placeholder="First Name"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" id="lastName" class="form-control" placeholder="Last Name"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <label for="tel">Phone</label>
                                    <input type="tel" id="tel" class="form-control" placeholder="Phone" required>
                                </div>

                                <div class="form-group">
                                    <label for="organization">Organization</label>
                                    <input type="text" id="organization" class="form-control" placeholder="Organization"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select id="role" class="form-control custom-select" required>
                                        <option>Select Role</option>
                                        <option value="role_1">Role 1</option>
                                        <option value="role_2">Role 2</option>
                                        <option value="role_3">Role 3</option>
                                    </select>
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
