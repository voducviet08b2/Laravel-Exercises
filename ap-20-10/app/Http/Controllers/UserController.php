<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index(){
        $users=User::get();
        return view('index',['users'=>$users]);
    }
    function show1user($id){        
            $user = User::where('id', '=', $id)->first();
            return view('show1user', ['user' => $user]);
          
    }
    function destroy($id)
    {
        User::destroy($id);
        $users = User::get();
        return view('index', ['users' => $users]);
    }
    function create()
    {
        return view('create');
    }
    function store()
    {
        // dd($_POST);
        User::insert(
            [
                "username" => $_POST['ten'],
                "email" => $_POST['thu-dien-tu'],
                "password" => $_POST['mat-khau']
            ]
        );
        $users = User::get();
        return view('index', ['users' => $users]);
    }
    function edit($id)
    {
        //$user=User::where('id','=',$id)->first();
        $user = User::where('id', '=', $id)->first();
        return view('edit',['user' => $user]);
    }
    function update($id)
    {
        //$user=User::where('id','=',$id)->first();
        $user = User::where('id', '=', $id)->first();
        $user->username=$_POST['username'];
        $user->email=$_POST['email'];
        $user->password=$_POST['password'];
        $user->save();
        return redirect()->route('users.index');
    }
}
