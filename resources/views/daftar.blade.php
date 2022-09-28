@extends('layout.navbar')

@section('content')

<br>
<br>
<br>
<div class="header">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center">
          <div class="col-lg-6 col-7">
            <h2 class="h2 text-black d-inline-block mb-0">Daftar Pasien</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
<br>
<form action="" method="POST">
      <div class="form-group">
        <label class="form-control-label" for="exampleFormControlInput1">No Pasien</label>
        <input name="nopasien" type="number" class="form-control" id="exampleFormControlInput1" placeholder="No Pasien">
        @error('no') {{ $massage }} @enderror
      </div>
      <div class="form-group">
        <label class="form-control-label" for="exampleFormControlInput1">Nama Pasien</label>
        <input name="nama" type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pasien">
        @error('nama') {{ $massage }} @enderror
      </div>
      <div class="form-group">
        <label class="form-control-label" for="exampleFormControlInput1">NIK</label>
        <input name="nik" type="number" class="form-control" id="exampleFormControlInput1" placeholder="NIK">
        @error('nik') {{ $massage }} @enderror
      </div>
      <div class="form-group">
        <label class="form-control-label" for="exampleFormControlInput1">Tanggal Lahir</label>
        <input name="tgllhr" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir">
      </div>
      <div class="form-group">
        <label class="form-control-label" for="exampleFormControlInput1">Tempat Lahir</label>
        <input name="tmplhr" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat Lahir">
      </div>
      <div class="form-group">
        <label class="form-control-label" for="exampleFormControlInput1">Umur</label>
        <input name="umur" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Umur">
      </div>
      <div class="form-group">
        <label class="form-control-label" for="exampleFormControlInput1">Alamat</label>
        <input name="alamat" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alamat">
      </div>
      <div class="form-group">
        <label class="form-control-label" for="exampleFormControlInput1">No Telpon</label>
        <input name="nohp" type="number" class="form-control" id="exampleFormControlInput1" placeholder="No Telpon">
        @error('nohp') {{ $massage }} @enderror
      </div>
      <div class="form-group">
        <label class="form-control-label" for="exampleFormControlSelect1">Jenis Kelamin</label>
        <select name="jk" class="form-control" id="exampleFormControlSelect1">
          <option class="disabled">Jenis Kelamin</option>
          <option value="laki-laki">Laki-Laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>
      <div class="col-lg-6 col-5 text-right">
          <button type="submit" class="btn btn-sm btn-neutral btn-secondary">Kirim</button>
      </div>
<br>
</form>

@endsection
