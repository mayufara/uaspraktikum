<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class MahasiswaAPIController extends Controller
{
    public function all()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Ditampilkan',
            'data'=> $mhs]);
    }

    public function create(Request $request)
    {
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan/prodi' => $request->jurusan/prodi,
            'bid_minat' => $request->bid_minat
        ]);

        if ($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Disimpan',
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan',
            ], 401);
        }

    }
    public function update(Request $request)
    {
        $mhs = Mahasiswa::whereId($request-> id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'status' => $request->status,
            'prodi' => $request->prodi,
            'Gender' => $request->Gender
        ]);
        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Disimpan',
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan',
            ], 401);
        }
    }
    public function delete($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        if($mhs){
            return response()->json([
                'success' => true,
                'message' => 'Data  BERHASIL Dihapus',
            ], 200);

        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data  GAGAL Dihapus',
            ], 400);
        }
        
    }
}



