<?php

namespace App\Http\Controllers\admin\sgk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\otherKey;
use App\Models\Customer;
class indexController extends Controller
{
    public function index($id){
        // $c =sgkkey::where('cusid',$id)->count();
        $sgk = otherKey::where('cusid',$id)->get();
        $customer = Customer::where('id',$id)->get();
        return view('admin.sgk.edit',['sgk'=>$sgk,'customer'=>$customer]);
           
        
    }
    public function update(Request $request){
        $data = $request->except('_token');
        $c = otherKey::where('cusid',$data['cusid'])->count();
        if($c!=0){
        $update = otherKey::where('cusid',$data['cusid'])->update($data);
            if($update){
                return redirect()->route('admin.customer.detail',[$data['cusid']])->with('status','SGK Başarıyla Güncellendi');
            }else {
                return redirect()->back()->with('error','SGK Güncellenemedi !');
            }
        }else {
            $create = otherKey::create($data);
            if($create){
                return redirect()->route('admin.customer.detail',[$data['cusid']])->with('status','Başarıyla Eklendi');
            }else{
                return redirect()->back()->with('error','Eklenemedi !');
            }
        }
    }
}
