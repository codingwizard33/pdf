@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Jobs</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Jobs</a></li>
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
                                <h3>Jobs</h3>
                                <p>total executions</p>
                            </div>
                            <div class="chart_body">
                                <span>1756</span>
                                <canvas id="jobsChart" style="width:100%;max-width:700px"></canvas>
                                <div class="border-top border-bottom chart_body_box">
                                    <p>avg jobs per day</p>
                                    <span>16</span>
                                    <p>avg execution (sec)</p>
                                    <span>18</span>
                                </div>
                            </div>
                            <div class="chart_footer">
                                <a href="#">
                                    <img src="./dist/img/arrow-up-light.png" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <section class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Exit</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Insert Upload file to Gallery</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                    <section class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="w-100 h-50">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="card-title">Jobs</h3>
                                            </div>
                                        </div>
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
                                                        Name of File
                                                    </th>
                                                    <th>
                                                        Integrity Chech
                                                    </th>
                                                    <th>
                                                        PDF Creation
                                                        Date
                                                    </th>
                                                    <th>
                                                        PDF Modified
                                                        Date
                                                    </th>
                                                    <th>
                                                        Process
                                                        Report
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
                                                    <td>
                                                        <span class="text-success">
                                                             Completed
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
                                                        <button class="btn btn-warning">Process</button>
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
                                                    <td>
                                                        <span class="text-success">
                                                             Completed
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
                                                        <button class="btn btn-success">Processed</button>
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
                                                    <td>
                                                        <span class="text-success">
                                                             Completed
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
                                                        <button class="btn btn-warning">Process</button>
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
                                                    <td>
                                                        <span class="text-success">
                                                             Completed
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
                                                        <button class="btn btn-success">Processed</button>
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
