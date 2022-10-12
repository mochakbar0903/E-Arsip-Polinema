@extends('layouts.app', [
    'namePage' => '',
    'class' => 'sidebar-mini',
    'activePage' => 'edit_arsip',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Gant File Arsip</h4>
                    </div>
                    <div class="card-body ">
                        <form action="/updatee/{{ $show->id }}" method="POST"
                            enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row">
                                <label class="col-sm-2 col-form-label"><strong>Nomer Surat</strong></label>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input name="no_surat" type="text" class="form-control" value="{{ $show->no_surat }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label"><strong>Kategori</strong></label>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select name="kategori" class="form-control" class="custom-select"value="{{ $show->kategori }}">
                                            {{-- <option selected>Pilih Kategori</option> --}}
                                            <option value="Undangan">Undangan</option>
                                            <option value="Pengumuman">Pengumuman</option>
                                            <option value="Nota Dinas">Nota Dinas</option>
                                            <option value="Pemberitahuan">Pemberitahuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label"><strong>Judul</strong></label>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input name="judul" type="text" class="form-control"value="{{ $show->judul }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label"><strong>File Surat (PDF)</strong></label>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input value="{{ $show->file }}" name= "file" class="form-control">
                                        <div class="from-group">
                                            <span class="btn btn-round btn-rose btn-file">
                                                <input  name="file" class="fileinput-new" type="file">Browse File</input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('page.index', 'arsip') }}" class="btn btn-info btn-round"
                                type="button">Kembali</a>
                            <button class="btn btn-success btn-round" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
