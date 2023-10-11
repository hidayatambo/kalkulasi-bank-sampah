@extends('layouts.appf')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Kalkulasi</div>
                    <div class="card-body">
                        <h1>Pilih Jenis Sampah</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    
                        <form method="post" action="{{ route('calculate') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="jenis_sampah" class="form-label">Jenis Sampah</label>
                                <select class="form-select" id="jenis_sampah" name="jenis_sampah">
                                    @foreach ($jenisSampahList as $jenisSampah)
                                        <option value="{{ $jenisSampah->id }}">{{ $jenisSampah->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_sampah" class="form-label">Jumlah Sampah (kg)</label>
                                <input type="number" class="form-control" id="jumlah_sampah" name="jumlah_sampah" placeholder="Jumlah Sampah (kg)">
                            </div>
                            <button type="submit" class="btn btn-primary">Hitung Harga</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
