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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexAdmin(Request $request)
    {
        $data = Booking::where('status', '=', 'success');
        if($request->start_date != '' && $request->end_date != ''){
            $data = $data->whereBetween('created_at', [$request->start_date, $request->end_date])->get();
        } else if($request->end_date != ''){
            $data = $data->where('created_at', '<=', $request->end_date)->get();
        } else if($request->start_date != ''){
            $data = $data->where('created_at', '>=', $request->start_date)->get();
        } else {
            $data = $data->get();
        }
        
        $data_pending = Booking::where('status', '=', 'pending')->get();
        $total_pendapatan = 0;
        $jumlah_pendaki = 0;
        // $data_diterima = count($data);
        foreach($data as $d){
            $jumlah_pendaki += $d->jumlah_pendaki;
        }
        foreach($data as $d){
            $total_pendapatan += $d->nominal;
        }
        $jumlah_booking = count($data);

        return view('admin.home',[
            'data_pending' => count($data_pending),
            'total_pendapatan' => $total_pendapatan,
            'jumlah_booking' => $jumlah_booking,
            'jumlah_pendaki' => $jumlah_pendaki
        ]);
    }
}
