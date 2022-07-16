<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SIM Diskominfo Prov Kalsel</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img src="{{ asset('img/logo_diskominfo.png') }}" width="30">
                SISTEM INFORMASI MANAJEMEN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('guest.index') }}">Data Tamu</a>
                    <a class="nav-link" href="{{ route('guestBook.index') }}">Data Kunjungan Tamu</a>
                    <a class="nav-link" href="{{ route('feedback.index') }}">Data Rekap Kritik & Saran</a>
                    <a class="nav-link" href="{{ route('feedback.index') }}">Data Surat Masuk</a>
                    <a class="nav-link" href="{{ route('feedback.index') }}">Data Surat Keluar</a>
                    <a class="nav-link" href="{{ route('feedback.index') }}">Data Bagian Karyawan</a>
                    <a class="nav-link" href="{{ route('feedback.index') }}">Data Admin / User</a>
                    @auth
                    <form action="{{ route('logout.store') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Keluar</button>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <main class="py-lg-5 py-3">
        <div class="container">
            @if (session('info'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {!! session('info') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {!! session('success') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {!! session('warning') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {!! session('danger') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if ($errors->any())
            <div class="pb-0 alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session('status'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {!! session('status') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @yield('main')
        </div>
    </main>
</body>
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy;2022 Saifullah Zaid / Tidier - LeafDev Project ID</p>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="https://diskominfomc.kalselprov.go.id/"
                    class="nav-link px-2 text-muted">Halaman Utama Diskominfo Kalimantan Selatan</a></li>
        </ul>
    </footer>
</div>

</html>