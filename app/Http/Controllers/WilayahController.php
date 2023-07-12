<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function getAllProvinsi()
    {
        $provinsi = Provinsi::select('id', 'nama')->where('status', 1)->get();
        return response()->json($provinsi);
    }
    public function getKotaById($provinsi_id)
    {
        $provinsi_id = trim($provinsi_id);
        $kota = Kota::select('id', 'nama')->where('provinsi_id', $provinsi_id)->get();
        return response()->json($kota);
    }
}
