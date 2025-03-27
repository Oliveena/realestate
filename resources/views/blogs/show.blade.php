<x-app-layout title="View Blog Article">
    <div class="container py-4">
        <h1>{{ $article->title }}</h1>

        <!-- Article Body -->
        <div class="mb-4">
            {!! nl2br(e($article->body)) !!} 
        </div>

        <!-- Article Author and Date -->
        <p class="text-muted">
            <small>By {{ $article->author->name }} | 
            {{ $article->created_at ? $article->created_at->format('M d, Y') : 'Date not available' }}</small>
        </p>
        

        <!-- Article Image -->
        @if($article->images->first() && $article->images->first()->isIllustration())
            <img src="{{ $article->images->first()->getImageUrlAttribute() }}" class="img-fluid" alt="Article Image">
        @else
            <img src="{{ asset('images/default-image.jpg') }}" class="img-fluid" alt="Default Image">
        @endif

        <!-- Comments Section -->
        <div class="mt-5">
            <h4>Comments</h4>

          <!-- Comments Section -->
<div class="mt-5">
    <h4>Comments</h4>

    <!-- Check if the article has comments -->
    @if($article->comments && !$article->comments->isEmpty())
        <!-- Display Comments -->
        @foreach ($article->comments as $comment)
            <div class="mb-4">
                <p><strong>{{ $comment->author->name }}</strong> commented on 
                {{ $comment->created_at ? $comment->created_at->format('M d, Y') : 'Date not available' }}:</p>
                <p>{{ $comment->commentBody }}</p>
            </div>
        @endforeach
    @else
        <p>No comments yet.</p>
    @endif

    <!-- Comment Form (if logged in) -->
    @auth
    <form action="{{ route('comments.store', ['article' => $article->blogId]) }}" method="POST">
        @csrf
        <div class="form-group">
            <textarea name="commentBody" class="form-control" rows="3" placeholder="Write your comment..." required></textarea>
        </div>
        <input type="hidden" name="articleId" value="{{ $article->blogId }}">
        <button type="submit" class="btn btn-primary mt-3">Post Comment</button>
    </form>
    
    @endauth

    @guest
        <p>You must be logged in to comment.</p>
    @endguest
</div>

    </div>
</x-app-layout>
