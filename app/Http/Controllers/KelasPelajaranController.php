<?php

namespace App\Http\Controllers;

use App\Models\KelasPelajaran;
use Illuminate\Http\Request;

class KelasPelajaranController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('kelas', [
            'only' => [
                'getAllMataPelajaranByKelasId' // Could add bunch of more methods too
            ]
        ]);
    }
    public function getAllMataPelajaranByKelasId(Request $request)
    {
        $kelas_id = trim($request->kelas_id);
        $mata_pelajaran = KelasPelajaran::select('mata_pelajaran.id', 'mata_pelajaran.nama')
            ->join('mata_pelajaran', 'mata_pelajaran.id', '=', 'kelas_pelajaran.mata_pelajaran_id')
            ->where('kelas_id', $kelas_id)
            ->get();
        return $this->respondSuccess($mata_pelajaran);
    }
}
