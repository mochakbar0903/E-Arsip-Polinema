@extends('layouts.app', [
    'namePage' => 'viewpdf',
    'class' => 'sidebar-mini',
    'activePage' => 'viewpdf',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Arsip</a></li>
                              <li class="breadcrumb-item"><a href="#">Lihat</a></li>
                            </ol>
                          </nav>
                      <table>
                        <tr>
                            <td>Nomer</td>
                            <td>:</td>
                            <td>
                                {{ $show->no_surat }}
                            </td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>
                                {{ $show->kategori }}
                            </td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td>:</td>
                            <td>
                                {{ $show->judul }}
                            </td>
                        </tr>
                        <tr>
                            <td>Waktu Unggah</td>
                            <td>:</td>
                            <td>
                                {{ $show->judul }}
                            </td>
                        </tr>
                        <td class="td-actions">
                            <a href="{{Route('download', ['filename' => $show->file]) }}" type="button" data-toggle="tooltip" data-placement="top" title="Unduh"
                                class="btn btn-warning btn-sm btn-icon">
                                <i class="fas fa-file-download"></i>
                            </a>
                            <a href="/edit/{{ $show->id }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit/Ganti File"
                                class="btn btn-info btn-sm btn-icon">
                                <i class="fas fa-edit"></i>
                        </a>
                        </td>
                      </table>
                    </div>
                </div>
                <iframe src="{{asset('/storage/'.$show->file)}}"height="600px" width="100%"></iframe>
            </div>
        </div>
    </div>
    @endsection
