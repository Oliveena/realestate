<x-app-layout title="Display My Blog Articles">
    <div class="container py-4">
        <h1>All Blog Articles</h1>

        <!-- Display Blog Articles -->
        <div class="row g-4">
            @foreach ($articles as $article)
                @if(auth()->check() && $article->blogAuthorId === auth()->id()) <!-- Check if the article is authored by the authenticated user -->
                    <div class="col-md-4"> <!-- Add grid column to ensure proper layout -->
                        <div class="card h-100">
                            <!-- Card Body -->
                            <div class="card-body d-flex flex-column">
                                <div class="flex-grow-1">
                                    <!-- Display Image if Available -->
                                    @foreach($article->images as $image)
                                        @if($image->imageType === 'illustration')
                                            <img src="{{ asset('img/blogs/' . basename($image->imagePath)) }}" class="card-img-top" alt="Article Image" style="height: 200px; object-fit: cover;">
                                        @endif
                                    @endforeach

                                    <!-- Article Title and Excerpt -->
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text">
                                        {{ Str::limit(strip_tags($article->body), 150) }} <!-- Excerpt -->
                                    </p>
                                    <p class="card-text text-muted d-flex align-items-center">
                                        <!-- Author Info -->
                                        {{ $article->author->firstName }} {{ $article->author->lastName }}
                                    </p>
                                </div>

                                <!-- Read More Button -->
                                <div class="mt-3">
                                    <a href="{{ route('blogs.show', $article->blogId) }}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Pagination below the articles -->
        <div class="mt-4">
            @if($articles->hasPages())
                <nav>
                    {{ $articles->links() }} <!-- Laravel Pagination Links -->
                </nav>
            @endif
        </div>
    </div>
</x-app-layout>
