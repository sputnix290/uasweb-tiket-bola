<?php

namespace App\Http\Controllers;

use App\Models\PesanTiketSepakBola;
use App\Models\TiketSepakBola;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PesanTiketSepakBolaController extends Controller
{
    public function index(){
        $data = PesanTiketSepakBola::get(); 
        return view('Administrator/PesanTiketSepakBolas/PesanTiketSepakBola', compact('data'));
        // $data = PesanTiketSepakBola::where('id', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/PesanTiketSepakBolas/PesanTiketSepakBola', compact('data'));
    }

    public function add(){
        $data_tiketsepakbola = TiketSepakBola::get();
        $data_pengguna = Pengguna::get();
        return view('Administrator/PesanTiketSepakBolas/addPesanTiketSepakBola', compact('data_tiketsepakbola', 'data_pengguna'));
    }

    public function insertdata(Request $request){
        PesanTiketSepakBola::create($request->all());
        return redirect()->route('PesanTiketSepakBola')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = PesanTiketSepakBola::find($id);
        $data_tiketsepakbola = TiketSepakBola::get();
        $data_pengguna = Pengguna::get();
        return view('Administrator/PesanTiketSepakBolas/updatePesanTiketSepakBola' , compact('data', 'data_tiketsepakbola', 'data_pengguna'));
    }

    public function alldata($id){
        $data = PesanTiketSepakBola::find($id);
        $data_tiketsepakbola = TiketSepakBola::get();
        $data_pengguna = Pengguna::get();
        return view('Administrator/PesanTiketSepakBolas/allPesanTiketSepakBola' , compact('data', 'data_tiketsepakbola', 'data_pengguna'));
    }

    public function updatedata(Request $request, $id){
        $data = PesanTiketSepakBola::find($id);
        $data->update($request->all());
        return redirect()->route('PesanTiketSepakBola')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = PesanTiketSepakBola::find($id);
        $data->delete();
        return redirect()->route('PesanTiketSepakBola')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = PesanTiketSepakBola::all();
        $PDF = PDF::loadView('Administrator/PesanTiketSepakBolas/reportPesanTiketSepakBola', array('data' => $data));
        return $PDF->stream('data-pesan-tiket-sepak-bola.pdf');
    }
}
