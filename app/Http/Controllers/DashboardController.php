<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bar;


class DashboardController extends Controller
{
    public function index()
    {
         
         $wm = bar::select('wm')->orderByDesc('id')->limit(1)->get();
            foreach ($wm as $key => $value) {
                $liter = $value->wm;
            }
         $kubik = $liter / 1000;
         return view('dashboard.dashboard', compact('kubik'));
    }

    public function data()
    {
        
    }
}
