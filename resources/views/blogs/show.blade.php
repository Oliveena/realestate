<x-app-layout title="View Blog Article">
    <div class="container py-4">
        <h1>{{ $article->title }}</h1>

        <!-- Article Body -->
        <div class="mb-4">
            {!! nl2br(e($article->body)) !!} 
        </div>

        <!-- Article Author and Date -->
        <p class="text-muted d-flex align-items-center">
            <img src="#" style="width: 30px; height: 30px; margin-right: 10px;" alt="Author Avatar">
            {{-- <!-- Avatar Image -->
            @if($article->author->images->where('imageType', 'avatar')->first())
                <img src="{{ $article->author->images->where('imageType', 'avatar')->first()->getImageUrlAttribute() }}" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;" alt="Author Avatar">
            @else
                <img src="{{ asset('images/default-avatar.jpg') }}" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;" alt="Default Avatar">
            @endif --}}
            <small>By {{ $article->author->name }} | 
            {{ $article->created_at ? $article->created_at->format('M d, Y') : 'Date not available' }}</small>
        </p>

        <!-- Article Image -->
        @if($article->images->isIllustration())
        <img src="{{ asset('img/blogs/' . basename($article->images->imagePath)) }}" class="card-img-top" alt="Article Image" style="height: 450px; object-fit: cover;"> 
        @else
            <img src="{{ asset('images/defaultimage.jpg') }}" class="img-fluid" alt="Default Image">
        @endif

        <!-- Comments Section -->
        <div class="mt-5">
            <h4>Comments</h4>

            <!-- Check if the article has comments -->
            @if($article->comments && !$article->comments->isEmpty())
                <!-- Display Comments -->
                @foreach ($article->comments as $comment)
                <div class="mb-4">
                    <p><strong>{{ $comment->author->name ?? 'Unknown' }}</strong> commented on 
                    {{ $comment->created_at ? $comment->created_at->format('M d, Y') : 'Date not available' }}:</p>
                    <p>{{ $comment->commentBody }}</p>
                
                    <img src="#" style="width: 30px; height: 30px; margin-right: 10px;" alt="Author Avatar">
                    {{-- <!-- Avatar Image for Comment -->
                    @if($comment->author && $comment->author->images->where('imageType', 'avatar')->first())
                        <img src="{{ $comment->author->images->where('imageType', 'avatar')->first()->getImageUrlAttribute() }}" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;" alt="Author Avatar">
                    @else
                        <img src="{{ asset('images/default-avatar.jpg') }}" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;" alt="Default Avatar">
                    @endif --}}
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
