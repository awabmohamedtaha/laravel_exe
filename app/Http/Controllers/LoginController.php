<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
   public function LoginPage(){
    session()->forget('userid');
    session()->forget('username');
    session()->forget('admin');
       return view("login");
   }

   public function LoginEnter(Request $request){
    
    if($request->username == 'amas' && $request->password == 'amas'){
        session()->put('admin','admin');
        return redirect("ControlPanelHome");
    }else{
        $hashedPassword = Hash::make($request->password);
        $username = DB::select('select * from userss where Marketed_hwya=? and Marketed_state=?',[$request->username,'نشط']);
        if(count($username) > 0){
        $select_password = DB::select('select * from userss where Marketed_hwya=? and Marketed_state=?',[$request->username,'نشط']);
        foreach($select_password as $selected_password){
            $hash_password = $selected_password->Marketed_password;
            $plain_password = $request->password;
            if(Hash::check($plain_password,$hash_password)){
    session()->put('userid',$selected_password->Id);
    session()->put('username',$selected_password->Marketed_name);
    return redirect('/Home');
            }else{
                session()->flash('worng_password','تأكد من ادخال المعلومات الصحيحة');
                return back();
            }
        }
        }else{
            session()->flash('worng_hwya','تأكد من إدخال المعلومات الصحيحة');
            return back();
        }
    }

    
   }
}
