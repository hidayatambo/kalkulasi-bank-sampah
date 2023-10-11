<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Transaction;
use App\Models\JenisSampah; // Pastikan Anda telah membuat model JenisSampah

class KalkulatorBankSampahController extends Controller
{
    public function index()
    {
        $jenisSampahList = JenisSampah::all();
        return view('kalkulator.index', ['jenisSampahList' => $jenisSampahList]);
    }

    public function calculate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_sampah' => 'required|exists:jenis_sampah,id',
            'jumlah_sampah' => 'required|numeric|min:0',
        ], [
            'numeric' => 'The :attribute field must be a number.',
            'min' => 'The :attribute field must be at least :min.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('kalkulator')->withErrors($validator)->withInput();
        }
    
        $jenisSampah = JenisSampah::find($request->jenis_sampah);
        $hargaPerKilogram = $jenisSampah->harga_per_kilogram;
        $totalHarga = $hargaPerKilogram * $request->jumlah_sampah;
    
        return view('kalkulator.result', [
            'jenisSampah' => $jenisSampah,
            'jumlahSampah' => $request->jumlah_sampah,
            'totalHarga' => $totalHarga,
        ]);
    }
    
    public function showDashboard()
    {
        $transactions = Transaction::with('jenisSampah')->get();

    // Menghitung tren sampah terbanyak berdasarkan jenis sampah
        $trendData = $transactions->groupBy('jenis_sampah.nama')->map->count();

        return view('dashboard.index', compact('trendData'));

    }
}
