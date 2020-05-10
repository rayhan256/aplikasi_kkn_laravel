<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {

    public function index() {
        return view('Admin.admin_dashboard');
    }

    public function read_mahasiswa() {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('Admin.data_mahasiswa',['mahasiswa' => $mahasiswa]);
    }

    public function update_mahasiswa_v($id) {
        $mahasiswa = DB::table('mahasiswa')->where('id_mhs', $id)->get();
        return view('Admin.update_mahasiswa_v', ['mahasiswa' => $mahasiswa]);
    }

    public function update_mahasiswa(Request $request) {
        $mahasiswa = [
            'nim' => $request->get('nim'),
            'nama' => $request->get('nama'),
            'prodi' => $request->get('prodi'),
            'umur' => $request->get('umur'),
            'alamat' => $request->get('alamat'),
            'id_kelompok' => $request->get('id_kelompok')
        ];

        DB::table('mahasiswa')->where('id_mhs', $request->id_mhs)->update($mahasiswa);
        return redirect('/Admin/Mahasiswa');
    }
}