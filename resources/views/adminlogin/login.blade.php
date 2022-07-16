<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login Admin Buku Tamu Diskominfo Prov. Kalsel</title>
</head>

<body>
    <div class="text-center mt-4">
        <img class="mb-2" src="{{ asset('img/logo_diskominfo.png') }}" alt="" width="84" height="127">
        <h2 class="">SISTEM INFORMASI MANAJEMEN<br>DINAS KOMUNIKASI DAN INFORMATIKA<br>PROVINSI KALIMANTAN SELATAN</h2>
    </div>
    <form class="col-3 mx-auto mt-4 justify-content-center" method="post" action="{{ route('adminlogin.store') }}">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
        @endif

        <div class="mb-3">
            <label for="email" class="form-label">User Admin ID</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Login</button>
        <p>Jika anda lupa terhadap kredensial login Anda, silahkan melapor ke Call Center LeafDev Project ID.</p>
    </form>
</body>

</html>