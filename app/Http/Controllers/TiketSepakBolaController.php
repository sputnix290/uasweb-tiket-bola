<?php

namespace App\Http\Controllers;

use App\Models\TiketSepakBola;
use App\Models\JadwalSepakBola;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TiketSepakBolaController extends Controller
{
    public function index(){
        $data = TiketSepakBola::get(); 
        return view('Administrator/TiketSepakBolas/TiketSepakBola', compact('data'));
        // $data = TiketSepakBola::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/TiketSepakBolas/TiketSepakBola', compact('data'));
    }

    public function add(){
        $data_jadwalsepakbola = JadwalSepakBola::get();
        return view('Administrator/TiketSepakBolas/addTiketSepakBola', compact('data_jadwalsepakbola'));
    }

    public function insertdata(Request $request){
        TiketSepakBola::create($request->all());
        return redirect()->route('TiketSepakBola')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = TiketSepakBola::find($id);
        $data_jadwalsepakbola = JadwalSepakBola::get();
        return view('Administrator/TiketSepakBolas/updateTiketSepakBola' , compact('data', 'data_jadwalsepakbola'));
    }

    public function alldata($id){
        $data = TiketSepakBola::find($id);
        $data_jadwalsepakbola = JadwalSepakBola::get();
        return view('Administrator/TiketSepakBolas/allTiketSepakBola' , compact('data', 'data_jadwalsepakbola'));
    }

    public function updatedata(Request $request, $id){
        $data = TiketSepakBola::find($id);
        $data->update($request->all());
        return redirect()->route('TiketSepakBola')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = TiketSepakBola::find($id);
        $data->delete();
        return redirect()->route('TiketSepakBola')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = TiketSepakBola::all();
        $PDF = PDF::loadView('Administrator/TiketSepakBolas/reportTiketSepakBola', array('data' => $data));
        return $PDF->stream('data-tiket-sepak-bola.pdf');
    }
}
