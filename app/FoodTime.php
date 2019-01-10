<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class FoodTime extends Model
{
    protected $table = 'food_time';

    public function setBreakfastTimeAttribute($value)
    {
        $this->attributes['breakfast_time'] = Carbon::createFromFormat('h:i A',$value);
    }
    public function setLunchTimeAttribute($value)
    {
        $this->attributes['lunch_time'] = Carbon::createFromFormat('h:i A',$value);
    }
    public function setSnacksTimeAttribute($value)
    {
        $this->attributes['snacks_time'] =  Carbon::createFromFormat('h:i A',$value);
    }
    public function setDinnerTimeAttribute($value)
    {
        $this->attributes['dinner_time'] = Carbon::createFromFormat('h:i A',$value);
    }
    public function setHungryTimeAttribute($value)
    {
        $this->attributes['hungry_time'] = Carbon::createFromFormat('h:i A',$value);
    }
    public function setTiredTimeAttribute($value)
    {
        $this->attributes['tired_time'] = Carbon::createFromFormat('h:i A',$value);
    }
}
