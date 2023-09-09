<?php

namespace App\Http\Controllers\admin\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\price;
use App\Models\Gibkey;
use App\Models\otherKey;

class indexController extends Controller
{
    public function index(){
        $customer = Customer::all();
        return view('admin.customer.index',['customer'=>$customer]);
    }
    public function create(){
        return view('admin.customer.create');
    }
    public function store(Request $request){
       $data = $request->except('_token');
        $w = $request->except('_token');
        $create = Customer::create($w);
        if($create){
            return redirect()->back()->with('status','Mükellef Başarıyla Eklendi');
        }else {
            return redirect()->back()->with('error','Mükellef Eklenemedi !');
        }
    }
    public function edit($id){
        $c = Customer::where('id',$id)->count();
        if($c!=0){
            $w = Customer::where('id',$id)->get();
            return view('admin.customer.edit',['customer'=>$w]);
        }else {
            return redirect()->back()->with('error','Düzenlenecek Mükellef Bulunamadı !');
        }
    }
    public function update(Request $request){
        $data = $request->except('_token');
        $id = $request->route('id');
        echo $id;
    }
    public function detail($id){
        $gib = Gibkey::where('cusid',$id)->get();
        $sgk = otherKey::where('cusid',$id)->get();
        $customer = Customer::where('id',$id)->get();
        $price = price::where('cusid',$id)->get();
        return view('admin.customer.detail',['customer'=>$customer,
        'price'=>$price,'gib'=>$gib,'sgk'=>$sgk]);
    }
    
}
