<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function articleCount(){
        return $this->hasMany('App\Models\Models\Article','category_id','id')->count();
        // kaç tane yazı olduğunu sayar
    }
}
