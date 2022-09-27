@extends('layout.navbar')

@section('content')

<br>
<br>
<br>
    <h2>Registrasi Pasien</h2>
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
            </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection
