@extends('layouts.admin')

@section('main')
<div class="row">
    <div class="col-lg-7 mx-auto">
        <h3 class="">Tambah Data Tamu</h3>
        <small>Halaman ini adalah tempat untuk menambahkan data tamu yang baru yang belum pernah berkunjung di Dinas
            Komunikasi dan Informatika Provinsi Kalimantan Selatan. Harap sebelum memasukan data baru agar dapat
            mengecek pada daftar tamu apakah pernah mendaftar atau tidak agar menghindari duplikasi data</small>
        <div class="mt-4">
            <a href="{{ route('guest.index') }}" class="btn btn-success btn-bg">Kembali</a>
        </div>
        <form action="{{ route('guest.store') }}" method="post" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Tamu</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                <small>*Harap gunakan nama selengkapnya guna memudahkan cek kedepannya</small>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
            </div>
            <div class="mb-3">
                <label for="agency" class="form-label">Asal Instansi</label>
                <input type="text" name="agency" id="agency" class="form-control" value="{{ old('agency') }}">
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Jabatan</label>
                <input type="text" name="position" id="position" class="form-control" value="{{ old('position') }}">
            </div>

            <div class="text-end">
                <button type="reset" class="btn btn-danger btn-bg">Kosongkan Form</button>
                <button type="submit" class="btn btn-primary btn-bg">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection