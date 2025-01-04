<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class RegisterPenggunaController extends Controller
{
    public function registerpengguna(Request $request)
    {
        $request->validate([
            'nama_pengguna' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:30', 'unique:'.Pengguna::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:50'],
            'password' => ['required', 'string', 'max:225'],
            'no_telp' => ['required', 'string', 'max:14'],
        ]);

        $pengguna = Pengguna::create([
            'nama_pengguna' => $request->nama_pengguna,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_telp' => $request->no_telp,
        ]);
        
        return redirect()->route('registerpengguna')->with('success', 'Terima kasih sudah mendaftar');
    }
    public function showRegistrationForm()
    {
        return view('registerpengguna');
    }
}