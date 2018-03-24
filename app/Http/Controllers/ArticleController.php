<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
//        $this->validate(request(), [
//            'title' => 'required',
//            'body' => 'required|min:10'
//        ]);
        Article::create([
            'user_id' => 1,
            'title' => request('title'),
            'slug' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/');
    }
}
