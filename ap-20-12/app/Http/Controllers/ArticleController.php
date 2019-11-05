<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    //
    public function show(){
        $articles=Article::get();
        return view('Articles.show',['articles'=>$articles]);
    }
    public function show1articles($id){
        $article=Article::where('id','=',$id)->first();return view('Articles.show1articles',['article'=>$article]);     
    }
}
