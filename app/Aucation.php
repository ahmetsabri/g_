<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aucation extends Model
{
    //
    protected $fillable = ['title','featured','content','file'];

   
     public function getFeaturedAttribute($featured)
        	{
        		return asset($featured);
        	}
        	 public function getFileAttribute($file)
        	{
        		return asset($file);
        	}
}
