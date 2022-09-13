<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bar;
use App\Models\Device;
use Faker\Core\Number;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $request->time_awal;

        $wm = bar::select('kubikasi','flow','nama','alamat','gol','m_cutOff')->join('device','device.id_dev', '=' , 'water_meter.id_dev')->orderByDesc('id')->limit(1)->get();


        $akhir = DB::table('water_meter')->max('id');

        $awal = $akhir -  4 ;
        
        $tanggal = DB::table("water_meter")
        ->select("created_at")
        ->where("id", ">=", $awal)
        ->where("id", "<=", $akhir)
        ->orderBy("id","asc")
        ->get();
        
        $flow = DB::table("water_meter")
        ->select("flow")
        ->where("id", ">=", $awal)
        ->where("id", "<=", $akhir)
        ->orderBy("id","asc")
        ->get();

        // $liter = bar::select('kubikasi')->orderByDesc('id')->limit(2)->get();

        // $tmp = $liter[0]->kubikasi - $liter[1]->kubikasi;
        // return $tmp;
        


        // foreach ($liter as $key => $value) 
        // {
        //          $data = $value->kubikasi. ' ';
        //          $kubik = explode(' ', $data);
        //          //echo $pakai[0] . '<br>' . $pakai[1];
        //          $pakai  =  $kubik[0]  -  $kubik[1]  ;
        //          return $pakai;
        //  }

         return view('dashboard.dashboard', compact('tanggal','flow','wm'));
    }

}
