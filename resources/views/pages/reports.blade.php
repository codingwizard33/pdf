@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Reports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Reports</a></li>
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
                                <h3>Reports</h3>
                                <p>total users</p>
                            </div>
                            <div class="chart_body">
                                <span>13</span>
                                <canvas id="reportsChart" style="width:100%;max-width:700px"></canvas>
                                <div class="border-top border-bottom chart_body_box">
                                    <p>total reports processed in the last 90
                                        days</p>
                                    <span>3</span>
                                    <p>users run wf last 90 days</p>
                                    <span>8</span>
                                </div>
                            </div>
                            <div class="chart_footer">
                                <a href="#">
                                    <img src="./../dist/img/arrow-up-light.png" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <section class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="w-100 h-50">
                                    <div class="card">
                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-striped projects">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Username
                                                    </th>
                                                    <th>
                                                        Date of Job
                                                    </th>
                                                    <th>
                                                        Review
                                                        Output File
                                                    </th>
                                                    <th>
                                                        Follow up
                                                        with client?
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <span>
                                                          Claudio Barrera
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          08 Jan, 2023
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          XYZ Bank
                                                            Statement_OUTPUT
                                                        </span>
                                                    </td>
                                                    <td class="project-actions">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="yes" value="yes">
                                                            <label class="form-check-label" for="yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="no" value="no">
                                                            <label class="form-check-label" for="no">No</label>
                                                        </div>
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
                                                          08 Jan, 2023
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          XYZ Bank
                                                            Statement_OUTPUT
                                                        </span>
                                                    </td>
                                                    <td class="project-actions">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="yes" value="yes">
                                                            <label class="form-check-label" for="yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="no" value="no">
                                                            <label class="form-check-label" for="no">No</label>
                                                        </div>
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
                                                          08 Jan, 2023
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          XYZ Bank
                                                            Statement_OUTPUT
                                                        </span>
                                                    </td>
                                                    <td class="project-actions">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="yes" value="yes">
                                                            <label class="form-check-label" for="yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="no" value="no">
                                                            <label class="form-check-label" for="no">No</label>
                                                        </div>
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
                                                          08 Jan, 2023
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span>
                                                          XYZ Bank
                                                            Statement_OUTPUT
                                                        </span>
                                                    </td>
                                                    <td class="project-actions">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="yes" value="yes">
                                                            <label class="form-check-label" for="yes">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="no" value="no">
                                                            <label class="form-check-label" for="no">No</label>
                                                        </div>
                                                    </td>
                                                </tr>
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
