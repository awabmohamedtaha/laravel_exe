<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class OrderController extends Controller
{
    public function OrderPage(){
        if(session()->has('userid')){

        $Count_New_Alert = DB::select('select * from alerts where id_amel=? and state=?',[session()->get('userid'),'0']);
        return view("Order",['Count_New_Alert'=>count($Count_New_Alert)]);
        }else{
            return redirect("/Marketer");
        }
    }
    public function OrderMangementpage(){
        if(session()->has('userid')){
        $Count_New_Order = DB::select('select * from orders where user_id=?',[session()->get('userid')]);
        $Count_Wite_Order = DB::select('select * from orders where user_id=? and state=?',[session()->get('userid'),'مُعلق']);
        $Count_Proccess_Order = DB::select('select * from orders where user_id=? and state=?',[session()->get('userid'),'تحت الدراسة']);
        $Count_Done_Order = DB::select('select * from orders where user_id=? and state=?',[session()->get('userid'),'مكتمل']);
        $Count_New_Alert = DB::select('select * from alerts where id_amel=? and state=?',[session()->get('userid'),'0']);
        
        return view("OrderMangement",[
            'Count_New_Order'=>count($Count_New_Order),
            'Count_Wite_Order'=>count($Count_Wite_Order),
            'Count_Proccess_Order'=>count($Count_Proccess_Order),
            'Count_Done_Order'=>count($Count_Done_Order),
            'Count_New_Alert'=>count($Count_New_Alert)
        ]);
    }else{
        return redirect("/Marketer");
    }
    }
    public function OrderSendingPage(){
        if(session()->has('userid')){
        $select = DB::table('orders')->where('user_id','=',session()->get('userid'))->orderBy('orders.id', 'DESC')->get();
        $Count_New_Alert = DB::select('select * from alerts where id_amel=? and state=?',[session()->get('userid'),'0']);
        return view("OrderSending",['select'=>$select,'Count_New_Alert'=>count($Count_New_Alert)]);
        }else{
            return redirect("/Marketer");
        }
    }
    public function OrderWaitingPage(){
        if(session()->has('userid')){
        $select = DB::table('orders')->join('sendorder','orders.id','=','sendorder.orderid')->where('orders.user_id','=',session()->get('userid'))->where('orders.state','=','مُعلق')->orderBy('orders.id', 'DESC')->get();
        $Count_New_Alert = DB::select('select * from alerts where id_amel=? and state=?',[session()->get('userid'),'0']);
        return view("OrderWaiting",['select'=>$select,'Count_New_Alert'=>count($Count_New_Alert)]);
        }else{
            return redirect("/Marketer");
        }
    }
    public function OrderDonePage(){
        if(session()->has('userid')){
        $select = DB::table('orders')->join('sendorder','orders.id','=','sendorder.orderid')->where('orders.user_id','=',session()->get('userid'))->where('orders.state','=','مكتمل')->orderBy('orders.id', 'DESC')->get();
        $Count_New_Alert = DB::select('select * from alerts where id_amel=? and state=?',[session()->get('userid'),'0']);
        return view("OrderDone",['select'=>$select,'Count_New_Alert'=>count($Count_New_Alert)]);
        }else{
            return redirect("/Marketer");
        }
    }
    public function OrderProccessPage(){
        if(session()->has('userid')){
        $select = DB::table('orders')->join('sendorder','orders.id','=','sendorder.orderid')->join('reviveorder','orders.id','=','reviveorder.orderid')->where('orders.user_id','=',session()->get('userid'))->where('orders.state','=','تحت الدراسة')->orderBy('orders.id', 'DESC')->get();
        $Count_New_Alert = DB::select('select * from alerts where id_amel=? and state=?',[session()->get('userid'),'0']);
        return view("OrderProccess",['select'=>$select,'Count_New_Alert'=>count($Count_New_Alert)]);
        }else{
            return redirect("/Marketer");
        }
    }
    public function OrderSave(Request $request){

        if(session()->has('userid')){
        $save = DB::table('orders')->insert(
            ['name' => $request->name,
             'address' => $request->address,
             'phone' => $request->phone,
             'email' => $request->email,
             'services' => $request->services,
             'memo' => $request->memo,
             'state' => 'جديد',
             'user_id'=>session()->get('userid'),
             'user_name'=>session()->get('username'),
             'datee' => date('Y-m-d')
             ]
        );

        session()->flash('Save','تم تقديم الطلب بنجاح');
        return redirect('/OrderSending');
        }else{
            return redirect("/Marketer");
        }
    }

    public function OrderEditPage($id){
        if(session()->has('userid')){
            $select = DB::table('orders')->where('id','=',$id)->get();
            $Count_New_Alert = DB::select('select * from alerts where id_amel=? and state=?',[session()->get('userid'),'0']);
            return view("OrderEdit",['select'=>$select,'Count_New_Alert'=>count($Count_New_Alert)]);
            }else{
                return redirect("/Marketer");
            }
    }

    public function OrderEdit(Request $request){
        
        if(session()->has('userid')){
        $save = DB::table('orders')->where('id','=',$request->id)->update(
            ['name' => $request->name,
             'address' => $request->address,
             'phone' => $request->phone,
             'email' => $request->email,
             'services' => $request->services,
             'memo' => $request->memo,
             'state' => 'جديد',
             'user_id'=>session()->get('userid'),
             'user_name'=>session()->get('username')
             
             ]
        );

        session()->flash('Save','تم تعديل الطلب بنجاح');
        return redirect('/OrderSending');
        }else{
            return redirect("/Marketer");
        }
    }

    public function OrderDelete(Request $request){
        if(session()->has('userid')){
$delete = DB::table('orders')->where('id',$request->id)->delete();
if($delete){
    session()->flash('delete','تم حذف الطلب بنجاح');
    return redirect()->back();
}else{
    return redirect("/Marketer");
}
        }
    }

    public function OrderProccessNewSave2(Request $request){
        if(session()->has('userid')){
        if($request->recivefile){
            $this->validate($request,
            [
    
                    
                    'recivefile' => 'required|mimetypes:application/pdf|max:5000'
                   
                  
                ],
            
           [
            
            'recivefile.mimetypes'=>'يجب ان يكون امتداد المرفق : (pdf)',
            'recivefile.max'=>'يجب أن لايزيد حجم المرفق عن 5 ميغابايت'
        
           ]
    
            );
        }
        if($request->recivefile){
            $filename = time().request()->recivefile->getClientOriginalName();
            request()->recivefile->move(public_path('recivefile'), $filename);
        }else{
            $filename=NULL;
        }
        $save = DB::table('reviveorder')->insert(
            ['orderid' => $request->orderid,
             'recivetext' => $request->recivetext,
             'recivefile' => $filename,
             'state' => 'تحت الدراسة',
             ]
        );
        $update= DB::table('orders')->where('id','=',$request->orderid)->update([
            'state' => 'تحت الدراسة'
        ]);
        $update2= DB::table('sendorder')->where('orderid','=',$request->orderid)->update([
            'state' => 'تحت الدراسة'
        ]);
        session()->flash('Save','تم إرسال الطلب بنجاح');
        return redirect('/OrderMangement');
    
    }else{
        return redirect("/Marketer");
    }
}

public function DownloadPdf1(Request $request){

    return Response()->download(public_path('//recivefile/'.$request->recivefile));
}

public function DownloadPdf2(Request $request){

    return Response()->download(public_path('//sendfile/'.$request->sendfile));
}

}
