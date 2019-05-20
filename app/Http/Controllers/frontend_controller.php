<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\News;
use App\Aucation;
use App\Project;
use App\Tag;
use App\Category;
class frontend_controller extends Controller
{
    //
    public function index()
    {
    	$setting = Setting::first();
    	$first_news = News::orderby('created_at','desc')->first();
    	$second_news = News::orderby('created_at','desc')->skip(1)->take(1)->first();
    	$third_news = News::orderby('created_at','desc')->skip(2)->take(1)->first();
    	$aucation = Aucation::orderby('created_at','desc')->first();
    	return view('index')->with('setting',$setting)
                            ->with('title',$setting->title)
    						->with('title',$setting->site_name)
    						->with('first_news',$first_news)
    						->with('second_news',$second_news)
    						->with('third_news',$third_news)
    						->with('aucation',$aucation);
    }

    public function project()
    {
        $setting = Setting::first();
        $project = Project::paginate(1);
        $tag = Tag::all();
        $category = Category::all();
        return view('project')->with('projects',$project)
                            ->with('tag',$tag)
                            ->with('category',$category)
                            ->with('setting',$setting);
                           

    }

    public function search()
    {
        $category = Category::all();
        $project = Project::where('title','like', '%' . request('query') . '%')->get();
        return view('search')->with('project',$project)
                                ->with('title','search result is : ' . request('query'))
                                ->with('category',$project)
                                ->with('setting',Setting::first())
                                ->with('query',request('query'));
    }

    public function single($slug)
    {
        $project = Project::where('slug',$slug)->first();
        $setting = Setting::first();

        return view('single')->with('project',$project)
                            ->with('title',$project->title)
                            ->with('setting',$setting);

    }

    public function category($id)
    {
        $category = Category::find($id);
         $setting = Setting::first();

         return view('category')->with('category',$category)
                            ->with('setting',$setting);
                            

    }
    public function tag($id)
    {
        $tag = Tag::find($id);
        $setting = Setting::first();

        return view('tag')->with('tag',$tag)
                            ->with('title',$tag->title)
                            ->with('setting',$setting);
    }


    public function partner()
    {
        $setting = Setting::first();
        return view('partner')->with('setting',$setting);
    }
    public function service()
    {
        $setting = Setting::first();
        return view('service')->with('setting',$setting);
    }

    public function expert_form()
    {
        $setting = Setting::first();
        return view('expert_form')->with('setting',$setting);
    }
    public function contact_us()
    {
        $setting = Setting::first();
        return view('contact')->with('setting',$setting);
    }
    public function about()
    {
        $setting = Setting::first();
        return view('about')->with('setting',$setting);
    }
    public function adviser_list()
    {
        $setting = Setting::first();
        return view('adviser')->with('setting',$setting);
    }
}

