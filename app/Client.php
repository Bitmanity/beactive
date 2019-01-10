<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = Carbon::createFromFormat('d/m/Y',$value);
    }
}
