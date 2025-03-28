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
            <small>By {{ $article->author->name }} | 
            {{ $article->created_at ? $article->created_at->format('M d, Y') : 'Date not available' }}</small>
        </p>

        <!-- Article Image -->
        @if($article->images->isIllustration())
            <img src="{{ asset('img/blogs/' . basename($article->images->imagePath)) }}" class="card-img-top" alt="Article Image" style="height: 450px; object-fit: cover;"> 
        @else
            <img src="{{ asset('images/defaultimage.jpg') }}" class="img-fluid" alt="Default Image">
        @endif

        <!-- Edit and Delete options (only if the authenticated user is the author) -->
        @auth
            @if(auth()->user()->id === $article->author->id)  <!-- Check if the logged-in user is the author -->
                <div class="mt-3">
                    <!-- Edit Button -->
                    <a href="{{ route('blogs.edit', $article->blogId) }}" class="btn btn-warning">Edit</a>
                    
                    <!-- Delete Button with Confirmation -->
                    <form action="{{ route('blogs.destroy', $article->blogId) }}" method="POST" style="display: inline;" onsubmit="return confirmDelete();">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @endif
        @endauth

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
                </div>                
                @endforeach
            @else
                <p>No comments yet.</p>
            @endif

            <!-- Comment Form (if logged in) -->
            @auth
            <form action="{{ route('comments.store', ['blogId' => $article->blogId]) }}" method="POST">
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

    <!-- JavaScript for confirmation before delete -->
    <script type="text/javascript">
        function confirmDelete() {
            return confirm("Are you sure you want to delete this article?");
        }
    </script>
</x-app-layout>
