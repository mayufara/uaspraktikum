<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('formlogin');
    }

    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }
    
    public function formuser()
    {
        return view('formuser');
    }

    public function cari (Request $request)
    {
        $cari = $request->cari;
        $user = User::where('nik_user', 'like', '%'.$cari.'%')->orWhere('nama_user', 'like', '%'.$cari.'%')->paginate(5);
        return view ('user', ['user' => $user]);
    }

    public function saveuser(Request $request)
    {
        $user = User::create([
            'nik_user' => $request -> nik_user,
            'nama_user' => $request -> nama_user,
            'no_hp' => $request -> no_hp,
            'email' => $request -> email,
            'password' => md5 ($request -> password)
        ]);
        return redirect('/user');
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view ('edituser', ['user' => $user]); 
    }

    public function simpanuser($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/user');
    }

    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }

    public function ceklogin (Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/login');
        }
        else
        {
            return redirect('/mahasiswa');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('alert-logout','Anda Telah Berhasil Logout');
    }
}