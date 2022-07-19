<?php

namespace App\Http\Controllers;

use App\Models\tack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TackitControoler extends Controller
{

    public function tackit (){

        if (Auth::check()) {
      return view('tackit');

        }else{

      return redirect(route('login'));
        }



    /*    if (Session::has('user_login')) {
            return view('tackit');
        } else {
            echo "not";
        }*/







    }

    public function tackit_up (Request $request){


$taket = DB::table('tacks')->insert([

    'namee' => $request->namee,

    'email'=> $request->email,
    'userid'=> $request->userid,
    'tybe'=> 0,
    'servesses'=> $request->servesses,
    'phone'=> $request->phone,
    'created_at' => now()


]);

session()->flash('status','تم فتح التذكرة بنجاح');
       return redirect(route('tackit_view'));

    }



    public function tackit_view( Request $request){


        if (Auth::check()) {
       $idusers = auth::User()->id;

        $tackit = DB::select('SELECT * FROM tacks WHERE userid = ?',[$idusers]);


        return view('tackit_view')->with('tackit', $tackit);
    }else{

        return redirect(route('login'));
          }

    }
    public function delete ($id){

       $delete =  DB::delete('delete from tacks where id = ?',[$id]);
       return redirect()->back();
    }

}
 /*
*/
