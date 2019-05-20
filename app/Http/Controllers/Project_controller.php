<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Category;
use App\Tag;
use Session;
use Auth;
class Project_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $project = Project::all();
        return view('admin.project.index')->with('project',$project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        $tag = Tag::all();

        if($category->count() > 0 && $tag->count() > 0 )
        {
        return view('admin.project.create')->with('category',Category::all())
                                            ->with('tag',Tag::all());
                                        }
        else
        {
            Session::flash('info','sorry you miss to create category or tag');
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
     //   dd($request->all());
        $validatedata = $request->validate([
            'title'=>'required',
            'featured'=>'required',
            'content'=>'required',
            'category_id'=>'required',
            'tag'=>'required',
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/project/',$featured_new_name);
    


        $project = Project::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'featured'=>'uploads/project/' . $featured_new_name,
            'category_id'=>$request->category_id,
            'slug'=>str_slug($request->title),
            'user_id'=>Auth::id(),

        ]);
        $project->tag()->attach($request->tag);
        Session::flash('success','project stored succesfuly');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project = Project::find($id);
        $category = Category::all();
        $tag = Tag::all();
        return view('admin.project.edit')->with('project',$project)
                                        ->with('category',$category)
                                        ->with('tag',$tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedata = $request->validate([

            'title'=>'required',
            'content'=>'required',
        ]);

        $project = Project::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/project/',$featured_new_name);
            $project->featured ='uploads/project/'.$featured_new_name; 
            
        }

        $project->title = $request->title;
        $project->content = $request->content;
        $project->category_id = $request->category_id;
        $project->save();
        $project->tag()->sync($request->tag);
        Session::flash('success','project updated succesfuly');
        return redirect()->back();
    
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $project = Project::find($id);
        

        $project->delete();
        Session::flash('success','project destroyed succesfuly');

        return redirect()->back();
    }
}
