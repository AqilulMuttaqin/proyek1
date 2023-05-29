<?php

namespace App\Http\Controllers;

use App\Models\Kuota;
use Illuminate\Http\Request;

class KuotaController extends Controller
{
    public function cekKuota(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $kuotas = Kuota::whereBetween('tanggal', [$start_date, $end_date])->get();

        return view('cek-kuota', compact('kuotas'));
    }
}
