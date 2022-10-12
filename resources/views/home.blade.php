@extends('layouts.app', [
    'namePage' => 'Dashboard',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . '/img/bg14.jpg',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Selamat Datang Di Aplikasi E-Arsip-LSP Polinema PSDKU Kediri</h5>
                    <p>Aplikasi Yang Di Tujukan Untuk Melengkapi Sertifikasi Pemrogaman Software Koputer</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
