<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = DB::select('select * from mahasiswa');
        return view('mahasiswa', ['data' => $data]);
    }
    public function showNilai($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('mahasiswa_id', $id)->first();

        $nilai = DB::table('nilai_mahasiswa') // ← ganti dari 'nilai' ke 'nilai_mahasiswa'
            ->join('matkul', 'nilai_mahasiswa.matkul_id', '=', 'matkul.matkul_id')
            ->where('nilai_mahasiswa.mahasiswa_id', $id)
            ->select('matkul.nama', 'matkul.sks', 'nilai_mahasiswa.nilai')
            ->get();

        return view('nilai', compact('mahasiswa', 'nilai'));
    }
}