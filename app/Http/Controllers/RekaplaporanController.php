<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekap_lap;

class RekaplaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  rekap()
    {
        $arr['rekap'] = rekap::all();
        return view (rekap_lap.rekap_lap)->with($arr);
    }


    public function rekap_lap()
    {
        return view('rekap_lap.rekap_lap');
    }
    public function rekap_lap01()
    {
        return view('rekap_lap.rekap_lap01');
    }
}
