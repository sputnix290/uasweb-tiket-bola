<?php

namespace App\Http\Controllers;

use App\Models\Stadion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class StadionController extends Controller
{
    public function index(){
        $data = Stadion::get(); 
        return view('Administrator/Stadions/Stadion', compact('data'));
        // $data = Stadion::where('nama_stadion', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/Stadions/Stadion', compact('data'));
    }

    public function add(){
        return view('Administrator/Stadions/addStadion');
    }

    public function insertdata(Request $request){
        $request->validate([
            'nama_stadion' => 'required|unique:stadions',
            'lokasi_stadion' => 'required',
            'kapasitas_stadion' => 'required',
        ]);

        $data = Stadion::create([
            'nama_stadion' => $request->nama_stadion,
            'lokasi_stadion' => $request->lokasi_stadion,
            'kapasitas_stadion' => $request->kapasitas_stadion,
        ]);
        return redirect()->route('Stadion')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = Stadion::find($id);
        return view('Administrator/Stadions/updateStadion' , compact('data'));
    }

    public function alldata($id){
        $data = Stadion::find($id);
        return view('Administrator/Stadions/allStadion' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Stadion::find($id);
        $request->validate([
            'nama_stadion' => 'required|unique:stadions',
            'lokasi_stadion' => 'required',
            'kapasitas_stadion' => 'required',
        ]);

        $data -> update([
            'nama_stadion' => $request->nama_stadion,
            'lokasi_stadion' => $request->lokasi_stadion,
            'kapasitas_stadion' => $request->kapasitas_stadion,
        ]);
        return redirect()->route('Stadion')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Stadion::find($id);
        $data->delete();
        return redirect()->route('Stadion')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = Stadion::all();
        $PDF = PDF::loadView('Administrator/Stadions/reportStadion', array('data' => $data));
        return $PDF->stream('data-stadion.pdf');
    }
}
