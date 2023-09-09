<?php

namespace App\Http\Controllers\admin\pay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\pay;
use App\Models\price;
class indexController extends Controller
{
    public function index(){

        $customer = Customer::all();
        $price = price::all();
        $pay = pay::all();
        return view('admin.pay.index',['customer'=>$customer,
    'price'=>$price,'pays'=>$pay]);
    }
    public function create(){
        $customer = Customer::all();
        $price = price::all();
        return view('admin.pay.create',['customer'=>$customer,'price'=>$price]);
    }
    public function createid($id){

        $customer = Customer::where('id',$id)->get();
        $price = price::where('cusid',$id)->get();
        return view('admin.pay.create',['customer'=>$customer,'price'=>$price]);
    }
    public function store(Request $request){
        $data = $request->except('_token'); 
        if(!empty($data['cusid'])){

        
        $c = price::where('cusid',$data['cusid'])->count();
        if($c!=0){
            if(!empty($data['pay'])){
                $create = pay::create($data);
                $price = price::where('cusid',$data['cusid'])->get();
                if($create){
                    // result - pay
                    if($price[0]['result']>$data['pay']){
                        $newresult = $price[0]['result']-$data['pay'];
                        price::where('cusid',$data['cusid'])->update(array('result'=>$newresult));
                    }else {
                        return redirect()->back()->with('error','Müşterinin Borcu Daha Az! '.'Toplam Borç :'.$price[0]['result']);
                    }
                    // end result 
                    return redirect()->back()->with('status','Alınan Ödeme Başarıyla Eklendi');
                }else {
                    return redirect()->back()->with('error','Ödeme Eklenemedi !');
                }
            }else {
                return redirect()->back()->with('error','Girilen Bilgileri Kontrol Ediniz !');
            }
            }else {
                return redirect()->back()->with('error','Müşteriye Ücret Tanımlanmamış, Önce Ücret Tanımlayın');

            }
        }else {
            return redirect()->back()->with('error','Müşteri Seçiniz !');
        }
    }
    // NOT USING -------------------
    // public function delete($id){
    //     $c = pay::where('id',$id)->count();
    //     if($c!=0){
    //         $delete = pay::where('id',$id)->delete();
    //         if($delete){
    //             return redirect()->back()->with('status','Ödeme Başarıyla Silindi');
    //         }else{
    //             return redirect()->back()->with('status','Ödeme Silinemedi !');
                
    //         }
    //     }else {
    //         return redirect()->back();
    //     }
    // }
    public function detail($id){
        $customer = Customer::where('id',$id)->get();
        $pay = pay::where('id',$id)->get();
        return view('admin.pay.detail',['pays'=>$pay,'customer'=>$customer]);
    }
}
