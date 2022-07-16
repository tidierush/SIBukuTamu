@extends('layouts.admin')

@section('main')
<div class="row">
    <div class="col-lg-7 mx-auto">
        <h3 class="">Edit Data Saran</h3>
        <div class="alert alert-warning" role="alert">
            Harap digunakan dengan bijak dengan tidak merubah data disini terkecuali terdapat kekeliruan atau salah
            dalam pemasukan data!
        </div>
        <div class="mt-4">
            <a href="{{ route('feedback.index') }}" class="btn btn-success btn-bg">Kembali</a>
        </div>
        <form action="{{ route('feedback.update', ['feedback' => $feedback]) }}" method="post" class="mt-3">
            @csrf
            @method('put')
            <div class="col-md-6 mb-3">
                <label for="">Tujuan Bidang</label>
                <div class="form-check">
                    <input value="Kepala Dinas" id="purpose" name="purpose" type="radio" class="form-check-input" {{
                        (old('purpose', $feedback->purpose)=='Kepala Dinas')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="kepala_dinas">Kepala Dinas</label>
                </div>
                <div class="form-check">
                    <input value="Sekretariat" id="purpose" name="purpose" type="radio" class="form-check-input" {{
                        (old('purpose', $feedback->purpose)=='Sekretariat')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="sekretariat">Sekretariat</label>
                </div>
                <div class="form-check">
                    <input value="Bidang Informasi Publik dan Statistik" id="purpose" name="purpose" type="radio"
                        class="form-check-input" {{ (old('purpose', $feedback->purpose)=='Bidang Informasi Publik dan Statistik')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="bidang_informasi_publik_dan_statistik">Bidang Informasi Publik
                        dan
                        Statistik</label>
                </div>
                <div class="form-check">
                    <input value="Bidang Komunikasi Publik" id="purpose" name="purpose" type="radio"
                        class="form-check-input" {{ (old('purpose', $feedback->purpose)=='Bidang Komunikasi Publik')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="bidang_komunikasi_public">Bidang Komunikasi Publik</label>
                </div>
                <div class="form-check">
                    <input value="Bidang E-Goverment" id="purpose" name="purpose" type="radio" class="form-check-input"
                        {{ (old('purpose', $feedback->purpose)=='Bidang E-Goverment')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="bidang_egoverment">Bidang E-Goverment</label>
                </div>
                <div class="form-check">
                    <input value="Bidang Persandian dan Keamanan Informasi" id="purpose" name="purpose" type="radio"
                        class="form-check-input" {{ (old('purpose', $feedback->purpose)=='Bidang Persandian dan Keamanan Informasi')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="bidang_persandian_dan_keamanan_informasi">Bidang Persandian dan
                        Keamanan Informasi</label>
                </div>
                <div class="form-check">
                    <input value="Sekretariat Pranata Komputer" id="purpose" name="purpose" type="radio"
                        class="form-check-input" {{ (old('purpose', $feedback->purpose)=='Sekretariat Pranata Komputer')? 'checked': '' }} required>
                    <label class="form-check-label" for="sekretariat_pranata_komputer">Sekretariat Pranata
                        Komputer</label>
                </div>
                <div class="form-check">
                    <input value="Pranata Komputer" id="purpose" name="purpose" type="radio" class="form-check-input" {{
                        (old('purpose', $feedback->purpose)=='Pranata Komputer')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="pranata_komputer">Pranata Komputer</label>
                </div>
                <div class="form-check">
                    <input value="LPPL Abdi Persada" id="purpose" name="purpose" type="radio" class="form-check-input"
                        {{ (old('purpose', $feedback->purpose)=='LPPL Abdi Persada')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="lppm_abdi_persada">LPPL Abdi Persada</label>
                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label for="">Tingkat Kepuasan Pelayanan</label>
                <div class="form-check">
                    <input value="Sangat Baik" id="rating" name="rating" type="radio" class="form-check-input" {{
                        (old('rating', $feedback->rating)=='Sangat Baik')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="sangatbaik">Sangat Baik</label>
                </div>
                <div class="form-check">
                    <input value="Baik" id="rating" name="rating" type="radio" class="form-check-input" {{
                        (old('rating', $feedback->rating)=='Baik')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="baik">Baik</label>
                </div>
                <div class="form-check">
                    <input value="Cukup" id="rating" name="rating" type="radio" class="form-check-input" {{
                        (old('rating', $feedback->rating)=='Cukup')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="cukup">Cukup</label>
                </div>
                <div class="form-check">
                    <input value="Kurang" id="rating" name="rating" type="radio" class="form-check-input" {{
                        (old('rating', $feedback->rating)=='Kurang')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="kurang">Kurang</label>
                </div>
                <div class="form-check">
                    <input value="Sangat Kurang" id="rating" name="rating" type="radio" class="form-check-input" {{
                        (old('rating', $feedback->rating)=='Sangat Kurang')?
                    'checked': '' }} required>
                    <label class="form-check-label" for="sangatkurang">Sangat Kurang</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="critics" class="form-label">Kritik</label>
                <input type="text" name="critics" id="critics" class="form-control"
                    value="{{ old('critics', $feedback->critics) }}">
            </div>
            <div class="mb-3">
                <label for="suggestion" class="form-label">Saran</label>
                <input type="text" name="suggestion" id="suggestion" class="form-control"
                    value="{{ old('suggestion', $feedback->suggestion) }}">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary btn-bg">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection