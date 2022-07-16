@extends('layouts.admin')

@section('main')
<h3 class="mb-1">Data Kunjungan Tamu</h3>
<small>Menampilkan data rekap seluruh kunjungan dari tamu yang datang.<br>Data diurutkan dari data pengunjung terbaru
    hingga terlama</small>
<div class="mb-3 text-end">
    <a href="{{ route('report.guestbook') }}" class="btn btn-dark btn-bg">Cetak Seluruh Kunjungan</a>
    <a href="{{ route('guestBook.create') }}" class="btn btn-success btn-bg">Tambah Data Kunjungan Baru</a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Tamu</th>
                <th scope="col">Telepon</th>
                <th scope="col">Tipe Kunjungan</th>
                <th scope="col">Tujuan Kunjungan</th>
                <th scope="col">Keterangan Kunjungan</th>
                <th scope="col">Waktu Kunjungan</th>
                <th scope="col">Lampiran File</th>
                <th scope="col">Menu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guestBooks as $index => $guestBook)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $guestBook->guest->name }}</td>
                <td>{{ $guestBook->guest->phone }}</td>
                <td>{{ $guestBook->type }}</td>
                <td>{{ $guestBook->purpose }}</td>
                <td>{{ $guestBook->purposeinfo }}</td>
                <td>{{ $guestBook->created_at->format('d F Y H:i:s') }}</td>
                <td><a class="btn btn-primary btn-bg" target="_blank"
                        href="{{ asset('storage/' . $guestBook->file) }}">Lihat
                        File</a></td>
                <td nowrap>
                    <a href="{{ route('guestBook.edit', ['guestBook' => $guestBook]) }}"
                        class="btn btn-bg btn-success">Edit</a>
                    <form action="{{ route('guestBook.destroy', ['guestBook' => $guestBook]) }}" method="post"
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