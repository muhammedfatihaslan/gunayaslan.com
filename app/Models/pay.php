<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pay extends Model
{
    protected $guarded = [];
    use HasFactory;
    
    static function getField($id , $field){
        $pay = pay::where('id',$id)->get();
        return $pay[0][$field];
    }
    
   


    static function explodeDate($id){
        $pay = pay::where('id',$id)->get();
        $all =explode(' ',$pay[0]['created_at']);
        $date = $all['0'];
        return $date ;
    }
}
