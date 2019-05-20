<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;

class News_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = News::all();
        return view('admin.news.index')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.news.create');
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

        $validatedata = $request->validate([
            'title'=>'required',
            'featured'=>'required|image',
            'content'=>'required',
        ]);

       

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/news/',$featured_new_name);


        $news = News::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'featured'=>'uploads/news/' . $featured_new_name,
        ]);

        Session::flash('success','news stored succesfuly');
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
        $news = News::find($id);
        return view('admin.news.edit')->with('news',$news);
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

        $news = News::findOrFail($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/news/',$featured_new_name);
            $news->featured ='uploads/news/'.$featured_new_name; 
            
        }

        $news->title = $request->title;
        $news->content = $request->content;
        $news->save();
        Session::flash('success','news updated succesfuly');
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
        $news = News::find($id);

        $news->delete();
        Session::flash('success','news destroyed succesfuly');
        return redirect()->back();
    }
}
