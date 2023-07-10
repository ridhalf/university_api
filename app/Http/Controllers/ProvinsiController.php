<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    public function getAllProvinsi()
    {
        $provinsi = Provinsi::select('id', 'nama')->where('status', 1)->get();
        return response()->json($provinsi);
    }
}
