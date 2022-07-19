<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeeController extends Controller
{
    public function HomePage(){
        if(session()->has('userid')){
            
            $Count_New_Alert = DB::select('select * from alerts where id_amel=? and state=?',[session()->get('userid'),'0']);
            return view("Home",['Count_New_Alert'=>count($Count_New_Alert)]);

        }else{
            return redirect("/Marketer");
        }
    }
}
