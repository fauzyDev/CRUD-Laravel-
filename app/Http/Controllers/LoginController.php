<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function daftar(Request $request)
    {
        $isidata = [
            'name'      =>$request->name,
            'email'     =>$request->email,
            'password'  =>bcrypt($request->password),
            'phone'     =>$request->phone,
            'alamat'    =>$request->alamat
        ];
        
        User::create($isidata);
        return redirect('/register')->with('informasi','Akun berhasil terdaftar!');
    }
    public function login(Request $request)
    {
        $cek=[
            'email'      => $request->email,
            'password'   => $request->password
        ];
        if(Auth::attempt($cek)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } else {
            return back()->with('loginerror', 'Email atau Password salah!');
        }
    }

    //menampilkan dashboard
    public function dashboard()
    {
        return view('dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    //menampilkan profil
    public function profil()
    {
        return view('profil', [
            'title' => 'Profil'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }
}
