<?php

namespace App\Http\Controllers\admin\price;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\price;

class indexController extends Controller
{
    public function index(){
        $price = price::all();
        $customer = Customer::all();
        return view('admin.price.index',['customer'=>$customer,'price'=>$price]);
    }
    public function create($id){
        $customer = Customer::where('id',$id)->get();
        return view('admin.price.create',['customer'=>$customer[0]]);
    }
    public function store(Request $request){
        $data = $request->except('_token');
        $data['result'] = $data['month'] * $data['priceofmonth'];
        $create = price::create($data);
        if($create){
            return redirect()->route('admin.price')->with('status','Başarıyla Hesap Eklediniz');
        }else {
            return redirect()->back()->with('error','Hesap Eklenemedi ! ');
        }

       
    } 
    public function edit($cusid){
        $customer = Customer::where('id',$cusid)->get();
        $price = price::where('cusid',$cusid)->get();
        return view ('admin.price.edit',['customer'=>$customer,'price'=>$price]);
    }
    public function update(Request $request){
        $data = $request->except('_token');
        $c = price::where('cusid',$data['cusid'])->count();
        $data['result']= $data['month'] * $data['priceofmonth'];
        if($c!=0){
            $update =price::where('cusid',$data['cusid'])->update($data);
            if($update){
                return redirect()->route('admin.price')->with('status','Başarıyla Güncellendi');
            }else {
                return redirect()->back()->with('error','Güncellenemedi !');
            }
        }
    }
}
