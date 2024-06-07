<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class SessionController extends Controller
{
    // Menampilkan halaman login
    public function index(){
        return view("sesi.index");
    }

    // Proses login
    public function login(Request $request){
        // Menyimpan email yang diinput ke session sementara
        session()->flash('email', $request->email);

        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukkan Email yang valid',
            'password.required' => 'Password wajib diisi',
        ]);

        // Informasi login
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Mencoba untuk login
        if(Auth::attempt($infologin)) {
            return redirect()->route('admin')->with('success', 'Berhasil Login');
        } else {
            return redirect()->route('sesi.index')->withErrors('Username dan password yang dimasukkan tidak valid');
        }
    }

    // Proses logout
    public function logout() {
        Auth::logout();
        return redirect()->route('sesi.index')->with('success', 'Berhasil Logout');
    }

    // Menampilkan halaman register
    public function register() {
        return view('sesi.register');
    }

    // Proses registrasi
    public function create(Request $request) {
        // Menyimpan nama dan email yang diinput ke session sementara
        session()->flash('name', $request->name);
        session()->flash('email', $request->email);

        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukkan Email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, Silahkan masukkan Email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
        ]);

        // Membuat data user baru
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        // Informasi login untuk user baru
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Mencoba untuk login dengan user baru
        if(Auth::attempt($infologin)) {
            return redirect()->route('sesi.index')->with('success', 'Berhasil Register');
        } else {
            return redirect()->route('sesi.register')->with('error', 'Username dan password yang dimasukkan tidak valid');
        }
    }
}
