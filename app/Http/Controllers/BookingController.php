<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kuota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }

    public function tampil()
    {
        $history = Booking::where('user_id', '=', Auth::user()->id)->where('status', '=', 'pending')->get();
        dd($history);
        return view('tampil')->with('history', $history);
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
        'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // Tambahkan validasi input lainnya sesuai kebutuhan
    ]);

    // Proses pembayaran
    // ...

    // Simpan bukti pembayaran ke storage
    $bukti_pembayaran = $request->file('bukti_pembayaran');
    $path = $bukti_pembayaran->store('bukti_pembayaran', 'public');

    // Simpan path bukti pembayaran dalam database atau variabel lainnya
    $booking->bukti_pembayaran = $path;
    $booking->status =  'pending';
    $booking->save();

    // ...

    return redirect()->route('booking.history', $booking->id)->with('success', 'Pembayaran berhasil');
}


    public function store(Request $request){
    $nama = $request->input('nama');
    $tanggal_berangkat = $request->input('tanggal_berangkat');
    $tanggal_pulang = $request->input('tanggal_pulang');
    $jumlah_pendaki = $request->input('jumlah_pendaki');

    // Validasi kuota tersedia
    $kuotaTersedia = Kuota::whereBetween('tanggal', [$tanggal_berangkat, $tanggal_pulang])->sum('kuota');
    if ($kuotaTersedia < $jumlah_pendaki) {
        return redirect('/booking')->with('error', 'Kuota tidak mencukupi');
    }

    $nominal = $jumlah_pendaki * 15000;

    // Membuat booking baru
    $booking = new Booking();
    $booking->nama = $nama;
    $booking->tanggal_berangkat = $tanggal_berangkat;
    $booking->tanggal_pulang = $tanggal_pulang;
    $booking->jumlah_pendaki = $jumlah_pendaki;
    $booking->nominal = $nominal;
    $booking->user_id = Auth::user()->id;
    $booking->save();

    // Mengurangi kuota yang tersedia
    $kuotas = Kuota::whereBetween('tanggal', [$tanggal_berangkat, $tanggal_pulang])->get();
    foreach ($kuotas as $kuota) {
        $kuota->kuota -= $jumlah_pendaki;
        $kuota->save();
    }
    return redirect()->route('booking.payment', ['booking_id' => $booking->id])->with('success', 'Booking berhasil');

    }

    public function getHistory(){
        $history = Booking::where('user_id', '=', Auth::user()->id)->get();
        return view('history', [
            'history' => $history
        ]);
    }

    public function dataBooking(){
        $data = Booking::where('status', '=', 'pending')->get();
        return view('admin.booking', ['data' => $data]);
    }

    public function terima($id){
        $data = Booking::find($id);
        $data->status = 'success';
        $data->save();
        return redirect('/data_booking');
    }

    public function tolak($id){
        $data = Booking::find($id);
        $data->status = 'failed';
        $data->save();
        return redirect('/data_booking');
    }

    public function success(){
        $data = Booking::where('status', '=', 'success')->paginate(5);
        $total = 0;
        foreach($data as $d){
            $total += $d->nominal;
        }
        return view('admin.success', ['data' => $data, 'total' => $total]);
    }

    public function failed(){
        $data = Booking::where('status', '=', 'failed')->paginate(5);
        return view('admin.failed', ['data' => $data]);
    }
}