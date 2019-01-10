<?php

namespace App\Http\Controllers;

use App\FoodTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class FoodInfoController extends Controller
{
    public static function form(Request $request, $client_id)
    {
        $id = $request->get('id');
        $user = Auth::user();
        if ($id) {
            $id = $request->get('client_body_info_id');
            $food_time = FoodTime::findOrFail($id);
        } else {
            $food_time = new FoodTime();
            $food_time->created_by = $user->id;
        }
        $food_time->client_id = $client_id;
        $food_time->breakfast = $request->breakfast;
        $food_time->breakfast_time = $request->breakfast_time;
        $food_time->lunch = $request->lunch;
        $food_time->lunch_time = $request->lunch_time;
        $food_time->snacks = $request->snacks;
        $food_time->snacks_time = $request->snacks_time;
        $food_time->dinner = $request->dinner;
        $food_time->dinner_time = $request->dinner_time;
        $food_time->hungry_time = $request->hungry_time;
        $food_time->tired_time = $request->tired_time;
        $food_time->food_type = $request->food_type;
        $food_time->fav_snacks = $request->fav_snacks;
        $food_time->water = $request->water;
        if ($request->is_smocking)
        {
            $food_time->is_smocking = $request->is_smocking;
        }
        if ($request->is_appetite)
        {
            $food_time->is_appetite = $request->is_appetite;
        }
        if ($request->is_digestion)
        {
            $food_time->is_digestion = $request->is_digestion;
        }
        if ($request->is_acidity)
        {
            $food_time->is_acidity = $request->is_acidity;
        }
        if ($request->is_medication)
        {
            $food_time->is_medication = $request->is_medication;
        }
        if ($request->is_high_bp)
        {
            $food_time->is_high_bp = $request->is_high_bp;
        }
        if ($request->is_low_bp)
        {
            $food_time->is_low_bp = $request->is_low_bp;
        }
        $food_time->updated_by = $user->id;
        try {
            $food_time->save();
        } catch (Exception $e) {
            dd($e);
        }
        return;
    }
}
