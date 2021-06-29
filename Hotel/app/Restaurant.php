<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function menuCategory(){
        return $this->hasOne(MenuCategory::class,'id','id_type');
    }
}
