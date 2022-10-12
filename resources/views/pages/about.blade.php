@extends('layouts.app', [
    'namePage' => 'About',
    'class' => 'sidebar-mini',
    'activePage' => 'about',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">About Me</h5>
                    </div>
                    <div class="col-md-6 mr-auto ml-auto">
                        <div class="card card-user ">
                            <div class="image">
                                <img src="{{ asset('assets') }}/img/bgpol.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray" src="{{ asset('assets') }}/img/yayak.png"
                                            alt="..."></a>
                                    {{-- <h5 class="title">Nama :{{ auth()->user()->name }}</h5> --}}
                                    <strong>
                                        <p>Nama:&ensp;{{ auth()->user()->name }}</p>
                                    </strong>
                                    <strong>
                                        <p>Nim:&ensp;1931730100</p>
                                    </strong>
                                    <strong>
                                        <p>Tanggal:&ensp;09-Oktober-2022</p>
                                    </strong>
                                    </strong>
                                </div>
                            </div>
                            <hr>
                            <div class="button-container">
                                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                    <i class="fab fa-facebook-square"></i>
                                </button>
                                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                    <i class="fab fa-twitter"></i>
                                </button>
                                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                    <i class="fab fa-google-plus-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
