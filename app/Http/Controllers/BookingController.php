<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kuota;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }

    public function create(){
        return view('booking');
    }

    public function store(Request $request){
    $nama = $request->input('nama');
    $tanggal_berangkat = $request->input('tanggal_berangkat');
    $tanggal_pulang = $request->input('tanggal_pulang');
    $jumlah_pendaki = $request->input('jumlah_pendaki');

    // Validasi kuota tersedia
    $kuotaTersedia = Kuota::whereBetween('tanggal', [$tanggal_berangkat, $tanggal_pulang])->sum('kuota');
    if ($kuotaTersedia < $jumlah_pendaki) {
        return redirect()->back()->with('error', 'Kuota tidak mencukupi');
    }

    // Membuat booking baru
    $booking = new Booking();
    $booking->nama = $nama;
    $booking->tanggal_berangkat = $tanggal_berangkat;
    $booking->tanggal_pulang = $tanggal_pulang;
    $booking->jumlah_pendaki = $jumlah_pendaki;
    $booking->save();

    // Mengurangi kuota yang tersedia
    $kuotas = Kuota::whereBetween('tanggal', [$tanggal_berangkat, $tanggal_pulang])->get();
    foreach ($kuotas as $kuota) {
        $kuota->kuota -= $jumlah_pendaki;
        $kuota->save();
    }

        return redirect()->route('booking.create')->with('success', 'Booking berhasil');
    }
}
