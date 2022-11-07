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
    <form action="/apoteker/list" method="POST">
        @csrf
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">Kode Obat</label>
            <input name="kodeobat" type="number" value="{{ old('kodeobat') }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Kode Obat">
            @error('kodeobat')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">Nama Obat</label>
            <input name="namaobat" type="name" value="{{ old('namaobat') }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Nama Obat">
            @error('namaobat')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">satuan</label>
            <input name="satuan" type="number" value="{{ old('satuan') }}" class="form-control"
                id="exampleFormControlInput1" placeholder="satuan">
            @error('satuan')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">jumlah</label>
            <input name="jumlah" type="number" value="{{ old('jumlah') }}" class="form-control"
                id="exampleFormControlInput1" placeholder="jumlah">
            @error('jumlah')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-lg-6 col-5 text-right">
            <button type="submit" class="btn btn-sm btn-neutral btn-secondary">Kirim</button>
        </div>
        <br>
    </form>
@endsection
