@extends('layouts.admin')

@section('main')
<div class="row">
    <div class="col-lg-7 mx-auto">
        <h3>Tambah Data Saran</h3>
        <small>Tambahkan data saran secara manual. Hal ini dilakukan jika pengunjung tidak memahami cara dalam melakukan
            proses kritik online melalui gadgetnya masing-masing. Tetapi operator yang login tetap harus mengarahkan
            tamu agar bisa melakukannya secara mandiri agar tidak terjadi salah paham atau penyalahgunaan.</small>
        <div class="mt-4">
            <a href="{{ route('feedback.index') }}" class="btn btn-success btn-bg">Kembali</a>
        </div>
        <form action="{{ route('feedback.store') }}" method="post" class="mt-3">
            @csrf
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
                    <input id="purpose" value="Bidang Persandian dan Keamanan" name="purpose" type="radio"
                        class="form-check-input" required>
                    <label class="form-check-label" for="bidangpersandiandankeamanan">Bidang Persandian dan Keamanan
                        Informasi</label>
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
            <div class="my-3">
                <label for="purpose" class="form-label">Tingkat Kepuasan Pelayanan</label>
                <div class="form-check">
                    <input id="rating" value="Sangat Baik" name="rating" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="sangatbaik">Sangat Baik</label>
                </div>
                <div class="form-check">
                    <input id="rating" value="Baik" name="rating" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="baik">Baik</label>
                </div>
                <div class="form-check">
                    <input id="rating" value="Cukup" name="rating" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="cukup">Cukup</label>
                </div>
                <div class="form-check">
                    <input id="rating" value="Kurang" name="rating" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="kurang">Kurang</label>
                </div>
                <div class="form-check">
                    <input id="rating" value="Sangat Kurang" name="rating" type="radio" class="form-check-input"
                        required>
                    <label class="form-check-label" for="sangatkurang">Sangat Kurang</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="critics" class="form-label">Kritik</label>
                <input type="text" name="critics" id="critis" class="form-control" value="{{ old('critics') }}">
            </div>
            <div class="mb-3">
                <label for="suggestion" class="form-label">Saran</label>
                <input type="text" name="suggestion" id="suggestion" class="form-control"
                    value="{{ old('suggestion') }}">
            </div>

            <div class="text-end">
                <button type="reset" class="btn btn-danger btn-bg">Kosongkan Form</button>
                <button type="submit" class="btn btn-primary btn-bg">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection