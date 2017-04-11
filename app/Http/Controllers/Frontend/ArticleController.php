<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //first calling from viewer
    public function index()
    {
        //$articles = Article::published()->paginate(config('blogger.articles_per_page'));

        //return view('frontend.articles.index', compact('articles'));

        return view('frontend.articles.index');
    }
}
