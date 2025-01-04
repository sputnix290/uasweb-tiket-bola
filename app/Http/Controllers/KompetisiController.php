<?php

namespace App\Http\Controllers;

use App\Models\Kompetisi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class KompetisiController extends Controller
{
    public function index(){
        $data = Kompetisi::get(); 
        return view('Administrator/Kompetisis/Kompetisi', compact('data'));
        // $data = Kompetisi::where('nama_kompetisi', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/Kompetisis/Kompetisi', compact('data'));
    }

    public function add(){
        return view('Administrator/Kompetisis/addKompetisi');
    }

    public function insertdata(Request $request){
        Kompetisi::create($request->all());
        return redirect()->route('Kompetisi')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = Kompetisi::find($id);
        return view('Administrator/Kompetisis/updateKompetisi' , compact('data'));
    }

    public function alldata($id){
        $data = Kompetisi::find($id);
        return view('Administrator/Kompetisis/allKompetisi' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Kompetisi::find($id);
        $data->update($request->all());
        return redirect()->route('Kompetisi')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Kompetisi::find($id);
        $data->delete();
        return redirect()->route('Kompetisi')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = Kompetisi::all();
        $PDF = PDF::loadView('Administrator/Kompetisis/reportKompetisi', array('data' => $data));
        return $PDF->stream('data-kompetisi.pdf');
    }
}
