<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function form(Request $request,$id)
    {
        $message = "Appointment Added Successfully";
        $user = Auth::user();
        $appointment = new Appointment();
        $appointment->client_id = $id;
        $appointment->app_date = $request->get('app_date');
        $appointment->app_time = $request->get('app_time');
        $appointment->remarks = $request->get('remarks');
        $appointment->remarks = $request->get('remarks');
        $appointment->created_by = $user->id;
        $appointment->updated_by = $user->id;
        $appointment->save();
        return back()->with(['success'=>$message]);
    }
}
