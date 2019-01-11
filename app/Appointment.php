<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    public function setAppDateAttribute($value)
    {
        $this->attributes['app_date'] = Carbon::createFromFormat('d/m/Y',$value);
    }
    public function setAppTimeAttribute($value)
    {
        $this->attributes['app_time'] = Carbon::createFromFormat('h:i A',$value);
    }
}
