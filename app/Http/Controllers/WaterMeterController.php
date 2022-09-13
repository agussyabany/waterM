<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaterMeter;
use App\Models\MeterLog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class WaterMeterController extends Controller
{
    public function store(Request $request){
        try{
            DB::beginTransaction();

            $lastKubikasi = null; //for contain last kubikasi

            $wm = $request->query('wm', 0);
            $flow = $request->query('flow', 0);

            if($wm === 0 && $flow === 0){
                return response('Invalid parameters', 500)->header('Content-Type', 'text/plain');
            }                  
            
            // ambil data pencatat meter pada device dan data terakhir dari hari ini
            $lastDataKubikasi = WaterMeter::whereDate('created_at',Carbon::today())
                             ->where('id_dev',1)// temporary as hardcode please reconsider this
                             ->orderBy('created_at','desc')
                             ->limit(1)
                             ->get();

            
            // jika ditemukan maka set ke variable lastKubikasi untuk di gunakan dalam save di mater_log
            if(!empty($lastDataKubikasi)){
                $lastKubikasi = $lastDataKubikasi[0]->kubikasi;                
            }

            // array data untuk save ke tabel water meter
            $dataSave=[
                'flow'=> $flow,
                'kubikasi' => $wm,
                'id_dev' => 1
            ];

            // eksekusi simpan ke  tabel water meter dan ambil id simpannya
            $idsaved = WaterMeter::create($dataSave)->id;

            // eksekusi simpan ke meter_log (menyimpan per bedaan antara log yang akan baru disimpan dan data sebelumnnya)
            if(!empty($idsaved)){
                
                // array data untuk save ke tabel meter_log
                $dataSaveMeterlog=[
                    'id_device'=> 1, // temporary as hardcode please reconsider this
                    'id_water_meter_log' => $idsaved,                    
                ];
                
                //  kondisi jika tidak ditemukan data kubikasi terkahir maka di buat 0
                // jika di temukan maka data baru di kurang data kubikasi terakhir
                if(!empty($lastKubikasi)){
                    $dataSaveMeterlog['diff_kubikasi'] = $wm - $lastKubikasi;
                }else{
                    $dataSaveMeterlog['diff_kubikasi'] = $wm - $lastKubikasi;
                }               

                MeterLog::create($dataSaveMeterlog);
            }
            DB::commit();
            return response('Data Success Saved', 200)->header('Content-Type', 'text/plain');
        }catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }
            abort(500);
        }
    }

    public function get_diff(Request $request){

            $limit = $request->query('limit', 0);
            // ambil data pencatat meter pada device dan data terakhir dari hari ini
            $lastMeterLog = MeterLog::whereDate('created_at',Carbon::today())
            ->where('id_device',1)// temporary as hardcode please reconsider this
            ->orderBy('created_at','desc')
            ->limit($limit)
            ->get();

            return $lastMeterLog;
    }
}
