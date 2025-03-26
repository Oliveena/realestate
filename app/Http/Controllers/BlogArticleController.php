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
    public function index() {
        $articles = BlogArticle::with('author', 'illustration')->get();
        return view('articles.index', compact('articles'));
    }
    public function create() {
        return view('articles.create');
    }
    public function store(Request $request) {
        BlogArticle::create($request->all());
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
