@extends('layouts.admin')

@section('main')
<div class="row">
    <div class="col-lg-7 mx-auto">
        <h3>Tambah Data Buku Tamu</h3>
        <small>Disini adalah halaman untuk menambahkan catatan kunjungan dari seorang tamu. Yang sebelumnya sudah
            mendaftar sebagai tamu. Jika tamu belum didaftarkan mmaka nama tamu tidak akan muncul untuk dilakukan
            pemasukan data.</small>
        <div class="mt-4">
            <a href="{{ route('guestBook.index') }}" class="btn btn-success btn-bg">Kembali</a>
        </div>
        <form action="{{ route('guestBook.store') }}" method="post" enctype="multipart/form-data" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Tamu</label>
                <select name="guest_id" id="guest_id" class="form-control">
                    @foreach ($guests as $guest)
                    <option {{ $guest->id == old('guest_id') ? 'selected' : '' }} value="{{ $guest->id }}">
                        {{ $guest->name }}</option>
                    @endforeach
                </select>
                <small>Harap pastikan terlebih dahulu nama yang hendak dipilih</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipe Kunjungan</label>
                <div class="form-check">
                    <input {{ old('type')=='Kunjungan Pertama' ? 'checked' : '' }} value="Kunjungan Pertama"
                        class="form-check-input" type="radio" name="type" id="type1">
                    <label class="form-check-label" for="type1">
                        Kunjungan Pertama
                    </label>
                </div>
                <div class="form-check">
                    <input {{ old('type')=='Kunjungan Lanjutan' ? 'checked' : '' }} value="Kunjungan Lanjutan"
                        class="form-check-input" type="radio" name="type" id="type2">
                    <label class="form-check-label" for="type2">
                        Kunjungan Lanjutan
                    </label>
                </div>
            </div>
            <div class="my-3">
                <label for="purpose" class="form-label">Tujuan Kunjungan</label>
                <div class="form-check">
                    <input id="purpose" value="Kepala Dinas" name="purpose" type="radio" class="form-check-input"
                        required>
                    <label class="form-check-label" for="kepaladinas">Kepala Dinas</label>
                </div>
                <div class="form-check">
                    <input id="purpose" value="Sekretariat" name="purpose" type="radio" class="form-check-input"
                        required>
                    <label class="form-check-label" for="sekretariat">Sekretariat</label>
                </div>
                <div class="form-check">
                    <input id="purpose" value="Bidang Informasi Publik dan Statistik" name="purpose" type="radio"
                        class="form-check-input" required>
                    <label class="form-check-label" for="bidanginformasipublikdanstatistik">Bidang Informasi Publik dan
                        Statistik</label>
                </div>
                <div class="form-check">
                    <input id="purpose" value="Bidang Komunikasi Publik" name="purpose" type="radio"
                        class="form-check-input" required>
                    <label class="form-check-label" for="bidangkomunikasipublik">Bidang Komunikasi Publik</label>
                </div>
                <div class="form-check">
                    <input id="purpose" value="Bidang E-Goverment" name="purpose" type="radio" class="form-check-input"
                        required>
                    <label class="form-check-label" for="bidangegoverment">Bidang E-Goverment</label>
                </div>
                <div class="form-check">
                    <input id="purpose" value="Bidang Persandian dan Keamanan Informasi" name="purpose" type="radio"
                        class="form-check-input" required>
                    <label class="form-check-label" for="bidangpersandiandankeamananinformasi">Bidang Persandian dan
                        Keamanan Informasi</label>
                </div>
                <div class="form-check">
                    <input id="purpose" value="Sekretariat Pranata Komputer" name="purpose" type="radio"
                        class="form-check-input" required>
                    <label class="form-check-label" for="sekretariatpranatakomputer">Sekretariat Pranata
                        Komputer</label>
                </div>
                <div class="form-check">
                    <input id="purpose" value="Pranata Komputer" name="purpose" type="radio" class="form-check-input"
                        required>
                    <label class="form-check-label" for="pranatakomputer">Pranata Komputer</label>
                </div>
                <div class="form-check">
                    <input id="purpose" value="LPPL Abdi Persada" name="purpose" type="radio" class="form-check-input"
                        required>
                    <label class="form-check-label" for="lpplabdipersada">LPPL Abdi Persada</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="purposeinfo" class="form-label">Keterangan Tujuan</label>
                <input type="text" name="purposeinfo" id="purposeinfo" class="form-control"
                    value="{{ old('purposeinfo') }}">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">File Lampiran</label>
                <input type="file" name="file" id="file" class="form-control">
                <small>File berupa .PDF dengan maksimal ukuran 2MB atau 2048kb</small>
            </div>
            <div class="text-end">
                <button type="reset" class="btn btn-danger btn-bg">Kosongkan Form</button>
                <button type="submit" class="btn btn-primary btn-bg">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection