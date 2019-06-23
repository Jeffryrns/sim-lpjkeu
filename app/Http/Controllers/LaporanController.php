<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function rekap_lap()
    {
        return view('rekap_laporan.lapform01');
    }

    public function lapform01()
    {
        return view('inputdata.lapform01');
    }

    public function lapform02()
    {
        return view('inputdata.lapform02');
    }

    public function lapform03()
    {
        return view('inputdata.lapform03');
    }

    public function lapform04()
    {
        return view('inputdata.lapform04');
    }

    public function lapform05()
    {
        return view('inputdata.lapform05');
    }
    
    public function lapform06()
    {
        return view('inputdata.lapform06');
    }

    public function lapform07()
    {
        return view('inputdata.lapform07');
    }

    public function lapform08()
    {
        return view('inputdata.lapform08');
    }

    public function lapform09()
    {
        return view('inputdata.lapform09');
    }

    public function lapform10()
    {
        return view('inputdata.lapform10');
    }
}
