@extends('layouts.appf')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Hasil Perhitungan</div>
                    <div class="card-body">
                        <h2>Detail Transaksi Sampah</h2>
                        <p>Jenis Sampah: {{ $jenisSampah->nama }}</p>
                        <p>Jumlah Sampah (kg): {{ $jumlahSampah }}</p>
                        <p>Harga per Kilogram: {{ $jenisSampah->harga_per_kilogram }}</p>
                        <p>Total Harga: {{ $totalHarga }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
