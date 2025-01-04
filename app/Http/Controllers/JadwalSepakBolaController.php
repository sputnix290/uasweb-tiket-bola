<?php

namespace App\Http\Controllers;

use App\Models\TimHome;
use App\Models\TimAway;
use App\Models\Kompetisi;
use App\Models\Stadion;
use App\Models\JadwalSepakBola;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class JadwalSepakBolaController extends Controller
{
    public function index(){
        $data = JadwalSepakBola::get(); 
        return view('Administrator/JadwalSepakBolas/JadwalSepakBola', compact('data'));
        // $data = JadwalSepakBola::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/JadwalSepakBolas/JadwalSepakBola', compact('data'));
    }

    public function add(){
        $data_timhome = TimHome::get();
        $data_timaway = TimAway::get();
        $data_kompetisi = Kompetisi::get();
        $data_stadion = Stadion::get();
        return view('Administrator/JadwalSepakBolas/addJadwalSepakBola', compact('data_timhome', 'data_timaway', 'data_kompetisi', 'data_stadion'));
    }

    public function insertdata(Request $request){
        JadwalSepakBola::create($request->all());
        return redirect()->route('JadwalSepakBola')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = JadwalSepakBola::find($id);
        $data_timhome = TimHome::get();
        $data_timaway = TimAway::get();
        $data_kompetisi = Kompetisi::get();
        $data_stadion = Stadion::get();
        return view('Administrator/JadwalSepakBolas/updateJadwalSepakBola' , compact('data', 'data_timhome', 'data_timaway', 'data_kompetisi', 'data_stadion'));
    }

    public function alldata($id){
        $data = JadwalSepakBola::find($id);
        $data_timhome = TimHome::get();
        $data_timaway = TimAway::get();
        $data_kompetisi = Kompetisi::get();
        $data_stadion = Stadion::get();
        return view('Administrator/JadwalSepakBolas/allJadwalSepakBola' , compact('data', 'data_timhome', 'data_timaway', 'data_kompetisi', 'data_stadion'));
    }

    public function updatedata(Request $request, $id){
        $data = JadwalSepakBola::find($id);
        $data->update($request->all());
        return redirect()->route('JadwalSepakBola')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = JadwalSepakBola::find($id);
        $data->delete();
        return redirect()->route('JadwalSepakBola')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = JadwalSepakBola::all();
        $PDF = PDF::loadView('Administrator/JadwalSepakBolas/reportJadwalSepakBola', array('data' => $data));
        return $PDF->stream('data-jadwal-sepak-bola.pdf');
    }
}
