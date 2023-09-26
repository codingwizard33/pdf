@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Gallery Overfiew</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-12">
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
                                <a href="./pages/job.html">
                                    <img src="./dist/img/arrow-up-light.png" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-12">
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
                                <a href="./pages/users.html">
                                    <img src="./dist/img/arrow-up-light.png" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-12">
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
                                <a href="./pages/reports.html">
                                    <img src="./dist/img/arrow-up-light.png" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
