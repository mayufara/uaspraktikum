<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mahasiswa;
class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::paginate(10);
        return view ('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    
    public function pencarian (Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nim', 'like', '%'.$cari.'%')->orWhere('nama', 'like', '%'.$cari.'%')->paginate();
        return view ('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function formulirMhs ()
    {
        return view('formulirMhs');
    }
    public function save (Request $request){
        $bid_minat = implode(",", $request->get('bid_minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bid_minat' => $bid_minat
        ]);
        return redirect("/mahasiswa");
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view ('editmhs', ['mahasiswa' => $mahasiswa]);
        
    }

    public function simpanmhs($id, Request $request)
    {
        $bid_minat= implode(',', $request->bid_minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bid_minat = $bid_minat;
        $mahasiswa->save();
        return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
