<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Session;
class User_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        //
        return view('admin.user.index')->with('user',User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.add');
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
        $valiatdata = $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);

        $user = User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt('password'),

        ]);

        $profile = Profile::create([

            'user_id'=>$user->id,
            'avatar'=>'uploads/avatar/avatar.jpg',

        ]);
        Session::flash('success','User Added succesfuly');
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
    }
    public function not_admin($id)
    {
        $user = User::find($id);

        $user->admin=0;

        $user->save();
        Session::flash('success','User has deleted permession succesfuly');
        return redirect()->back();
    }

    public function admin($id)
    {
        $user = User::find($id);

        $user->admin=1;

        $user->save();
        Session::flash('success','user becomed admin succesfuly');
        return redirect()->back();
    }
}
