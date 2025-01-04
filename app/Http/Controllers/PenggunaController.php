<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PenggunaController extends Controller
{
    public function index(){
        $data = Pengguna::get(); 
        return view('Administrator/Penggunas/Pengguna', compact('data'));
        // $data = Pengguna::where('nama_pengguna', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/Penggunas/Pengguna', compact('data'));
    }

    public function add(){
        return view('Administrator/Penggunas/addPengguna');
    }

    public function insertdata(Request $request){
        $request->validate([
            'nama_pengguna' => 'required',
            'username' => 'required|unique:penggunas',
            'email' => 'required|email', 
            'password' => 'required|min:8',
            'no_telp' => 'required',
        ]);

        $data = Pengguna::create([
            'nama_pengguna' => $request->nama_pengguna,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_telp' => $request->no_telp,
        ]);
        return redirect()->route('Pengguna')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = Pengguna::find($id);
        return view('Administrator/Penggunas/updatePengguna' , compact('data'));
    }

    public function alldata($id){
        $data = Pengguna::find($id);
        return view('Administrator/Penggunas/allPengguna' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Pengguna::find($id);
        $request->validate([
            'nama_pengguna' => 'required',
            'username' => 'required|unique:penggunas',
            'email' => 'required',
            // 'password' => 'required',
            'no_telp' => 'required',
        ]);

        $data -> update([
            'nama_pengguna' => $request->nama_pengguna,
            'username' => $request->username,
            'email' => $request->email,
            // 'password' => $request->password,
            'no_telp' => $request->no_telp,
        ]);
        return redirect()->route('Pengguna')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Pengguna::find($id);
        $data->delete();
        return redirect()->route('Pengguna')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = Pengguna::all();
        $PDF = PDF::loadView('Administrator/Penggunas/reportPengguna', array('data' => $data));
        return $PDF->stream('data-pengguna.pdf');
    }
}
