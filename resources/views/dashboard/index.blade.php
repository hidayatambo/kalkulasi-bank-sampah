@extends('layouts.app')

@section('content')

        <div class="col-md-4">
            <!-- Kolom sebelah kiri - Informasi Transaksi Sampah, Status, Harga, dll. -->
            <div class="card">
                <div class="card-header">Informasi Transaksi</div>
                <div class="card-body">
                    <!-- Tambahkan informasi transaksi dan elemen lainnya di sini -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Kolom sebelah kanan - Grafik Tren Sampah Terbanyak -->
            <div class="card">
                <div class="card-header">Grafik Tren Sampah Terbanyak</div>
                <div class="card-body">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var trendData = @json($trendData); // Mengonversi data PHP menjadi JavaScript
        
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: Object.keys(trendData),
                    datasets: [{
                        label: 'Tren Sampah Terbanyak',
                        data: Object.values(trendData), // Data dari server
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        
        

@endsection
