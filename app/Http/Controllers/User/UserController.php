<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($id){
       $user= User::find($id);
        return view('user.edit',compact('user'));
    }

    public function delete($id){
        User::find($id)->delete();
        return back()->with('success','user has successfully delete');
    }

    public function view(){

    }

    public function update($id,Request $request){
        $user=User::find($id);
        $user->update([
           'name'=>$request->name,
           'email'=>$request->email,
        ]);
        $user->save();
        return redirect()->route('home')->with('success','user has successfully updated');
    }
}
