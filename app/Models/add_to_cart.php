<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_to_cart extends Model
{
    use HasFactory;
    public function pro(){
        return $this->belongsto('App\Models\product','pro_id','id');

    }
}
