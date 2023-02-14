<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Auth::user();

      return view('Profile',compact('data'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update(Request $request)
    {
    $user=auth()->user();

    $user->update([
        'name'=>$request->name,
        'email'=>$request->email,
    ]);

    return redirect()->route('dashboard')->with('success','Profile successfully updated ');
    }

    public function UpdatePassword(Request $request){

        $request->validate([
            'old_password'=>'required|min:6|max:50',
            'new_password'=>'required|min:6|max:50',
            'confirm_password'=>'required|same:new_password'
        ]);

        $current_user=auth()->user();
   
        if(Hash::check($request->old_password,$current_user->password)){
            $current_user->update([
              'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('success','Updated successfully');
        }else{
            return redirect()->back()->with('error','Old password does not matched.');
        }

    }

    public function ChangePassword(){

        return view('ChangePass');

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
}
