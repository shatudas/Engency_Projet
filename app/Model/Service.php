<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
    public function service(){
   	return $this->belongsTo(ServicesCategory::class,'category_id','id');
   }

}
