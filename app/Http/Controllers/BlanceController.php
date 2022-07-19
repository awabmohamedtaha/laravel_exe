<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlanceController extends Controller
{
    public function BlancePage(){
        if(session()->has('userid')){

        $Count_New_Alert = DB::select('select * from alerts where id_amel=? and state=?',[session()->get('userid'),'0']);
        return view("Blance",['Count_New_Alert'=>count($Count_New_Alert)]);
        }else{
            return redirect("/Marketer");
        }
    }
}
