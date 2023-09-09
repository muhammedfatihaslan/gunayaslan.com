<?php

namespace App\Http\Controllers\admin\search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer ;

class indexController extends Controller
{
    public function index(Request $request){
        $data = $request->except('_token');
        $c = Customer::where('name','like','%'.$data['name'].'%')->count();
        if(!empty($c)){
            $search = Customer::where('name','like','%'.$data['name'].'%')->get();

            return view('admin.search.index',['customer'=>$search]);
        }else {
            return redirect()->back()->with('error','Müşteri Bulunamadı !');
        }





    }
}
