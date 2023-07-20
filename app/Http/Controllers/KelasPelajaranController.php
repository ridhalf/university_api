<?php

namespace App\Http\Controllers;

use App\Models\KelasPelajaran;
use App\Models\Mahasiswa;
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
                'getAllMataPelajaranByKelasId',
                'getAllMahasiswaByKelasId'
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
    public function getAllMahasiswaByKelasId(Request $request)
    {
        $kelas_id = trim($request->kelas_id);
        $mahasiswa = Mahasiswa::select(
            'mahasiswa.nama as nama_mahasiswa',
            'mahasiswa.email as email',
            'mahasiswa.tanggal_lahir',
            'mahasiswa.jenis_kelamin',
            'provinsi.nama as nama_provinsi',
            'kota.nama as nama_kota'
        )->join('provinsi', 'provinsi.id', '=', 'mahasiswa.provinsi_id')
            ->join('kota', 'kota.id', '=', 'mahasiswa.kota_id')
            ->where('kelas_id', $kelas_id)->get();

        if (count($mahasiswa) > 0) {
            return $this->respondSuccess($mahasiswa);
        } else {
            return $this->respondError('Belum ada data mahasiswa', 200, 'OK');
        }
    }
}
