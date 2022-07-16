<!DOCTYPE html>

<head>
    <title>Cetak Performansi</title>
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
        width: 75%;
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
                <h2>REKAP PERFORMANSI</h2>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <h4>Berikut adalah rekap performansi dari buku tamu.<br>Semua direkap menjadi satu disini agar
                    mudah
                    membacanya.</h4>
                <p>Waktu Cetak : <span id="datetime"></span></p>


            </td>
            <td></td>
        </tr>
    </table>
    <table class="center2">
        <tbody>
            <tr>
                <td><canvas id="guestChart">Daftar Tamu</canvas></td>
                <td><canvas id="guestBookChart">Daftar Buku Tamu</canvas></td>
                <td><canvas id="feedbackChart">Daftar Kritik & Saran</canvas></td>
            </tr>
            <tr>
                <td>
                    <h4 style="text-align: center">Total Tamu Terdaftar</h4>
                    <h1 style="text-align: center">{{ $guest }}</h1>
                </td>
                <td>
                    <h4 style="text-align: center">Total Kunjungan</h4>
                    <h1 style="text-align: center">{{ $guestBook }}</h1>
                </td>
                <td>
                    <h4 style="text-align: center">Total Kritik & Saran</h4>
                    <h1 style="text-align: center">{{ $feedback }}</h1>
                </td>
        </tbody>
    </table>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
    </table>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
    integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var dt = new Date();
                    document.getElementById("datetime").innerHTML = (("0" + dt.getDate()).slice(-2)) + "-" + (("0" + (dt.getMonth() + 1)).slice(-2)) + "-" + (dt.getFullYear()) + " " + (("0" + dt.getHours()).slice(-2)) + ":" + (("0" + dt.getMinutes()).slice(-2));
</script>

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



</html>