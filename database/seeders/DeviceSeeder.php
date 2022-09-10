<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;
class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::create([
            'nama' => 'UMKT Samarinda',
            'alamat' => 'JUANDA',
            'gol' => 'P1',
            'm_cutOff' => 33098,
            'lat' =>'-0.47478415147483966',
            'lang'=> '117.13897029901707',
        ]);
    }
}
