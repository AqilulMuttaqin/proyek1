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

    public function tampil()
    {
        $booking = Booking::all();
        return view('tampil', [
            'bkg' => $booking
        ]);
    }

    public function create(){
        return view('booking');
    }

    public function payment($booking_id)
{
    // Temukan booking berdasarkan ID
    $booking = Booking::findOrFail($booking_id);

    // Tampilkan halaman pembayaran dengan detail booking
    return view('payment', compact('booking'));
}

public function processPayment(Request $request, $booking_id)
{
    // Temukan booking berdasarkan ID
    $booking = Booking::findOrFail($booking_id);

    // Validasi input pembayaran
    $request->validate([
        'payment_method' => 'required',
        // Tambahkan validasi input lainnya sesuai kebutuhan
    ]);

    // Proses pembayaran
    // ...
    // Lakukan logika pemrosesan pembayaran sesuai dengan metode pembayaran yang dipilih
    // ...

    // Simpan status pembayaran pada booking
    $booking->payment_status = true;
    $booking->save();

    return redirect()->route('booking.tampil')->with('success', 'Pembayaran berhasil');
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

    $total_amount = $jumlah_pendaki * 15000;

    // Membuat booking baru
    $booking = new Booking();
    $booking->nama = $nama;
    $booking->tanggal_berangkat = $tanggal_berangkat;
    $booking->tanggal_pulang = $tanggal_pulang;
    $booking->jumlah_pendaki = $jumlah_pendaki;
    $booking->total_amount = $total_amount;
    $booking->save();

    // Mengurangi kuota yang tersedia
    $kuotas = Kuota::whereBetween('tanggal', [$tanggal_berangkat, $tanggal_pulang])->get();
    foreach ($kuotas as $kuota) {
        $kuota->kuota -= $jumlah_pendaki;
        $kuota->save();
    }

    return redirect()->route('booking.payment', ['booking_id' => $booking->id])->with('success', 'Booking berhasil');

    }
}
