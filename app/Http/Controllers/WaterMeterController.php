<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaterMeter;
use Illuminate\Support\Facades\DB;

class WaterMeterController extends Controller
{
    public function store(Request $request){
        try{
            DB::beginTransaction();

            $wm = $request->query('wm', 0);
            $flow = $request->query('flow', 0);

            if($wm === 0 && $flow === 0){
                return response('Invalid parameters', 500)->header('Content-Type', 'text/plain');
            }

            $dataSave=[
                'flow'=> $flow,
                'kubikasi' => $wm,
                'id_dev' => 1
            ];

            WaterMeter::create($dataSave);

            DB::commit();
            return response('Data Success Saved', 200)->header('Content-Type', 'text/plain');
        }catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }
            abort(500);
        }
    }
}
