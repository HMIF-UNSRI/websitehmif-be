<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $title = 'Artikel';
        $articles = Article::all();
        return view('article.index', compact('articles', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Artikel';
        return view('article.create', compact('title'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|file|mimes:png,jpg',
            'content' => 'required',
        ]);

        $slug = Str::slug($request->title, '-');
        $uniqueSlug = $this->makeUniqueSlug($slug);

        $thumbnail = "thumbnail/$uniqueSlug" . "." . $request->thumbnail->getClientOriginalExtension();

        $data = [
            'title' => $request->title,
            'slug' => $uniqueSlug,
            'description' => $request->description,
            'thumbnail' => $thumbnail,
            'content' => $request->content,
        ];

        // Create article
        $article = Article::create($data);

        // Handle thumbnail upload
        Storage::disk('public')->put($thumbnail, file_get_contents($request->thumbnail));

        // Handle content images
        if (strpos($request->content, '<img') !== false) {
            $dom = new \DOMDocument();
            $dom->loadHTML($article->content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');
            foreach ($images as $image) {
                $src = $image->getAttribute('src');
                if (strpos($src, 'data:image') === 0) {
                    list($type, $data) = explode(';', $src);
                    list(, $data) = explode(',', $data);
                    $data = base64_decode($data);

                    $filename = 'images/' . Str::random(20) . '.png'; // Or adjust the extension as needed
                    Storage::disk('public')->put($filename, $data);

                    $newImage = $dom->createElement('img');
                    $newImage->setAttribute('src', asset('storage/' . $filename));
                    $newImage->setAttribute('class', 'img-fluid');
                    $image->parentNode->replaceChild($newImage, $image);
                }
            }

            $article->content = $dom->saveHTML(); // Save modified content
            $article->save();
        }

        return redirect()->route('article.index')->with('success', 'Article berhasil ditambahkan.');
    }


    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'image',
            'content' => 'required',
        ]);

        $newSlug = Str::slug($request->title, '-');
        $uniqueSlug = $this->makeUniqueSlug($newSlug, $slug);

        $thumbnail = "thumbnail/$uniqueSlug" . "." . $request->thumbnail->getClientOriginalExtension();

        if ($request->hasFile('thumbnail')) {
            Storage::disk('public')->delete($thumbnail);

            $$thumbnail = "thumbnail/$uniqueSlug" . "." . $request->thumbnail->getClientOriginalExtension();

            Storage::disk('public')->put($thumbnail, file_get_contents($request->thumbnail));
        }

        $article = Article::where('slug', $slug)->firstOrFail();
        $article->update([
            'title' => $request->title,
            'slug' => $uniqueSlug,
            'description' => $request->description,
            'content' => $request->content,
            'thumbnail' => $thumbnail,
        ]);

        return redirect()->route('article.index')->with('success', 'Article updated successfully.');
    }


    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('article.show', compact('article'));
    }

    public function edit($slug)
    {
        $title = 'Edit Artikel';
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('article.edit', compact('article', 'title'));
    }

    public function delete($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        if ($article->thumbnail) {
            Storage::disk('public')->delete($article->thumbnail);
        }
        
        $article->delete();

        return redirect()->route('article.index')->with('success', 'Article deleted successfully.');
    }

    private function makeUniqueSlug($slug, $currentSlug = null)
    {
        $uniqueSlug = $slug;
        $counter = 2;

        while (Article::where('slug', $uniqueSlug)->whereNot('slug', $currentSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter;
            $counter++;
        }

        return $uniqueSlug;
    }
}