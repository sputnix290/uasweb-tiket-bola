<?php

namespace App\Http\Controllers;

use App\Models\PesanTiketFutsal;
use App\Models\TiketFutsal;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PesanTiketFutsalController extends Controller
{
    public function index(){
        $data = PesanTiketFutsal::get(); 
        return view('Administrator/PesanTiketFutsals/PesanTiketFutsal', compact('data'));
        // $data = PesanTiketFutsal::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/PesanTiketFutsals/PesanTiketFutsal', compact('data'));
    }

    public function add(){
        $data_tiketfutsal = TiketFutsal::get();
        $data_pengguna = Pengguna::get();
        return view('Administrator/PesanTiketFutsals/addPesanTiketFutsal', compact('data_tiketfutsal', 'data_pengguna'));
    }

    public function insertdata(Request $request){
        PesanTiketFutsal::create($request->all());
        return redirect()->route('PesanTiketFutsal')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = PesanTiketFutsal::find($id);
        $data_tiketfutsal = TiketFutsal::get();
        $data_pengguna = Pengguna::get();
        return view('Administrator/PesanTiketFutsals/updatePesanTiketFutsal' , compact('data', 'data_tiketfutsal', 'data_pengguna'));
    }

    public function alldata($id){
        $data = PesanTiketFutsal::find($id);
        $data_tiketfutsal = TiketFutsal::get();
        $data_pengguna = Pengguna::get();
        return view('Administrator/PesanTiketFutsals/allPesanTiketFutsal' , compact('data', 'data_tiketfutsal', 'data_pengguna'));
    }

    public function updatedata(Request $request, $id){
        $data = PesanTiketFutsal::find($id);
        $data->update($request->all());
        return redirect()->route('PesanTiketFutsal')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = PesanTiketFutsal::find($id);
        $data->delete();
        return redirect()->route('PesanTiketFutsal')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = PesanTiketFutsal::all();
        $PDF = PDF::loadView('Administrator/PesanTiketFutsals/reportPesanTiketFutsal', array('data' => $data));
        return $PDF->stream('data-pesan-tiket-futsal.pdf');
    }
}
