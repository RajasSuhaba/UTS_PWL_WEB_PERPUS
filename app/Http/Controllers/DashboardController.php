<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
class DashboardController extends Controller
{
    public function index()
    {

        $setting = Setting::where('key', 'app_name')->first();
        $appName = $setting ? $setting->value : 'Default App Name';

        $totalBuku = Buku::count();
        $totalAnggota = User::where('role', 'anggota')->count(); // kalau pakai role
        $peminjamanAktif = Peminjaman::whereNull('tanggal_kembali')->count();

        return view('dashboard', compact('totalBuku', 'totalAnggota', 'peminjamanAktif'));
    }
}
