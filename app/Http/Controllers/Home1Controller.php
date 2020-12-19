<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class Home1Controller extends Controller
{
    public function halamanhome() 
    {
        $article = Article::all();
        return view('database',['article' => $article]);
    }
    public function halamanhome1($id) 
    {
        $article = Article::find($id);
        return view('databasear',['article' => $article],['id'=>$id]);
    }
    public function _invoke(Request $request)
    {
        $articles = \App\Article::all();
        $value = Chace::rememberForever('articles',function(){
            return \App\Article::all();
        });
        $page = 'Artikel IntanVionasari';
        return view('layout.article',[
            'articles' => $articles,
            'halaman' => $page
        ]);
    }
}

    