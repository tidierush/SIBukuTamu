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
                <img class="d-block mx-auto mb-4" src="{{ asset('img/LogoDiskominfo.png') }}" alt="" width="84"
                    height="127">
                <h5>BUKU TAMU PENGUNJUNG</h5>
                <h3>DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI KALIMANTAN SELATAN</h3>
            </div>
            @yield('main')
        </main>
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