<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bar;
use App\Models\Device;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index()
    {
        // $wm = bar::select('kubikasi','flow','nama','alamat','gol','m_cutOff')->join('device','device.id_dev', '=' , 'water_meter.id_dev')->orderByDesc('id')->limit(1)->get();
        //  return view('dashboard.dashboard', compact('wm'));

        $tanggal = DB::table("water_meter")
        ->select("created_at")
        ->orderBy("id","asc")
        ->limit(5)
        ->get();

        
            
                    


        $vol = DB::table("water_meter")
        ->select("kubikasi")
        ->orderBy("id","asc")
        ->limit(5)
        ->get();
        

        
        
        
        return view('dashboard.dashboard', compact('tanggal','vol'));
    }

//     SELECT COUNT(*) AS count,MONTHNAME(created_at) AS month_name FROM `water_meter` WHERE YEAR(`created_at`) = 2022 GROUP BYMONTH(created_at);

    public function data()
    {
        
    }
}
