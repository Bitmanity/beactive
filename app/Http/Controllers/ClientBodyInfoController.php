<?php

namespace App\Http\Controllers;

use App\ClientBodyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class ClientBodyInfoController extends Controller
{
    public static function form(Request $request,$client_id)
    {
        $id = $request->get('id');
        $user = Auth::user();
        if($id)
        {
            $id = $request->get('client_body_info_id');
            $client_body_info = ClientBodyInfo::findOrFail($id);
        }
        else {
            $client_body_info = new ClientBodyInfo();
            $client_body_info->created_by = $user->id;
        }
        $client_body_info->client_id = $client_id;
        $client_body_info->height = $request->get('height');
        $client_body_info->weight = $request->get('weight');
        $client_body_info->fat = $request->get('fat');
        $client_body_info->bmi = $request->get('bmi');
        $client_body_info->bmr = $request->get('bmr');
        $client_body_info->v_fat = $request->get('v_fat');
        $client_body_info->energy = $request->get('energy');
        $client_body_info->body_sub_fat = $request->get('body_sub_fat');
        $client_body_info->body_ske_muscle = $request->get('body_ske_muscle');
        $client_body_info->arm_sub_fat = $request->get('arm_sub_fat');
        $client_body_info->arm_ske_muscle = $request->get('arm_ske_muscle');
        $client_body_info->trun_sub_fat	 = $request->get('trun_sub_fat	');
        $client_body_info->trun_ske_muscle = $request->get('trun_ske_muscle');
        $client_body_info->leg_sub_fat = $request->get('leg_sub_fat');
        $client_body_info->trun_ske_muscle = $request->get('trun_ske_muscle');
        $client_body_info->leg_ske_muscle = $request->get('leg_ske_muscle');
        $client_body_info->updated_by = $user->id;
        try{

            $client_body_info->save();
        }
        catch (Exception $e)
        {

        }
        return;
    }
    public function show($id)
    {
        $query = ClientBodyInfo::where('client_id',$id)->get();

    }
}
