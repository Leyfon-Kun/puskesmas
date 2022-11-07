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

    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Data Pasien</h3>
            <p class="text-sm mb-0">
                Data Yang Ada Adalah Data Yang Sudah Daftar Dan Akan Lanjut Registrasi
            </p>
        </div>
        <div class="table-responsive py-4">
            <div id="datatable-basic_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="datatable-basic_length"><label>Show<select
                                    name="datatable-basic_length" aria-controls="datatable-basic"
                                    class="form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>entries</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="datatable-basic_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control form-control-sm"
                                    placeholder="Cari Pasien" aria-controls="datatable-basic">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-flush dataTable" id="datatable-basic" role="grid"
                            aria-describedby="datatable-basic_info">
                            <thead class="thead-light">
                                <tr role="row">
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
                                                <a href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <button class="btn btn-icon btn-primary" type="button">
                                                        <span class="btn-inner--icon">
                                                            <i class="ni ni-bullet-list-67"></i>
                                                        </span>
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
                                                    <a class="dropdown-item"
                                                        href="/loket/registrasi/edit/{{ $view->no_pasien }}">
                                                        <button type="button" class="btn btn-warning">
                                                            <i class="ni ni-ruler-pencil"></i>
                                                            <span>Edit</span>
                                                        </button>
                                                    </a>
                                                    {{-- Deleted --}}
                                                    <a class="dropdown-item"
                                                        href="/loket/registrasi/{{ $view->no_pasien }}">
                                                        <button type="reset" class="btn btn-danger"
                                                            data-target="#hps{{ $view->no_pasien }}">
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
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="datatable-basic_info" role="status" aria-live="polite">Showing
                            1 to 2 of 2 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="datatable-basic_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="datatable-basic_previous"><a
                                        href="#" aria-controls="datatable-basic" data-dt-idx="0" tabindex="0"
                                        class="page-link"><i class="fas fa-angle-left"></i></a></li>
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="datatable-basic" data-dt-idx="1" tabindex="0"
                                        class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="datatable-basic"
                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="datatable-basic_next"><a href="#"
                                        aria-controls="datatable-basic" data-dt-idx="7" tabindex="0"
                                        class="page-link"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div @endsection
