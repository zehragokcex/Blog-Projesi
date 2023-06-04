<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //use HasFactory;
    // $this->hasOne('App\Models\Models\Category','id','category_id');
    function getCategory(){
        return $this->hasOne('App\Models\Models\Category','id','category_id');
    }
   
    
}
