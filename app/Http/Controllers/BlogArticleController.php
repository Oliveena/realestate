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
        // Validate the input data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'illustration' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure illustration is an image
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure avatar is an image
        ]);
    
        // Create the blog article
        $article = BlogArticle::create($validated);
    
        // Handle illustration image upload (if exists)
        if ($request->hasFile('illustration')) {
            $filename = $request->file('illustration')->getClientOriginalName();
            $path = $request->file('illustration')->storeAs('img/blogs', $filename, 'public');
            
            // Save the image record and associate it with the blog article
            $article->images()->create([
                'imageType' => 'illustration',  // Define the type of image
                'image' => 'blogs/' . $filename,  // Store the relative path to the image
            ]);
        }
    
        // Handle avatar image upload (if exists)
        if ($request->hasFile('avatar')) {
            $filename = $request->file('avatar')->getClientOriginalName();
            $path = $request->file('avatar')->storeAs('img/avatar', $filename, 'public');
            
            // Save the avatar record and associate it with the blog article
            $article->images()->create([
                'imageType' => 'avatar',  // Define the type of image
                'image' => 'avatar/' . $filename,  // Store the relative path to the image
            ]);
        }
    
        // Redirect to the list of articles after saving
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
