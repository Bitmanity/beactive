<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function data(Request $request)
    {
        $data = collect();
        $data->entries_count = count(Client::all());
        
        dd($data);
    }

    public function query()
    {
        $query = DB::table('clients as c')
            ->leftJoin('food_time as f', 'c.id', 'f.client_id');

        return $query;
    }

}
