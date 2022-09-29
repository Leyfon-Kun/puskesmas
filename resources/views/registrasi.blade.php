@extends('layout.navbar')

@section('content')

<br>
<br>
<br>
@if (Session::has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text">{{ Session::get('pesan') }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<div class="header">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center">
        <div class="col-lg-6 col-7">
          <h2 class="h2 text-black d-inline-block mb-0">Registrasi Pasien</h2>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="/loket/pasien" class="btn btn-sm btn-neutral">Tambah Pasien</a>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="table-responsive">
    <table class="table align-items-center table-flush" >
      <thead class="thead-light">
        <tr>
          <th scope="col" class="sort">No</th>
          <th scope="col" class="sort">Nama</th>
          <th scope="col" class="sort">Nik</th>
          <th scope="col" class="sort">tanggal Lahir</th>
          <th scope="col" class="sort">Tempat Lahir</th>
          <th scope="col" class="sort">Umur</th>
          <th scope="col" class="sort">Alamat</th>
          <th scope="col" class="sort">Telpon</th>
          <th scope="col" class="sort">Jenis Kelamin</th>
          <th scope="col" class="sort">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pasien as $view)
            <tr>
                <td>{{ $view->no_pasien }}</td>
                <td>{{ $view->nama_pasien }}</td>
                <td>{{ $view->nik }}</td>
                <td>{{ $view->tgl_lahir }}</td>
                <td>{{ $view->tmpt_lahir }}</td>
                <td>{{ $view->umur }}</td>
                <td>{{ $view->alamat }}</td>
                <td>{{ $view->telpon }}</td>
                <td>{{ $view->jk }}</td>
                <td>
                <div class="dropdown show">
                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button class="btn btn-icon btn-primary" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-bullet-list-67"></i></span>
                        </button>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        {{-- Info --}}
                        <a class="dropdown-item" href="#">
                            <button type="button" class="btn btn-info">
                                <i class="ni ni-badge"></i>
                                <span>Detail</span>
                            </button>
                        </a>
                        {{-- Edit --}}
                        <a class="dropdown-item" href="#">
                            <button type="button" class="btn btn-warning">
                                <i class="ni ni-ruler-pencil"></i>
                                <span>Edit</span>
                            </button>
                        </a>
                        {{-- Deleted --}}
                        <a class="dropdown-item" href="#">
                            <button type="button" class="btn btn-danger">
                                <i class="ni ni-fat-remove"></i>
                                <span>Deleted</span>
                            </button>
                        </a>
                        {{-- Select --}}
                        <a class="dropdown-item" href="#">
                            <button type="button" class="btn btn-success">
                                <i class="ni ni-active-40"></i>
                                <span>Select</span>
                            </button>
                        </a>
                    </div>
                </div>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection
