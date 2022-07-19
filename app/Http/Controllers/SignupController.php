<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class SignupController extends Controller
{
    public function SignupPage(){
        return view("Signup");
    }
    
    public function SignupSave(Request $request){
        $check = DB::table('userss')->where('Marketed_hwya','=',$request->hwya)->get();
        if(count($check) > 0){
            session()->flash('false','اسم الدخول مستخدم من قِبل احد العملاء ، الرجاء تغيير اسم الدخول');
            return redirect()->back();
        }else{
            if ($request->password <> $request->repassword){
                session()->flash('repassword','كلمة المرور غير متطابقة');
                return redirect()->back();
            }else{
                $hashedPassword = Hash::make($request->password);
                $save = DB::table('userss')->insert(
                    ['Marketed_name' => $request->name,
                     'Marketed_hwya' => $request->hwya,
                     'Marketed_phone' => $request->phone,
                     'Marketed_password' => $hashedPassword,
                     'Marketed_address' => $request->Marketedaddress,
                     'Marketed_bankNum' => $request->MarketedbankNum,
                     'Marketed_bankName' => $request->MarketedbankName,
                     'Marketed_state' => $request->state
                     ]
                );
        
                session()->flash('Save','تم إضافة العميل بنجاح');
                return redirect('/ControlClients');
            }
        }
        
        
    }

    public function SignupEditPage($id){
        $select = DB::table('userss')->where('Id','=',$id)->get();
        return view("SignupEdit",['select'=>$select]);
    }
    public function SignupEdit(Request $request){
        
           
                $edit = DB::table('userss')->where('Id','=',$request->id)->update(
                    ['Marketed_name' => $request->name,
                     'Marketed_phone' => $request->phone,
                     'Marketed_address' => $request->Marketedaddress,
                     'Marketed_bankNum' => $request->MarketedbankNum,
                     'Marketed_bankName' => $request->MarketedbankName,
                     'Marketed_state' => $request->state
                     ]
                );
        
                session()->flash('Save','تم حفظ التغييرات بنجاح');
                return redirect('/ControlClients');
         
    
    }

    public function SignupPasswordEdit(Request $request){
        
    $check = DB::table('userss')->where('Marketed_hwya','=',$request->hwya)->where('Id','<>',$request->id)->get();    
if(count($check) > 0){
    session()->flash('false','اسم الدخول مستخدم من قِبل احد العملاء ، الرجاء تغيير اسم الدخول');
    return redirect()->back();
}else{
    $hashedPassword = Hash::make($request->password);
    $edit = DB::table('userss')->where('Id','=',$request->id)->update(
        ['Marketed_hwya' => $request->hwya,
         'Marketed_password' => $hashedPassword
         ]
    );

    session()->flash('Save','تم حفظ التغييرات بنجاح');
    return redirect('/ControlClients');
}
 

}
    
}
