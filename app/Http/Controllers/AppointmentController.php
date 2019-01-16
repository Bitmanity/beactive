<?php

namespace App\Http\Controllers;

use App\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function list()
    {
        $data = $this->query()->orderBy('a.app_date','asc')->get();
        foreach ($data as $datum)
        {
            if ($datum->app_date)
            {
                $datum->app_date = Carbon::createFromFormat('Y-m-d',$datum->app_date)->format('d/m/Y');
            }
            if ($datum->app_time)
            {
                $datum->app_time = Carbon::parse($datum->app_time)->format('H:i A');
            }
        }
        return json_encode($data);
    }
    public function query()
    {
        $query = DB::table('clients as c')
            ->leftJoin('appointments as a','a.client_id','c.id')
            ->select('c.id','c.first_name','c.last_name','c.mobile','c.email')
            ->addSelect('a.app_date','a.app_time','a.id as app_id')
            ->where('a.is_done','No');
        return $query;

    }
    public function mark_done($id)
    {
        $app = Appointment::findOrfail($id);
        $app->is_done = 'Yes';
        $app->appointment_status = 'Done';
        $app->save();
        return redirect()->back()->with(['success'=>'Appointment Updated Successfully']);
    }
    public function mark_cancelled($id)
    {
        $app = Appointment::findOrfail($id);
        $app->is_done = 'Yes';
        $app->appointment_status = 'Cancelled';
        $app->save();
        return redirect()->back()->with(['success'=>'Appointment Updated Successfully']);
    }
}
