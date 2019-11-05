<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
class ArticleController extends Controller
{
        function show(){       
        //$users=User::get();//Được sử dụng khi có sẵn model sử dụng thư viện use App\User;
                 $articles = Article::get();
                return view('index',['articles'=>$articles]);
               }
              
    function show1article($id){        
            $article = Article::where('id', '=', $id)->first();
            return view('show1article', ['article' => $article]);
          
    }
    function destroy($id)
    {
        Article::destroy($id);
        $articles = Article::get();
        return view('index', ['articles' => $articles]);
    }
    function create()
    {
        return view('create');
    }
    function store()
    {
        // dd($_POST);
        $articles = Article::get();
        Article::insert(
            [
                "title" => $_POST['title'],
                "description" => $_POST['description'],
                "content" => $_POST['content']
            ]
        );
        $articles = Article::get();
        return view('index', ['articles' => $articles]);
    }
    function edit($id)
    {
        //$user=User::where('id','=',$id)->first();
        $article = Article::where('id', '=', $id)->first();
        return view('edit',['article' => $article]);
    }
    function update($id)
    {
        //$user=User::where('id','=',$id)->first();
        $article = Article::where('id', '=', $id)->first();
        $article->title=$_POST['title'];
        $article->description=$_POST['description'];
        $article->content=$_POST['content'];
        $article->save();
        return redirect()->route('article.show');
    }



}
