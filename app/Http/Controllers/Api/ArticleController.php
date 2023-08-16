<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function getArticles()
    {
        $articles = Article::all();

        return response()->json([
            'title' => $articles->title,
        ]);
    }
}
