<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlertController extends Controller
{
    public function AlertPage(){
        if(session()->has('userid')){
            $select= DB::table('alerts')->where('id_amel','=',session()->get('userid'))->orderBy('id', 'DESC')->get();
            $update= DB::table('alerts')->where('id_amel','=',session()->get('userid'))->update([
                'state' => '1'
            ]);
            $Count_New_Alert = DB::select('select * from alerts where id_amel=? and state=?',[session()->get('userid'),'0']);
            return view("Alert",['select'=>$select,'Count_New_Alert'=>count($Count_New_Alert)]);
        }else{
            return redirect("/Marketer");
        }
    }
}
