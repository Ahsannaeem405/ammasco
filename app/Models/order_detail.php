<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
    public function pro(){
        return $this->belongsto('App\Models\product','pro_id','id');

    }
    public function user(){
        return $this->belongsto('App\Models\User','user_id','id');

    }
}
