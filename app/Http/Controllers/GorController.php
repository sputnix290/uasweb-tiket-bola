<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class GorController extends Controller
{
    public function index(){
        $data = Gor::get(); 
        return view('Administrator/Gors/Gor', compact('data'));
        // $data = Gor::where('nama_gor', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/Gors/Gor', compact('data'));
    }

    public function add(){
        return view('Administrator/Gors/addGor');
    }

    public function insertdata(Request $request){
        $request->validate([
            'nama_gor' => 'required|unique:gors',
            'lokasi_gor' => 'required',
            'kapasitas_gor' => 'required',
        ]);

        $data = Gor::create([
            'nama_gor' => $request->nama_gor,
            'lokasi_gor' => $request->lokasi_gor,
            'kapasitas_gor' => $request->kapasitas_gor,
        ]);
        return redirect()->route('Gor')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = Gor::find($id);
        return view('Administrator/Gors/updateGor' , compact('data'));
    }

    public function alldata($id){
        $data = Gor::find($id);
        return view('Administrator/Gors/allGor' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Gor::find($id);
        $request->validate([
            'nama_gor' => 'required|unique:gors',
            'lokasi_gor' => 'required',
            'kapasitas_gor' => 'required',
        ]);

        $data -> update([
            'nama_gor' => $request->nama_gor,
            'lokasi_gor' => $request->lokasi_gor,
            'kapasitas_gor' => $request->kapasitas_gor,
        ]);
        return redirect()->route('Gor')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Gor::find($id);
        $data->delete();
        return redirect()->route('Gor')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = Gor::all();
        $PDF = PDF::loadView('Administrator/Gors/reportGor', array('data' => $data));
        return $PDF->stream('data-gor.pdf');
    }
}
