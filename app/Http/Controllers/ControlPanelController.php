<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControlPanelController extends Controller
{

    public function loginControlPanel(){
        session()->forget('admin');
        return view("loginControlPanel");
    }
    
    public function loginControlPanelEnter(Request $request){
        if($request->username == 'amas' && $request->password == 'amas'){
            session()->put('admin','admin');
            return redirect("ControlPanelHome");
        }else{
            session()->forget('admin');
            session()->flash('worng','تأكد من إدخال المعلومات الصحيحة');
            return redirect()->back();
        }
        
    }

    public function HomePage(){
        if(session()->has('admin'))
    {
        return view("ControlHome");
    }else{
        return redirect("Marketer");
    }
    }
    
    public function OrderMangement(){
        if(session()->has('admin')){
        $Count_New_Order = DB::table('orders')->where('state','=','جديد')->orderBy('id', 'DESC')->get();
        $Count_Wite_Order = DB::table('orders')->where('state','=','مُعلق')->orderBy('id', 'DESC')->get();
        $Count_Proccess_Order = DB::table('orders')->where('state','=','تحت الدراسة')->orderBy('id', 'DESC')->get();
        $Count_Done_Order = DB::table('orders')->where('state','=','مكتمل')->orderBy('id', 'DESC')->get();
        return view("ControlOrderMangement",[
            'Count_New_Order'=>count($Count_New_Order),
            'Count_Wite_Order'=>count($Count_Wite_Order),
            'Count_Proccess_Order'=>count($Count_Proccess_Order),
            'Count_Done_Order'=>count($Count_Done_Order)
    ]);
}else{
    return redirect("Marketer");
}
    }
    
    public function ControlAlertShow(){
        if(session()->has('admin')){
        $select = DB::table('alerts')->orderBy('id', 'DESC')->get();
        return view("ControlAlertShowing",['select'=>$select]);
        }else{
            return redirect("Marketer");
        }
    }
    public function ControlAlertSend(){
        if(session()->has('admin')){
        return view("ControlAlertSend");
        }else{
            return redirect("Marketer");
        }
    }

    public function AlertSend(Request $request){
        if(session()->has('admin')){
            $select = DB::table('userss')->orderBy('id', 'DESC')->get();
foreach($select as $selected){
    $save = DB::table('alerts')->insert(
        ['id_amel' => $selected->Id,
         'name_amel' => $selected->Marketed_name,
         'memo' => $request->memo,
         'date_created' => date('Y-m-d'),
         'state' => '0'
         ]
    );
}
        session()->flash('Save','تم الإرسال بنجاح');
        return redirect("ControlAlertShow");
        }else{
            return redirect("Marketer");
        }
    }
    
    public function AlertDelete(Request $request){
        if(session()->has('admin')){
$delete = DB::table('alerts')->where('id',$request->id)->delete();
if($delete){
    session()->flash('delete','تم حذف الإشعار بنجاح');
    return redirect()->back();
}else{
    return redirect("/Marketer");
}
        }
    }


    public function OrderNew(){
        if(session()->has('admin')){
        $select = DB::table('orders')->where('state','=','جديد')->orderBy('id', 'DESC')->get();
        return view("ControlOrderNew",['select'=>$select]);
        }else{
            return redirect("Marketer");
        }
    }
    public function OrderًWite(){
        if(session()->has('admin')){
        $select = DB::table('orders')->join('sendorder','orders.id','=','sendorder.orderid')->where('orders.state','=','مُعلق')->orderBy('orders.id', 'DESC')->get();
        return view("ControlOrderWaiting",['select'=>$select]);
        }else{
            return redirect("Marketer");
        }
    }
    public function OrderًProccess(){
        if(session()->has('admin')){
        $select = DB::table('orders')->join('sendorder','orders.id','=','sendorder.orderid')->join('reviveorder','orders.id','=','reviveorder.orderid')->where('orders.state','=','تحت الدراسة')->orderBy('orders.id', 'DESC')->get();
        return view("ControlOrderProccessShow",['select'=>$select]);
        }else{
            return redirect("Marketer");
        }
    }
    public function OrderDone(){
        if(session()->has('admin')){
        $select = DB::table('orders')->join('sendorder','orders.id','=','sendorder.orderid')->where('orders.state','=','مكتمل')->orderBy('orders.id', 'DESC')->get();
        return view("ControlOrderDone",['select'=>$select]);
        }else{
            return redirect("Marketer");
        }
    }
    public function ClientShow(){
        if(session()->has('admin')){
        $select = DB::table('userss')->orderBy('id', 'DESC')->get();
        return view("ControlClients",['select'=>$select]);
        }else{
            return redirect("Marketer");
        }
    }
    
    public function OrderProccessShow($id){
        if(session()->has('admin')){
        $select = DB::table('orders')->where('id','=',$id)->get();
        return view("ControlOrderProccess")->with('select',$select);
        }else{
            return redirect("Marketer");
        }
    }
    
    public function ControlBlanceShow(){
        if(session()->has('admin')){
            return view("ControlBlanceShow");
        }else{
            return redirect("Marketer");
        }
    }
    
   
    public function OrderProccessNewSave(Request $request){
        if(session()->has('admin')){
        if($request->sendfile){
            $this->validate($request,
            [
    
                    
                    'sendfile' => 'required|mimetypes:application/pdf|max:5000'
                   
                  
                ],
            
           [
            
            'sendfile.mimetypes'=>'يجب ان يكون امتداد المرفق : (pdf)',
            'sendfile.max'=>'يجب أن لايزيد حجم المرفق عن 5 ميغابايت'
        
           ]
    
            );
        }
        if($request->sendfile){
                        $filename = time().request()->sendfile->getClientOriginalName();
                        request()->sendfile->move(public_path('sendfile'), $filename);
        }else{
            $filename=NULL;
        }
        $save = DB::table('sendorder')->insert(
            ['orderid' => $request->orderid,
             'sendtext' => $request->sendtext,
             'sendfile' => $filename,
             'state' => $request->state,
             ]
        );
        $update= DB::table('orders')->where('id','=',$request->orderid)->update([
            'state' => $request->state
        ]);

        session()->flash('Save','تمت معالجة الطلب بنجاح');
        return redirect('/ControlOrderMangement');
        }else{
            return redirect("Marketer");
        }
    }

    public function OrderProccessWite(Request $request){
        if(session()->has('admin')){
        return view("ControlOrderProccess2")->with('orderid',$request->orderid);
        }else{
            return redirect("Marketer");
        }
    }
    
    public function OrderProccessWiteSave(Request $request){
        if(session()->has('admin')){
        if($request->sendfile){
            $this->validate($request,
            [
    
                    
                    'sendfile' => 'required|mimetypes:application/pdf|max:5000'
                   
                  
                ],
            
           [
            
            'sendfile.mimetypes'=>'يجب ان يكون امتداد المرفق : (pdf)',
            'sendfile.max'=>'يجب أن لايزيد حجم المرفق عن 5 ميغابايت'
        
           ]
    
            );
        }
        if($request->sendfile){
            $filename = time().request()->sendfile->getClientOriginalName();
            request()->sendfile->move(public_path('sendfile'), $filename);
        }else{
            $filename=NULL;
        }
        $update = DB::table('sendorder')->where('orderid','=',$request->orderid)->update(
            ['orderid' => $request->orderid,
             'sendtext' => $request->sendtext,
             'sendfile' => $filename,
             'state' => $request->state,
             ]
        );
        $update= DB::table('orders')->where('id','=',$request->orderid)->update([
            'state' => $request->state
        ]);
        $delete= DB::table('reviveorder')->where('orderid','=',$request->orderid)->delete();

        session()->flash('Save','تمت معالجة الطلب بنجاح');
        return redirect('/ControlOrderMangement');
    
    }else{
        return redirect("Marketer");
    }
}
}
