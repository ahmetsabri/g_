<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aucation extends Model
{
    //
    protected $fillable = ['title','featured','content'];

   
     public function getFeaturedAttribute($featured)
        	{
        		return asset($featured);
        	}
}
