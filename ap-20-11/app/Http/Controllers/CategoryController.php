<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    //
    public function showCat(){
    $cats=Category::get();
    return view("showCat",['cats'=>$cats]);
    }
    function destroy($id)
    {
        Category::destroy($id);
        $cats = Category::get();
        return view('showCat', ['cats' => $cats]);
    }
    function create()
    {
        return view('createCat');
    }
    function store()
    {
        // dd($_POST);
        Category::insert(
            [
                "name" => $_POST['name'],
                "description" => $_POST['description'],
                
            ]
        );
        $cats = Category::get();
        return view('showCat', ['cats' => $cats]);
    }
    function edit($id)
    {
        //$user=User::where('id','=',$id)->first();
        $cat = Category::where('id', '=', $id)->first();
        return view('editCat',['cat' => $cat]);
    }
    function update($id)
    {
        //$user=User::where('id','=',$id)->first();
        $cat = Category::where('id', '=', $id)->first();
        $cat->name=$_POST['name'];
        $cat->description=$_POST['description'];
        $cat->save();
        return redirect()->route('category.show');
    }



}
