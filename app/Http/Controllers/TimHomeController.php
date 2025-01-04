<?php

namespace App\Http\Controllers;

use App\Models\TimHome;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TimHomeController extends Controller
{
    public function index(){
        $data = TimHome::get(); 
        return view('Administrator/TimHomes/TimHome', compact('data'));
        // $data = TimHome::where('nama_tim_home', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/TimHomes/TimHome', compact('data'));
    }

    public function add(){
        return view('Administrator/TimHomes/addTimHome');
    }

    public function insertdata(Request $request){
        TimHome::create($request->all());
        return redirect()->route('TimHome')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = TimHome::find($id);
        return view('Administrator/TimHomes/updateTimHome' , compact('data'));
    }

    public function alldata($id){
        $data = TimHome::find($id);
        return view('Administrator/TimHomes/allTimHome' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = TimHome::find($id);
        $data->update($request->all());
        return redirect()->route('TimHome')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = TimHome::find($id);
        $data->delete();
        return redirect()->route('TimHome')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = TimHome::all();
        $PDF = PDF::loadView('Administrator/TimHomes/reportTimHome', array('data' => $data));
        return $PDF->stream('data-tim-home.pdf');
    }
}
