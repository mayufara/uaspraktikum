<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Dosen;
class DosenController extends Controller
{
    public function dosen()
    {
        $dosen = Dosen::paginate(10);
        return view ('dosen', ['dosen' => $dosen]);
    }
    
    public function pencarian (Request $request)
    {
        $cari = $request->cari;
        $dosen = Dosen::where('nidn', 'like', '%'.$cari.'%')->orWhere('nama', 'like', '%'.$cari.'%')->paginate();
        return view ('dosen', ['dosen' => $dosen]);
    }
    public function formulirDosen ()
    {
        return view('formulirDosen');
    }
    public function save (Request $request){
        $pakar = implode(",", $request->get('pakar'));
        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $pakar
        ]);
        return redirect("/dosen");
    }

    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view ('editdosen', ['dosen' => $dosen]);
        
    }

    public function simpandosen($id, Request $request)
    {
        $pakar= implode(',', $request->pakar);
        $dosen = Dosen::find($id);
        $dosen->nidn= $request->nim;
        $dosen->nama = $request->nama;
        $dosen->status = $request->status;
        $dosen->jafung = $request->jafung;
        $dosen->pakar = $pakar;
        $dosen->save();
        return redirect('/dosen');
    }

    public function hapus($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/dosen');
    }
}
