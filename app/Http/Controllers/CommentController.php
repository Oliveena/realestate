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

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::with('author', 'article')->get();
        return view('comments.index', compact('comments'));
    }

    public function create() {
        return view('comments.create');
    }

    public function store(Request $request, BlogArticle $article)
{
    // Check if the user is authenticated using auth()->check()
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'You need to be logged in to post a comment.');
    }

    // Proceed with the comment creation
    $request->validate([
        'commentBody' => 'required|max:200',
    ]);

    // Create the new comment and associate it with the authenticated user and article
    $comment = new Comment();
    $comment->commentBody = $request->input('commentBody');
    $comment->commentAuthorID = auth()->user()->id; 
    $comment->articleId = $article->blogId; 
    $comment->save();

    // Redirect back with a success message
    return redirect()->route('blogs.show', ['blogId' => $article->blogId])
                     ->with('success', 'Comment posted successfully!');
}

    

    public function edit(BlogArticle $article, Comment $comment)
    {
        // Ensure that the user can only edit their own comment
        if ($comment->commentAuthorId !== auth()->id()) {
            abort(403, 'Unauthorized action');
        }
    
        return view('comments.edit', compact('article', 'comment'));
    }
    
    public function update(Request $request, BlogArticle $article, Comment $comment)
    {
        // Ensure that the user can only update their own comment
        if ($comment->commentAuthorId !== auth()->id()) {
            abort(403, 'Unauthorized action');
        }
    
        $comment->update($request->all());
        return redirect()->route('articles.show', $article->blogId);
    }
    
    public function destroy(BlogArticle $article, Comment $comment)
    {
        // Ensure that the user can only delete their own comment
        if ($comment->commentAuthorId !== auth()->id()) {
            abort(403, 'Unauthorized action');
        }
    
        $comment->delete();
        return redirect()->route('articles.show', $article->blogId);
    }
    
}