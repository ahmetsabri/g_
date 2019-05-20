<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Aucation;
use App\News;
use App\Tag;
use App\Category;
use App\Project;
use App\Expert;
use App\Contact;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = User::all();
        $aucation = Aucation::all();
        $category = Category::all();
        $news = News::all();
        $tags = Tag::all();
        $project = Project::all();
        $contact = Contact::all();
        $expert = Expert::all();
        return view('home')->with('user',$user)
                            ->with('aucation',$aucation)
                            ->with('category',$category)
                            ->with('news',$news)
                            ->with('category',$category)
                            ->with('project',$project)
                            ->with('tags',$tags)
                            ->with('contact',$contact)
                            ->with('expert',$expert);
    }
}
