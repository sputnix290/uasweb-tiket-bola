<?php

namespace App\Http\Controllers;

use App\Models\TimAway;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TimAwayController extends Controller
{
    public function index(){
        $data = TimAway::get(); 
        return view('Administrator/TimAways/TimAway', compact('data'));
        // $data = TimAway::where('nama_tim_away', 'LIKE', '%'.request()->search.'%')->get();
        // return view('Administrator/TimAways/TimAway', compact('data'));
    }

    public function add(){
        return view('Administrator/TimAways/addTimAway');
    }

    public function insertdata(Request $request){
        TimAway::create($request->all());
        return redirect()->route('TimAway')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = TimAway::find($id);
        return view('Administrator/TimAways/updateTimAway' , compact('data'));
    }

    public function alldata($id){
        $data = TimAway::find($id);
        return view('Administrator/TimAways/allTimAway' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = TimAway::find($id);
        $data->update($request->all());
        return redirect()->route('TimAway')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = TimAway::find($id);
        $data->delete();
        return redirect()->route('TimAway')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = TimAway::all();
        $PDF = PDF::loadView('Administrator/TimAways/reportTimAway', array('data' => $data));
        return $PDF->stream('data-tim-away.pdf');
    }
}
