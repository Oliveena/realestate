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

    public function store(Request $request) {
        Comment::create($request->all());
        return redirect()->route('comments.index');
    }

    //TODO: requires functional authentification for testing 
    // public function edit(BlogArticle $article, Comment $comment)
    // {
    //     // Ensure that the user can only edit their own comment
    //     if ($comment->commentAuthorId !== auth()->id()) {
    //         abort(403, 'Unauthorized action');
    //     }
    
    //     return view('comments.edit', compact('article', 'comment'));
    // }
    
    // public function update(Request $request, BlogArticle $article, Comment $comment)
    // {
    //     // Ensure that the user can only update their own comment
    //     if ($comment->commentAuthorId !== auth()->id()) {
    //         abort(403, 'Unauthorized action');
    //     }
    
    //     $comment->update($request->all());
    //     return redirect()->route('articles.show', $article->blogId);
    // }
    
    // public function destroy(BlogArticle $article, Comment $comment)
    // {
    //     // Ensure that the user can only delete their own comment
    //     if ($comment->commentAuthorId !== auth()->id()) {
    //         abort(403, 'Unauthorized action');
    //     }
    
    //     $comment->delete();
    //     return redirect()->route('articles.show', $article->blogId);
    // }
    
}