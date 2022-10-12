@extends('layouts.app', [
    'namePage' => 'Arsip',
    'class' => 'sidebar-mini',
    'activePage' => 'arsip',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Arsip Surat</h5>
                        <p>Berikut ini adalah surat-surat yang telah teribit dan di arsipkan,
                            Klik "Lihat" pada kolom aksi untuk menampilkan surat.
                        </p>
                        <form action="{{ route('page.index', 'arsip') }}" method="GET">
                            <div class="col-sm-2" style="float: right;">
                                <div class="row">
                                    <input type="search" class="form-control" name="search" placeholder="Search">
                                </div>
                            </div>
                        </form>
                        {{-- <label style="width: 50%">
                            <input type="search" class="form-control form-control-sm" placeholder="Search records">
                            <button class="btn btn-default ">Cari</button>
                        </label> --}}
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nomer Surat</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Waktu Pengarsipan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($arsip as $data)

                            <tr>
                                <td class="text-center">{{ $data->id }}</td>
                                <td> {{ $data->no_surat }}</td>
                                <td>{{ $data->kategori }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td class="td-actions">
                                    <a href="{{Route('download', ['filename' => $data->file]) }}" type="button" data-toggle="tooltip" data-placement="top" title="Unduh"
                                        class="btn btn-warning btn-sm btn-icon">
                                        <i class="fas fa-file-download"></i>
                                    </a>
                                    <a href="/lihat/{{ $data->id }}" type="button" data-toggle="tooltip" data-placement="top" title="Lihat"
                                        class="btn btn-info btn-sm btn-icon">
                                        <i class="fas fa-eye"></i>
                                </a>
                                    <a href="#" type="button" class="btn btn-danger btn-sm btn-icon delete " data-toggle="tooltip"  data-id={{ $data->id }}
                                        data-placement="top" title="Hapus" >
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href ="{{ route('add_arsip') }}"type="button" class="btn btn-default btn-round"><span>Arsipkan Surat</span></a>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/swwet/sweetalert2.all.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>


    <script>
        $('.delete').click(function() {
        var arsipid = $(this).attr('data-id');
            Swal.fire({
  title: 'Yakin?',
  text: "Mau Hapus Data Barang id "+arsipid+"",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus Barang!'
}).then((result) => {
  if (result.isConfirmed) {
      window.location = "/destroy/"+arsipid+""
    Swal.fire(
      'Hapus!',
      'Barang Berhasil Di Hapus.',
      'success'
    )
  }else{
      Swal.fire(
          'Barang Tidak Jadi Di Hapus',
          '',
          'error')
  }
});
        });


    </script>
    @endsection
