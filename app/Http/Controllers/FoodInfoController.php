<?php

namespace App\Http\Controllers;

use App\FoodTime;
use Illuminate\Http\Request;

class FoodInfoController extends Controller
{
    public static function form(Request $request,$id)
    {
        $client = new FoodTime();
        $client->breakfast = $request->breakfast;
        $client->breakfast_time = $request->breakfast_time;
        $client->lunch = $request->lunch;
        $client->lunch_time = $request->lunch_time;
        $client->snacks = $request->snacks;
        $client->snacks_time = $request->snacks_time;
        $client->dinner = $request->dinner;
        $client->dinner_time = $request->dinner_time;
        $client->most_hungry_time = $request->most_hungry_time;
        $client->most_tired_time = $request->most_tired_time;
        $client->favourite_food = $request->favourite_food;
        $client->favourite_snacks = $request->favourite_snacks;
        $client->water_intake = $request->water_intake;
    }
}
