<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemperatureMonitoring extends Model
{
    protected $table = 'temperatures';

    protected $fillable = ['cercius', 'time_int', 'device_id'];
}
