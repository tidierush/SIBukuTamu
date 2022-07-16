@extends('layouts.admin')

@section('main')
<div class="row">
    <div class="col-lg-7 mx-auto">
        <h3 class="">Edit Data Tamu</h3>
        <div class="alert alert-warning" role="alert">
            Harap digunakan dengan bijak dengan tidak merubah data disini terkecuali terdapat kekeliruan atau salah
            dalam pemasukan data!
        </div>
        <div class="mt-4">
            <a href="{{ route('guest.index') }}" class="btn btn-success btn-bg">Kembali</a>
        </div>
        <form action="{{ route('guest.update', ['guest' => $guest]) }}" method="post" class="mt-3">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Tamu</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $guest->name) }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" name="email" id="email" class="form-control"
                    value="{{ old('email', $guest->email) }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="text" name="phone" id="phone" class="form-control"
                    value="{{ old('phone', $guest->phone) }}">
            </div>
            <div class="mb-3">
                <label for="agency" class="form-label">Asal Instansi atau Kantor</label>
                <input type="text" name="agency" id="agency" class="form-control"
                    value="{{ old('agency', $guest->agency) }}">
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Jabatan</label>
                <input type="text" name="position" id="position" class="form-control"
                    value="{{ old('position', $guest->position) }}">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary btn-bg">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection