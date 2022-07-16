<!DOCTYPE html>

<head>
    <title>Cetak Performa Kritik & Saran</title>
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
                <h2>REKAP PERFORMANSI KRITIK & SARAN</h2>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <h4>Berikut adalah rekap performansi dari kritik & saran.<br>Semua direkap menjadi satu disini agar
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
                <td><canvas id="performanceFeedbackChartData">Daftar Kritik & Saran</canvas></td>
            </tr>
        </tbody>
    </table>
    <table class="center2">
        <tr>
            <td>
                <h4 style="text-align: center">Sangat Baik</h4>
                <h1 style="text-align: center">{{ $feedbackSangatBaik }}</h1>
            </td>
            <td>
                <h4 style="text-align: center">Baik</h4>
                <h1 style="text-align: center">{{ $feedbackBaik }}</h1>
            </td>
            <td>
                <h4 style="text-align: center">Cukup</h4>
                <h1 style="text-align: center">{{ $feedbackCukup }}</h1>
            </td>
            <td>
                <h4 style="text-align: center">Kurang</h4>
                <h1 style="text-align: center">{{ $feedbackKurang }}</h1>
            </td>
            <td>
                <h4 style="text-align: center">Sangat Kurang</h4>
                <h1 style="text-align: center">{{ $feedbackSangatKurang }}</h1>
            </td>
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
    let performanceFeedbackChartData = JSON.parse('{!! $performanceFeedbackChartData !!}')
    new Chart(
        document.getElementById('performanceFeedbackChartData'),
        {
            type: 'line',
            data: {
                labels: performanceFeedbackChartData.labels,
                datasets: [{
                    label: 'Rekap Total Kritik & Saran',
                    backgroundColor: 'rgb(102, 255, 102)',
                    borderColor: 'rgb(102, 255, 102)',
                    data: performanceFeedbackChartData.data,
                }]
            },
            options: {
                startFrom: 1
            }
        }
    );

</script>


</html>