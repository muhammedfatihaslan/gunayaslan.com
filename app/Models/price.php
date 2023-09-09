<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{

    protected $guarded = [];
    use HasFactory;


    static function getField($col , $id ,$field){
        $c = price::where($col,$id)->count();
        if($c!=0){

            $w = price::where($col,$id)->get();
            return $w[0][$field];
        }else {
            return null;
        }


    }
}
