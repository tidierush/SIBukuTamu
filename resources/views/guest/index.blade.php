@extends('layouts.admin')

@section('main')
<h3 class="mb-1">Data Tamu Terdaftar</h3>
<small>Menampilkan data rekap seluruh tamu berdasarkan nama orang tersebut.<br>Data ini berupa identitas lengkap
    tamu. Data diurutkan dari data<br>pengunjung terbaru
    hingga terlama</small>
<div class="mb-3 text-end">
    <a href="{{ route('report.guest') }}" class="btn btn-dark btn-bg">Cetak Seluruh Data Tamu</a>
    <a href="{{ route('guest.create') }}" class="btn btn-success btn-bg">Tambah Tamu Baru</a>
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat Email</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Asal Instansi atau Kantor</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Menu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guests as $index => $guest)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $guest->name }}</td>
                <td>{{ $guest->email }}</td>
                <td>{{ $guest->phone }}</td>
                <td>{{ $guest->agency }}</td>
                <td>{{ $guest->position }}</td>
                <td nowrap>
                    <a href="{{ route('guest.edit', ['guest' => $guest]) }}" class="btn btn-bg btn-success">Edit</a>
                    <form action="{{ route('guest.destroy', ['guest' => $guest]) }}" method="post" class="d-inline">
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