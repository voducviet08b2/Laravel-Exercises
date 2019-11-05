<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::get();
        return view('Users.users',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles=Role::get();
        return view('Users.create',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         //dd($request->username);
        User::insert(
            [
                "username"=>$request->username,
                "email"=>$request->email,
                "password"=>$request->password,
                "role_id"=>$request->roleId,
            ]
        );
        $users=User::get();
        return view('Users.users',['users'=>$users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('Users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        //$user = User::where('id', '=', $id)->first();
        $a=User::where('id','=',$user->id)->first();
        return view('Users.edit',['user'=>$a]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $a = User::where('id', '=', $user->id)->first();
        $a->username=$request->username;
         $a->email=$request->email;
         $a->password=$request->password;
         $a->save();
         return redirect()->route('user.index');
    }
    // function update($id)
    // {
    //     //$user=User::where('id','=',$id)->first();
    //     $user = User::where('id', '=', $id)->first();
    //     $user->username=$_POST['username'];
    //     $user->email=$_POST['email'];
    //     $user->password=$_POST['password'];
    //     $user->save();
    //     return redirect()->route('users.index');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        $users = User::get();
        return view('Users.users', ['users' => $users]);

    }
}
