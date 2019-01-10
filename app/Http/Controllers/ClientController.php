<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function form(Request $request)
    {
        $id = $request->get('id');
        if($id == null)
        {
            $client = new Client();
        }
        else
        {
            $client = Client::findOrFail($id);
        }
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->mobile_no = $request->mobile_no;
        $client->dob = $request->dob;
        $client->address = $request->address;
        $client->city = $request->city;
        $client->state = $request->state;
        $client->pincode = $request->pincode;
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
        $client->diet_plan = $request->diet_plan;
        $client->save();
    }
}
