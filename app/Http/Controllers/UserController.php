<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $users = User::all();
            return view("/back/users/all",compact("users"));
        }else{
            return redirect()->back();
        }
    }
    public function create()
    {
        return view("/back/users/create");
    }
    public function store(Request $request)
    {
        $user = new User;
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]); // store_validated_anchor;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = 4;
        $user->save(); // store_anchor
        return redirect()->route("user.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $user = User::find($id);
        return view("/back/users/show",compact("user"));
    }
    public function edit($id)
    {   
        // $roles = Role::all();
        $user = User::find($id);
        return view("/back/users/edit",compact("user", "roles"));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'role_id'=> 'required',
        ]); // update_validated_anchor;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $user->save(); // update_anchor
        return redirect()->route("user.index")->with("message", "Successful update !");
    }
    public function destroy($id, Request $request)
    {
        if (decrypt($request->id) == $id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with("message", "Successful delete !");
        }else{
            return redirect()->back()->with("message", "error delete");
        }
    }
    // public function mail($id){
    //     $user = User::find($id);
    //     Mail::to($user->email)->send(new TestMail($user));
    //     return redirect()->route("user.index")->with("message", "Email send !");
    // }
}
