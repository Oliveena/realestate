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
    public function edit(Comment $comment) {
        return view('comments.edit', compact('comment'));
    }
    public function update(Request $request, Comment $comment) {
        $comment->update($request->all());
        return redirect()->route('comments.index');
    }
    public function destroy(Comment $comment) {
        $comment->delete();
        return redirect()->route('comments.index');
    }
}