<x-app-layout title="Display All Blog Articles">
    <div class="container py-4">
        <h1>All Blog Articles</h1>

        <!-- Display Blog Articles -->
        <div class="row g-4">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card h-100">
                        @foreach($articles as $article)
                        <div class="card">
                            <div class="card-body">
                                @foreach($article->images as $image)
                                @if($image->imageType === 'illustration') 
                                <img src="{{ asset('img/blogs/' . basename($image->imagePath)) }}" class="card-img-top" alt="Article Image" style="height: 200px; object-fit: cover;"> 
                                @endif
                            @endforeach
                
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $article->body }}</p>
                            </div>
                        </div>
                    @endforeach
                    
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">
                                    {{ Str::limit(strip_tags($article->body), 150) }} <!-- Excerpt -->
                                </p>
                                <p class="card-text text-muted d-flex align-items-center">
                                    <!-- Author Info -->
                                    {{ $article->author->firstName }} {{ $article->author->lastName }}
                                </p>                                
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('blogs.show', $article->blogId) }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination (if applicable) -->
        @if($articles->hasPages())
            <nav class="mt-4">
                {{ $articles->links() }}
            </nav>
        @endif
    </div>
</x-app-layout>

