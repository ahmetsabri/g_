<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable=['title','featured','content'];

   
    public function getfeaturedattribute($featured)
        	{
        		return asset($featured);
        	}
}
