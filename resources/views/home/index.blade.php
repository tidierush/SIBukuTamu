@extends('layouts.admin')

@section('main')
<h3>Selamat datang di</h3>
<h1>SISTEM INFORMASI MANAJEMEN DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI KALIMANTAN SELATAN</h1>
<h4>Anda masuk sebagai {{ (auth()->user()->is_admin)? 'Admin': 'Staff' }}</h4>
<div>
    <div class="row text-center mt-2 mb-2">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">
            <a href="{{ route('report.performance') }}" class="btn btn-success btn-bg">Cetak Total Performansi</a>
        </div>
    </div>
</div>
<div>
    <div class="row mt-4">
        <div class="col-lg-4">
            <canvas id="guestChart">Daftar Tamu</canvas>
        </div>
        <div class="col-lg-4">
            <canvas id="guestBookChart">Buku Tamu</canvas>
        </div>
        <div class="col-lg-4">
            <canvas id="feedbackChart">Kritik & Saran</canvas>
        </div>
    </div>
</div>
<div>
    <div class="row text-center mt-2 mb-2">
        <div class="col-lg-4">
            <a href="{{ route('report.guest') }}" class="btn btn-dark btn-bg">Cetak Seluruh Data Tamu</a>
        </div>
        <div class="col-lg-4">
            <a href="{{ route('report.guestbook') }}" class="btn btn-dark btn-bg">Cetak Seluruh Kunjungan</a>
        </div>
        <div class="col-lg-4">
            <a href="{{ route('report.feedback') }}" class="btn btn-dark btn-bg">Cetak Seluruh Kritik & Saran</a>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
    integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<img src="{{ asset('img/kantor_diskominfo.jpeg') }}" class="img-fluid max-width:100% height:auto pt-3">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let guestBookChartData = JSON.parse('{!! $guestBookChartData !!}')
    new Chart(
        document.getElementById('guestBookChart'),
        {
            type: 'line',
            data: {
                labels: guestBookChartData.labels,
                datasets: [{
                    label: 'Rekap Kunjungan',
                    backgroundColor: 'rgb(51, 102, 255)',
                    borderColor: 'rgb(51, 102, 255)',
                    data: guestBookChartData.data,
                }]
            },
            options: {
                startFrom: 1
            }
        }
    );

    let guestChartData = JSON.parse('{!! $guestChartData !!}')
    new Chart(
        document.getElementById('guestChart'),
        {
            type: 'line',
            data: {
                labels: guestChartData.labels,
                datasets: [{
                    label: 'Rekap Total Tamu',
                    backgroundColor: 'rgb(255, 00, 00)',
                    borderColor: 'rgb(255, 00 , 00)',
                    data: guestChartData.data,
                }]
            },
            options: {
                startFrom: 1
            }
        }
    );

    let feedbackChartData = JSON.parse('{!! $feedbackChartData !!}')
    new Chart(
        document.getElementById('feedbackChart'),
        {
            type: 'line',
            data: {
                labels: feedbackChartData.labels,
                datasets: [{
                    label: 'Rekap Total Kritik & Saran',
                    backgroundColor: 'rgb(102, 255, 102)',
                    borderColor: 'rgb(102, 255, 102)',
                    data: feedbackChartData.data,
                }]
            },
            options: {
                startFrom: 1
            }
        }
    );

</script>
@endsection