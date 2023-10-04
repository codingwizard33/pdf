@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            @if ($file->edited == 'edited')
                                <h1 style="color: red">File is edited</h1>
                            @else
                                <h1 style="color: green">Success!</h1>
                            @endif
                            {{-- <li class="breadcrumb-item active">Add User</li> --}}
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
                            <li class="breadcrumb-item"><a href="#">Pdf</a></li>
                            <li class="breadcrumb-item active">Checked</li>
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
                                <h3 class="card-title"></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <embed src="{{ asset($file->path) }}" id="embed">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        let screen = document.querySelector('.card-body');
        console.log(screen.offsetWidth);
        let embed = document.getElementById('embed');
        embed.width = screen.offsetWidth - 50;
        embed.height = window.innerHeight - 220;
    </script>
@endsection
