<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class RegisterAdminController extends Controller
{
    public function registeradmin(Request $request)
    {
        $request->validate([
            'nama_admin' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:30', 'unique:'.Admin::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:50'],
            'password' => ['required', 'string', 'max:225', 'min:8'],
        ]);

        $admin = Admin::create([
            'nama_admin' => $request->nama_admin,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'jabatan' => 'Administrator',
        ]);
        
        return redirect()->route('login')->with('success', 'Terima kasih sudah mendaftar');
    }
    public function showRegistrationForm()
    {
        return view('registeradmin');
    }
}
