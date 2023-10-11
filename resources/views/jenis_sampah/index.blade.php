@extends('layouts.app')

@section('content')
<div class="col-md-9">
    <!-- Content -->
    <h1>Daftar Jenis Sampah</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('jenis-sampah.create') }}" class="btn btn-primary">Tambah Jenis Sampah</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga per Kilogram</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenisSampahList as $jenisSampah)
                <tr>
                    <td>{{ $jenisSampah->nama }}</td>
                    <td>Rp {{ number_format($jenisSampah->harga_per_kilogram, 2) }}</td>
                    <td>
                        <a href="{{ route('jenis-sampah.edit', $jenisSampah->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('jenis-sampah.destroy', $jenisSampah->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection
