<!DOCTYPE html>

<head>
    <title>Cetak Laporan Kunjungan Tamu</title>
</head>
<style>
    table.center {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    table.center2 {
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
        width: 85%;
        padding: 15px;
        text-align: left;

    }

    table.center2 td {
        border: 1px solid black;
        padding: 8px;
    }
</style>
<script type="text/javascript">
    <!--
    window.print();
    -->
</script>

<body>
    <table class="center">
        <tr>
            <td></td>
            <td><img src="{{ asset('img/logo_diskominfo.png') }}" width="100"></td>
            <td></td>
        </tr>
    </table>

    <table class="center">
        <tr>
            <td></td>
            <td>
                <h1>BUKU TAMU<br>DINAS KOMUNIKASI DAN INFORMATIKA<br>PROVINSI KALIMANTAN
                    SELATAN
                </h1>
            </td>
            <td></td>
        </tr>
    </table>

    <table class="center">
        <tr>
            <td></td>
            <td>
                <h2>REKAP DATA KUNJUNGAN TAMU</h2>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <h4>Berikut adalah rekap tamu yang pernah datang.<br>Semua direkap dalam satu tabel
                    sehingga
                    menampilkan seluruh data.</h4>
                <p>Waktu Cetak : <span id="datetime"></span></p>

                <script>
                    var dt = new Date();
                    document.getElementById("datetime").innerHTML = (("0" + dt.getDate()).slice(-2)) + "-" + (("0" + (dt.getMonth() + 1)).slice(-2)) + "-" + (dt.getFullYear()) + " " + (("0" + dt.getHours()).slice(-2)) + ":" + (("0" + dt.getMinutes()).slice(-2));
                </script>
            </td>
            <td></td>
        </tr>
    </table>

    <table class="center2">
        <tbody>
            <tr>
                <td>No.</td>
                <td>Nama</td>
                <td>Telepon</td>
                <td>Tipe Kunjungan</td>
                <td>Tujuan Kunjungan</td>
                <td>Keterangan</td>
                <td>Waktu Kunjungan</td>
            </tr>
            @foreach ($guestBook as $index => $guestBook)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $guestBook->guest->name }}</td>
                <td>{{ $guestBook->guest->phone }}</td>
                <td>{{ $guestBook->type }}</td>
                <td>{{ $guestBook->purpose }}</td>
                <td>{{ $guestBook->purposeinfo }}</td>
                <td>{{ $guestBook->created_at->format('d F Y H:i:s') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>