<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    use HasFactory;
    static function getField($id,$field){
        $c = Customer::where('id',$id)->count();
        if($c!=0){
            $data = Customer::where('id',$id)->get();
            return $data[0][$field];
        }else{
            return "Müşteri Bulunamadı !";
        }
    }
}