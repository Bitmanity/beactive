<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ClientBodyInfo extends Model
{
    protected $table = 'body_info';

    public function getDateTakenAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d',$value)->format('d/m/Y');
    }
}
