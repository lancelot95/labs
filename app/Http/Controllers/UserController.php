<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Http\Requests\StoreUser;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.user_index',compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('user.user_create',compact('roles'));
    }

    public function store(StoreUser $request)
    {
       
        $newuser = new User;
        $newuser->name =$request->name;
        $newuser->email =$request->email;
        $newuser->password =$request->password;
        $newuser->role_id =$request->role_id;
        $newuser->save();
        // dd($request);
        $users = User::all();
        return view('user.user_index',compact('users'));
    }
    public function destroy( User $user)
    {
        $user->delete();
        $users = User::all();
        return view('user.user_index',compact('users'));
    }
}
