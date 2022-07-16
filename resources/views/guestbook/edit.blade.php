@extends('layouts.admin')

@section('main')
<div class="row">
    <div class="col-lg-7 mx-auto">
        <h3 class="">Edit Data Buku Tamu</h3>
        <div class="alert alert-warning" role="alert">
            Harap digunakan dengan bijak dengan tidak merubah data disini terkecuali terdapat kekeliruan atau salah
            dalam pemasukan data!
        </div>
        <div class="mt-4">
            <a href="{{ route('guestBook.index') }}" class="btn btn-success btn-bg">Kembali</a>
        </div>
        <form action="{{ route('guestBook.update', ['guestBook' => $guestBook]) }}" method="post"
            enctype="multipart/form-data" class="mt-3">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Tamu</label>
                <select name="guest_id" id="guest_id" class="form-control" disabled>
                    @foreach ($guests as $guest)
                    <option {{ $guest->id == old('guest_id', $guestBook->guest_id) ? 'selected' : '' }}
                        value="{{ $guest->id }}">
                        {{ $guest->name }}</option>
                    @endforeach
                </select>
                <small>Perhatian : Anda tidak dapat mengubah nama tamu sembari mengedit isi dari kunjungan tamu
                    tersebut. Ini
                    mencegah agar tidak dapat mengubah siapa yang berkunjung dengan mudah agar data tidak
                    keliru.</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipe Kunjungan</label>
                <div class="form-check">
                    <input {{ old('type', $guestBook->type) == 'Kunjungan Pertama' ? 'checked' : '' }}
                    value="Kunjungan Pertama" class="form-check-input" type="radio" name="type" id="type1">
                    <label class="form-check-label" for="type1">
                        Kunjungan Pertama
                    </label>
                </div>
                <div class="form-check">
                    <input {{ old('type', $guestBook->type) == 'Kunjungan Lanjutan' ? 'checked' : '' }}
                    value="Kunjungan Lanjutan" class="form-check-input" type="radio" name="type" id="type2">
                    <label class="form-check-label" for="type2">
                        Kunjungan Lanjutan
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <label for="">Tujuan Bidang</label>
                <div class="form-check">
                    <input value="Kepala Dinas" id="purpose" name="purpose" type="radio" class="form-check-input" {{
                        (old('purpose', $guestBook->purpose)=='Kepala Dinas')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="kepaladinas">Kepala Dinas</label>
                </div>
                <div class="form-check">
                    <input value="Sekretariat" id="purpose" name="purpose" type="radio" class="form-check-input" {{
                        (old('purpose', $guestBook->purpose)=='Sekretariat')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="sekretariat">Sekretariat</label>
                </div>
                <div class="form-check">
                    <input value="Bidang Informasi Publik dan Statistik" id="purpose" name="purpose" type="radio"
                        class="form-check-input" {{ (old('purpose', $guestBook->purpose)=='Bidang Informasi Publik dan Statistik')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="bidanginformasipublikdanstatistik">Bidang Informasi Publik dan
                        Statistik</label>
                </div>
                <div class="form-check">
                    <input value="Bidang Komunikasi Publik" id="purpose" name="purpose" type="radio"
                        class="form-check-input" {{ (old('purpose', $guestBook->purpose)=='Bidang Komunikasi Publik')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="bidangkomunikasipublik">Bidang Komunikasi Publik</label>
                </div>
                <div class="form-check">
                    <input value="Bidang E-Goverment" id="purpose" name="purpose" type="radio" class="form-check-input"
                        {{ (old('purpose', $guestBook->purpose)=='Bidang E-Goverment')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="bidangegoverment">Bidang E-Goverment</label>
                </div>
                <div class="form-check">
                    <input value="Bidang Persandian dan Keamanan Informasi" id="purpose" name="purpose" type="radio"
                        class="form-check-input" {{ (old('purpose', $guestBook->purpose)=='Bidang Persandian dan Keamanan Informasi')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="bidangpersandiandankeamananinformasi">Bidang Persandian dan
                        Keamanan Informasi</label>
                </div>
                <div class="form-check">
                    <input value="Sekretariat Pranata Komputer" id="purpose" name="purpose" type="radio"
                        class="form-check-input" {{ (old('purpose', $guestBook->purpose)=='Sekretariat Pranata Komputer')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="sekretariatpranatakomputer">Sekretariat Pranata
                        Komputer</label>
                </div>
                <div class="form-check">
                    <input value="Pranata Komputer" id="purpose" name="purpose" type="radio" class="form-check-input" {{
                        (old('purpose', $guestBook->purpose)=='Pranata Komputer')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="pranatakomputer">Pranata Komputer</label>
                </div>
                <div class="form-check">
                    <input value="LPPL Abdi Persada" id="purpose" name="purpose" type="radio" class="form-check-input" {{ (old('purpose', $guestBook->purpose)=='LPPL Abdi Persada')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="lppmabdipersada">LPPL Abdi Persada</label>
                </div>
            </div>
            <div class="mb-3 pt-3">
                <label for="purposeinfo" class="form-label">Keterangan Tujuan</label>
                <input type="text" name="purposeinfo" id="purposeinfo" class="form-control"
                    value="{{ old('purposeinfo', $guestBook->purposeinfo) }}">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">File</label>
                <input type="file" name="file" id="file" class="form-control">
                <small>Keterangan : Kosongkan jika tidak ingin ubah file</small>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary btn-bg">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection