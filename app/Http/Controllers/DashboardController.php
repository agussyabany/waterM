<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bar;
use App\Models\Device;


class DashboardController extends Controller
{
    public function index()
    {
        $wm = bar::select('kubikasi','flow','nama','alamat','gol','m_cutOff')->join('device','device.id_dev', '=' , 'water_meter.id_dev')->orderByDesc('id')->limit(1)->get();
         return view('dashboard.dashboard', compact('wm'));
    }

    public function data()
    {
        
    }
}
