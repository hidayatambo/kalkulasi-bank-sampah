@extends('layouts.app')

@section('content')
    <div class="col-md-9">

        <h1>Edit Jenis Sampah</h1>

        <form method="POST" action="{{ route('jenis-sampah.update', $jenisSampah->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $jenisSampah->nama }}"
                    required>
            </div>

            <div class="form-group">
                <label for="harga_per_kilogram">Harga per Kilogram</label>
                <input type="number" step="0.01" name="harga_per_kilogram" id="harga_per_kilogram" class="form-control"
                    value="{{ $jenisSampah->harga_per_kilogram }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
