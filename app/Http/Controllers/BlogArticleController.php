<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\Message;
use App\Models\Comment;
use App\Models\BlogArticle;
use App\Models\Image;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class BlogArticleController extends Controller
{
    public function index()
    {
        // Get all blog articles, paginated (3 per page)
        $articles = BlogArticle::with('images', 'author')->paginate(3);
        return view('articles.index', compact('articles'));
    }
    
    public function create() {
        return view('articles.create');
    }


    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'illustration' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure illustration is an image
    ]);

    $article = BlogArticle::create($validated);

    if ($request->hasFile('illustration')) {
        $path = $request->file('illustration')->store('illustrations', 'public');
        $article->illustration = $path;
        $article->save();
    }

    return redirect()->route('articles.index');
}

    public function edit(BlogArticle $article) {
        return view('articles.edit', compact('article'));
    }
    public function update(Request $request, BlogArticle $article) {
        $article->update($request->all());
        return redirect()->route('articles.index');
    }
    public function destroy(BlogArticle $article) {
        $article->delete();
        return redirect()->route('articles.index');
    }
}
