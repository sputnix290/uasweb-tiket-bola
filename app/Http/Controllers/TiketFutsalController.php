<?php

namespace App\Http\Controllers;

use App\Models\TiketFutsal;
use App\Models\JadwalFutsal;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TiketFutsalController extends Controller
{
    public function index(){
        $data = TiketFutsal::get(); 
        return view('Administrator/TiketFutsals/TiketFutsal', compact('data'));
        // $data = TiketFutsal::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/TiketFutsals/TiketFutsal', compact('data'));
    }

    public function add(){
        $data_jadwalfutsal = JadwalFutsal::get();
        return view('Administrator/TiketFutsals/addTiketFutsal', compact('data_jadwalfutsal'));
    }

    public function insertdata(Request $request){
        TiketFutsal::create($request->all());
        return redirect()->route('TiketFutsal')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = TiketFutsal::find($id);
        $data_jadwalfutsal = JadwalFutsal::get();
        return view('Administrator/TiketFutsals/updateTiketFutsal' , compact('data', 'data_jadwalfutsal'));
    }

    public function alldata($id){
        $data = TiketFutsal::find($id);
        $data_jadwalfutsal = JadwalFutsal::get();
        return view('Administrator/TiketFutsals/allTiketFutsal' , compact('data', 'data_jadwalfutsal'));
    }

    public function updatedata(Request $request, $id){
        $data = TiketFutsal::find($id);
        $data->update($request->all());
        return redirect()->route('TiketFutsal')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = TiketFutsal::find($id);
        $data->delete();
        return redirect()->route('TiketFutsal')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = TiketFutsal::all();
        $PDF = PDF::loadView('Administrator/TiketFutsals/reportTiketFutsal', array('data' => $data));
        return $PDF->stream('data-tiket-futsal.pdf');
    }
}
