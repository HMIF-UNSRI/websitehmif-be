<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //
    public function getArticles()
    {
        // judul, slug thumbnail, deskripsi
        $articles = Article::all('title', 'slug', 'description', 'thumbnail');

        return response()->json([
            'success' => true,
            'berita' => $articles
        ]);
    }

    public function getArticle($slug)
    {
        // judul, slug, deskripsi, thumbnail, content, tanggal
        $article = Article::where('slug', $slug)->first();

        $tanggal = $article->created_at;

        return response()->json([
            'success' => true,
            'berita' => [
                'judul' => $article->title,
                'slug' => $article->slug,
                'deskripsi' => $article->description,
                'thumbnail' => $article->thumbnail,
                'content' => $article->content,
                'tanggal' => $tanggal->format('d.m.Y')
            ]
        ]);
    }
}
