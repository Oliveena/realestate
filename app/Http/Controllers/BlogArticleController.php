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
        return view('blogs.index', compact('articles'));
    }

    public function create()
    {
        return view('blogs.create');
    }


    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'illustration' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure illustration is an image
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure avatar is an image
    ]);

    // Create the blog article
    $article = BlogArticle::create($validated);

    // Handle illustration image upload
    if ($request->hasFile('illustration')) {
        $filename = $request->file('illustration')->getClientOriginalName();
        $path = $request->file('illustration')->storeAs('img/blogs', $filename, 'public');
        
        // Save the image record
        $article->images()->create([
            'imageType' => 'illustration',
            'image' => 'blogs/' . $filename,  // Store the relative path
        ]);
    }

    // Handle avatar image upload
    if ($request->hasFile('avatar')) {
        $filename = $request->file('avatar')->getClientOriginalName();
        $path = $request->file('avatar')->storeAs('img/avatar', $filename, 'public');
        
        // Save the image record
        $article->images()->create([
            'imageType' => 'avatar',
            'image' => 'avatar/' . $filename,  // Store the relative path
        ]);
    }

    return redirect()->route('blogs.index');
}


    public function show($blogId)
{
    $article = BlogArticle::find($blogId);
    
    if (!$article) {
        abort(404, 'Article not found');
    }
    
    return view('blogs.show', compact('article'));
}


    public function edit(BlogArticle $article)
    {
        return view('blogs.edit', compact('article'));
    }

    public function update(Request $request, BlogArticle $article)
    {
        $article->update($request->all());
        return redirect()->route('blogs.index');
    }

    public function destroy(BlogArticle $article)
    {
        $article->delete();
        return redirect()->route('blogs.index');
    }
}
