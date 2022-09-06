<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bar extends Model
{
    protected $table = 'bar';
    protected $primaryKey = 'id';
    use HasFactory;
}
