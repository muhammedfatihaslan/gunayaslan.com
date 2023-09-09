<?php

namespace App\Http\Controllers\admin\gib;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gibkey;
use App\Models\Customer;
class indexController extends Controller
{
    public function index($id){
        // $c =Gibkey::where('cusid',$id)->count();
        $gib = Gibkey::where('cusid',$id)->get();
        $customer = Customer::where('id',$id)->get();
        return view('admin.gib.edit',['gib'=>$gib,'customer'=>$customer]);
           
        
    }
    public function update(Request $request){
        $data = $request->except('_token');
        $c = Gibkey::where('cusid',$data['cusid'])->count();
        if($c!=0){
        $update = Gibkey::where('cusid',$data['cusid'])->update($data);
            if($update){
                return redirect()->route('admin.customer.detail',[$data['cusid']])->with('status','GİB Başarıyla Güncellendi');
            }else {
                return redirect()->back()->with('error','GİB Güncellenemedi !');
            }
        }else {
            $create = Gibkey::create($data);
            if($create){
                return redirect()->route('admin.customer.detail',[$data['cusid']])->with('status','Başarıyla Eklendi');
            }else{
                return redirect()->back()->with('error','Eklenemedi !');
            }
        }
    }
}
