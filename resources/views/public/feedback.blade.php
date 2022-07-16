<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu Diskominfo Provinsi Kalimantan Selatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img src="{{ asset('img/logo_diskominfo.png') }}" width="84" height="127">
                <h5>MEDIA KRITIK DAN SARAN</h5>
                <h3>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI KALIMANTAN SELATAN</h3>
            </div>
            <main>
                <div class="row g-5">
                    <div class="col-md-5 col-lg-4 order-md-last">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary">Tentang Diskominfo Provinsi Kalimantan Selatan</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0"><span class="badge bg-primary rounded-pill">i</span> Diskominfo
                                        Provinsi
                                        Kalimantan Selatan</h6>
                                    <br><small class="text-muted">Dinas Komunikasi dan Informatika
                                        yang bertugas secara wilayah provinsi untuk menangani segala sesuatu yang
                                        berhubungan dengan
                                        Teknologi atau Informasi</small>
                                </div>
                            </li>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">Form Kritik & Saran</h4>
                        <form action="{{ route('public.storeFeedback') }}" method="POST">
                            @csrf

                            <div class="my-3">
                                <label for="purpose" class="form-label">Tujuan Kunjungan</label>
                                <div class="form-check">
                                    <input id="purpose" value="Kepala Dinas" name="purpose" type="radio"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="kepaladinas">Kepala Dinas</label>
                                </div>
                                <div class="form-check">
                                    <input id="purpose" value="Sekretariat" name="purpose" type="radio"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="sekretariat">Sekretariat</label>
                                </div>
                                <div class="form-check">
                                    <input id="purpose" value="Bidang Informasi Publik dan Statistik" name="purpose"
                                        type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="bidanginformasipublikdanstatistik">Bidang
                                        Informasi Publik dan
                                        Statistik</label>
                                </div>
                                <div class="form-check">
                                    <input id="purpose" value="Bidang Komunikasi Publik" name="purpose" type="radio"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="bidangkomunikasipublik">Bidang Komunikasi
                                        Publik</label>
                                </div>
                                <div class="form-check">
                                    <input id="purpose" value="Bidang E-Goverment" name="purpose" type="radio"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="bidangegoverment">Bidang E-Goverment</label>
                                </div>
                                <div class="form-check">
                                    <input id="purpose" value="Bidang Persandian dan Keamanan" name="purpose"
                                        type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="bidangpersandiandankeamanan">Bidang Persandian
                                        dan Keamanan
                                        Informasi</label>
                                </div>
                                <div class="form-check">
                                    <input id="purpose" value="Sekretariat Pranata Komputer" name="purpose" type="radio"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="sekretariatpranatakomputer">Sekretariat Pranata
                                        Komputer</label>
                                </div>
                                <div class="form-check">
                                    <input id="purpose" value="Pranata Komputer" name="purpose" type="radio"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="pranatakomputer">Pranata Komputer</label>
                                </div>
                                <div class="form-check">
                                    <input id="purpose" value="LPPL Abdi Persada" name="purpose" type="radio"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="lpplabdipersada">LPPL Abdi Persada</label>
                                </div>
                            </div>
                            <div class="my-3">
                                <label for="purpose" class="form-label">Tingkat Kepuasan Pelayanan</label>
                                <div class="form-check">
                                    <input id="rating" value="Sangat Baik" name="rating" type="radio"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="sangatbaik">Sangat Baik</label>
                                </div>
                                <div class="form-check">
                                    <input id="rating" value="Baik" name="rating" type="radio" class="form-check-input"
                                        required>
                                    <label class="form-check-label" for="baik">Baik</label>
                                </div>
                                <div class="form-check">
                                    <input id="rating" value="Cukup" name="rating" type="radio" class="form-check-input"
                                        required>
                                    <label class="form-check-label" for="cukup">Cukup</label>
                                </div>
                                <div class="form-check">
                                    <input id="rating" value="Kurang" name="rating" type="radio"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="kurang">Kurang</label>
                                </div>
                                <div class="form-check">
                                    <input id="rating" value="Sangat Kurang" name="rating" type="radio"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="sangatkurang">Sangat Kurang</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="critics" class="form-label">Kritik</label>
                                <input type="text" name="critics" id="critis" class="form-control"
                                    value="{{ old('critics') }}">
                            </div>
                            <div class="mb-3">
                                <label for="suggestion" class="form-label">Saran</label>
                                <input type="text" name="suggestion" id="suggestion" class="form-control"
                                    value="{{ old('suggestion') }}">
                            </div>

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Kirim Saran</button>
                        </form>
                    </div>
                </div>
            </main>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script src="form-validation.js"></script>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">&copy; 2021 Dinas Komunikasi Dan Informatika Prov. Kalsel</p>

                <a href="/"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><a href="https://diskominfomc.kalselprov.go.id/"
                            class="nav-link px-2 text-muted">Halaman Utama Diskominfo Kalimantan Selatan</a></li>
                </ul>
            </footer>
        </div>
</body>

</html>