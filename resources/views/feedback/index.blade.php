@extends('layouts.admin')

@section('main')
<h3 class="mb-1">Data Rekap Kritik & Saran</h3>
<small>Data ini adalah rekap dari kritik dan saran seluruh pengunjung dari kantor.<br>Hal ini bersifat anonim sehingga
    tidak dicantumkan siapa pelapor ini.</small>
<div class="mb-3 text-end">
    <a href="{{ route('report.feedbackperformance') }}" class="btn btn-dark btn-bg">Cetak Rating</a>
    <a href="{{ route('report.feedback') }}" class="btn btn-dark btn-bg">Cetak Seluruh Kritik & Saran</a>
    <a href="{{ route('feedback.create') }}" class="btn btn-success btn-bg">Tambah Data Kritik & Saran</a>
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Kunjungan Terakhir</th>
                <th scope="col">Tingkat Kepuasan Layanan</th>
                <th scope="col">Kritik</th>
                <th scope="col">Saran</th>
                <th scope="col">Waktu Berkunjung</th>
                <th scope="col">Menu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedbacks as $index => $feedback)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $feedback->purpose }}</td>
                <td>{{ $feedback->rating }}</td>
                <td>{{ $feedback->critics }}</td>
                <td>{{ $feedback->suggestion }}</td>
                <td>{{ $feedback->created_at->format('d F Y H:i:s') }}</td>
                <td nowrap>
                    <a href="{{ route('feedback.edit', ['feedback' => $feedback]) }}"
                        class="btn btn-bg btn-success">Edit</a>
                    <form action="{{ route('feedback.destroy', ['feedback' => $feedback]) }}" method="post"
                        class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                            class="btn btn-bg btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection