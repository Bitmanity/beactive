<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function data(Request $request)
    {
        $data = collect();
        $data->entries_count = count(Client::all());
        $data->client_count = Client::where('client_type','Client')->get()->count();
        $data->app_count = count(Appointment::all());
        $data->week_app_count =  Appointment::whereBetween('app_date',[Carbon::today()->startOfWeek(),Carbon::today()->endOfWeek()])->count();
        $data->week_pending_app_count =  Appointment::whereBetween('app_date',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])
            ->where('is_done','No')
            ->count();
        $data->today_apps = $this->query()->whereBetween('a.app_date',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])
            ->where('is_done','No')->orderBy('a.app_date','asc')->get();
       return view('pages.index',compact('data'));
    }

    public function query()
    {
        $query = DB::table('clients as c')
            ->leftJoin('appointments as a', 'c.id', 'a.client_id')
            ->select('c.id as client_id','c.first_name','c.last_name')
            ->addSelect('a.app_time','a.id as appointment_id','a.app_date');

        return $query;
    }

}
