<?php

namespace App\Http\Controllers\admin\notebook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Notebook;
class indexController extends Controller
{
    public function index(){
        $notebook = Notebook::all();
        $customer = Customer::all();
        return view('admin.notebook.index',['notebook'=>$notebook,'customer'=>$customer]);
    }
    public function edit($id){
        $customer = Customer::where('id',$id)->get();
        $notebook = Notebook::where('cusid',$customer[0]['id'])->get();
        return view('admin.notebook.edit',['id'=>$id,'customer'=>$customer,'notebook'=>$notebook]);
    }
    public function update(Request $request){
        $data = $request->except('_token');

        $c = Notebook::where('cusid',$data['cusid'])->count();
        if($c!=0){
            $update = Notebook::where('cusid',$data['cusid'])->update($data);
            if($update){
                return redirect()->back()->with('status','Not Başarıyla Güncellendi');
            }else{
                return redirect()->back()->with('error','Not Güncellenemedi ! ');
            }
        }else {
            $create = Notebook::where('cusid',$data['cusid'])->create($data);
            if($create){
                return redirect()->back()->with('status','Not Başarıyla Eklendi');
            }else{
                return redirect()->back()->with('error','Not Eklenemedi ! ');
            }
        }
    }
}
