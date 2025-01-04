<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function index(){
        $data = Admin::get(); 
        return view('Administrator/Admins/Admin', compact('data'));
        // $data = Admin::where('nama_admin', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/Admins/Admin', compact('data'));
    }

    public function add(){
        return view('Administrator/Admins/addAdmin');
    }

    public function insertdata(Request $request){
        
        // Validasi input
        $request->validate([
            'nama_admin' => 'required',
            'username' => 'required|unique:admins',
            'email' => 'required|email', 
            'password' => 'required|min:8',
        ]);

        // Buat data admin baru dengan password yang di-hash menggunakan Bcrypt
        $data = Admin::create([
            'nama_admin' => $request->nama_admin,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'jabatan' => 'Administrator',
        ]);
            return redirect()->route('Admin')->with('primary', 'Data Berhasil Ditambahkan!');
        // Admin::create($request->all());
        // return redirect()->route('Admin')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = Admin::find($id);
        return view('Administrator/Admins/updateAdmin' , compact('data'));
    }

    public function alldata($id){
        $data = Admin::find($id);
        return view('Administrator/Admins/allAdmin' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Admin::find($id);
        $request->validate([
            'nama_admin' => 'required',
            'username' => 'required|unique:admins',
            'email' => 'required',
            // 'password' => 'required',
        ]);

        $data -> update([
            'nama_admin' => $request->nama_admin,
            'username' => $request->username,
            'email' => $request->email,
            // 'password' => $request->password,
        ]);
        return redirect()->route('Admin')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Admin::find($id);
        $data->delete();
        return redirect()->route('Admin')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = Admin::all();
        $PDF = PDF::loadView('Administrator/Admins/reportAdmin', array('data' => $data));
        return $PDF->stream('data-admin.pdf');
    }
}
