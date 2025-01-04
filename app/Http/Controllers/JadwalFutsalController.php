<?php

namespace App\Http\Controllers;

use App\Models\TimHome;
use App\Models\TimAway;
use App\Models\Kompetisi;
use App\Models\Gor;
use App\Models\JadwalFutsal;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class JadwalFutsalController extends Controller
{
    public function index(){
        $data = JadwalFutsal::get(); 
        return view('Administrator/JadwalFutsals/JadwalFutsal', compact('data'));
        // $data = JadwalFutsal::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/JadwalFutsals/JadwalFutsal', compact('data'));
    }

    public function add(){
        $data_timhome = TimHome::get();
        $data_timaway = TimAway::get();
        $data_kompetisi = Kompetisi::get();
        $data_gor = Gor::get();
        return view('Administrator/JadwalFutsals/addJadwalFutsal', compact('data_timhome', 'data_timaway', 'data_kompetisi', 'data_gor'));
    }

    public function insertdata(Request $request){
        JadwalFutsal::create($request->all());
        return redirect()->route('JadwalFutsal')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = JadwalFutsal::find($id);
        $data_timhome = TimHome::get();
        $data_timaway = TimAway::get();
        $data_kompetisi = Kompetisi::get();
        $data_gor = Gor::get();
        return view('Administrator/JadwalFutsals/updateJadwalFutsal' , compact('data', 'data_timhome', 'data_timaway', 'data_kompetisi', 'data_gor'));
    }

    public function alldata($id){
        $data = JadwalFutsal::find($id);
        $data_timhome = TimHome::get();
        $data_timaway = TimAway::get();
        $data_kompetisi = Kompetisi::get();
        $data_gor = Gor::get();
        return view('Administrator/JadwalFutsals/allJadwalFutsal' , compact('data', 'data_timhome', 'data_timaway', 'data_kompetisi', 'data_gor'));
    }

    public function updatedata(Request $request, $id){
        $data = JadwalFutsal::find($id);
        $data->update($request->all());
        return redirect()->route('JadwalFutsal')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = JadwalFutsal::find($id);
        $data->delete();
        return redirect()->route('JadwalFutsal')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = JadwalFutsal::all();
        $PDF = PDF::loadView('Administrator/JadwalFutsals/reportJadwalFutsal', array('data' => $data));
        return $PDF->stream('data-jadwal-sepak-bola.pdf');
    }
}
