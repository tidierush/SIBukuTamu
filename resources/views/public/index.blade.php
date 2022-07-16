<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kritik & Saran Dinas Komunikasi dan Informatika Provinsi Kalimantan Selatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="row">
        <img src="img/bg1.jpg" class="img-fluid col-md-8" alt="...">
        <div class="flex-column col-md-4 pt-5 h-100">
            <header class="mb-auto">
                <div>
                    <img src="{{ asset('img/logo_diskominfo.png') }}" width="84" height="127" class="mb-4">
                    </nav>
                </div>
            </header>
            <main class="px-3">
                <h1>DINAS KOMUNIKASI DAN INFORMATIKA KALIMANTAN SELATAN</h1>
                <p class="lead">Selamat datang di Media Kritik & Saran Dinas Komunikasi dan Informatika Kalimantan
                    Selatan. Bagi pengunjung agar dapat mengisi pengalaman hasil berkunjung disini. Data akan bersifat
                    rahasia.</p>
                <p class="lead">
                    <a href="{{ route('public.feedback') }}" class="btn btn-lg btn-primary mt-3">Isi Kritik & Saran</a>
                </p>
            </main>
        </div>
    </div>
</body>

</html>