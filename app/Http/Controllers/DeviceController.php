<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index ()
    {
        $device = Device::get();
        return view('device.index', compact('device'));
    }
}
