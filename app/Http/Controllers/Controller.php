<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pengguna;
use App\Models\TimHome;
use App\Models\TimAway;
use App\Models\Kompetisi;
use App\Models\Stadion;
use App\Models\Gor;
use App\Models\TiketSepakBola;
use App\Models\TiketFutsal;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function dashboard()
    {
        $data_admin = Admin::get()->count();
        $data_pengguna = Pengguna::get()->count();
        $data_timhome = TimHome::get()->count();
        $data_timaway = TimAway::get()->count();
        $data_kompetisi = Kompetisi::get()->count();
        $data_stadion = Stadion::get()->count();
        $data_gor = Gor::get()->count();
        $data_tiketsepakbola = TiketSepakBola::get()->count();
        $data_tiketfutsal = TiketFutsal::get()->count();
        return view('dashboard', compact( 'data_admin', 'data_pengguna', 'data_timhome', 'data_timaway', 'data_kompetisi','data_stadion','data_gor', 'data_tiketsepakbola', 'data_tiketfutsal'));
    }
}
