<?php

namespace App\Http\Controllers\AdminController;

use App\AdminModel\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function GetArticles()
    {
        $articles=Article::orderBy('id','desc')->paginate(30);
        return view('admin.article',compact('articles'));
    }
    public function GetArticleOne($id)
    {
        $article=Article::findOrFail($id);
        return view('admin.article_prev',compact('article'));
    }
}
