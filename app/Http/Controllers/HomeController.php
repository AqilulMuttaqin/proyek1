<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexAdmin()
    {
        $data = Booking::where('status', '=', 'success')->get();
        $data_all = Booking::all();
        $data_pending = Booking::where('status', '=', 'pending')->get();
        $total_pendapatan = 0;
        $data_diterima = count($data);
        foreach($data as $d){
            $total_pendapatan += $d->nominal;
        }
        $jumlah_booking = count($data_all);

        return view('admin.home',[
            'data_pending' => count($data_pending),
            'total_pendapatan' => $total_pendapatan,
            'jumlah_booking' => $jumlah_booking,
            'data_diterima' => $data_diterima
        ]);
    }
}
