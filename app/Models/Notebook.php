<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $guarded = [];
    use HasFactory;

    static function getField($row,$id,$field){
        $c = Notebook::where($row,$id)->count();
        if($c!=0){
            $data=Notebook::where($row,$id)->get();
            return $data[0][$field];
        }else {
            return "";
        }
    }
}
