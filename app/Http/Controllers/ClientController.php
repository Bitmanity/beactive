<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\ClientBodyInfo;
use App\FoodTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class ClientController extends Controller
{
    public function form(Request $request)
    {

        $id = $request->get('id');
        $user = Auth::user();
        if($id == null)
        {
            $client = new Client();
            $client->created_by = $user->id;
        }
        else
        {
            $client = Client::findOrFail($id);
        }
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->mobile = $request->mobile;
        $client->dob = $request->dob;
        $client->address = $request->address;
        $client->city = $request->city;
        $client->state = $request->state;
        $client->zipcode = $request->zipcode;
        $client->working_hours = $request->working_hours;
        $client->time_to_call = $request->time_to_call;
        $client->is_exercising = $request->is_exercising;
        $client->exercises = $request->exercises;
        $client->body_checkup = $request->body_checkup;
        $client->total = $request->total;
        $client->advance = $request->advance;
        $client->balance = $request->balance;
        $client->diet_schedule = $request->diet_schedule;
        $client->updated_by = $user->id;
        try{

            $client->save();
            ClientBodyInfoController::form($request,$client->id);
            FoodInfoController::form($request,$client->id);
        }
        catch (Exception $exception)
        {
            dd($exception);
        }
        return view('pages.add_client',['message'=>'Data Inserted Successfully']);
    }

    public function list(Request $request)
    {
        $query = Client::all();
        return json_encode($query);
    }

    public function show(Request $request,$id)
    {
        $data = collect();
        $data->client = Client::findOrFail($id);
        $data->foodInfo = FoodTime::where('client_id',$id)->first();
        $data->app = Appointment::where('client_id',$id)->get();
        return view('pages.client_detail',compact('data'));
    }

    public function update_health($id)
    {
        $client = Client::findOrFail($id);
        return view('pages.health_update',compact('client'));
    }
    public function edit($id)
    {
        $data = collect();
        $client = Client::findOrFail($id);
        $foodInfo = FoodTime::where('client_id',$id)->first();
        $data->client = $client;
        $data->food = $foodInfo;
        return view('pages.edit_client_details',compact('data'));
    }
}
