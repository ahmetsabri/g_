<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $fillable = ['title','slug','featured','content','category_id','user_id'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag');
    }

     public function getfeaturedattribute($featured)
        	{
        		return asset($featured);
        	}
    public function user()
    {
        return $this->belongsTo('App\Project');
    }
}
