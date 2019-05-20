<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aucation;
use Session;
class Aucation_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aucation = Aucation::all();
        return view('admin.aucation.index')->with('aucation',$aucation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.aucation.create');
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
            'file' =>'required',
        ]);
         $file = $request->file;
        $file_new_name = time().$file->getClientOriginalName();
        $file->move('uploads/aucation/',$file_new_name);


        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/aucation/',$featured_new_name);

        $aucation = Aucation::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'featured'=>'uploads/aucation/'.$featured_new_name,
            'file'=>'uploads/aucation/'.$file_new_name,

        ]);


        Session::flash('success','aucation stored succesfuly');
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
            return view('admin.aucation.edit')->with('aucation',Aucation::find($id));
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

        $aucation = Aucation::find($id);

        if($request->hasFile('featured'))
        {
            $featured = $request->featured;
            $featured_new_name =time().$featured->getClientOriginalName();
            $featured->move('uploads/aucation/',$featured_new_name);
            $aucation->featured = 'uploads/aucation/'.$featured_new_name;
        }
    
        if($request->hasFile('file'))
        {
            $file = $request->file;
            $file_new_name =time().$file->getClientOriginalName();
            $file->move('uploads/aucation/',$file_new_name);
            $aucation->file = 'uploads/aucation/'.$file_new_name;
        }

        $aucation->title = $request->title;
        $aucation->content = $request->content;
        $aucation->save();
        Session::flash('success','Aucation updated succesfuly');
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
        $aucation = Aucation::find($id);

        $aucation->delete();

        Session::flash('success','aucation deleted succesfuly');
        return redirect()->back();
    }
}
