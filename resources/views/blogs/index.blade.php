<x-app-layout title="Display All Blog Articles">
    <div class="container py-4">
        <h1>All Blog Articles</h1>

        <!-- Only user has permission to create blogs -->
        @auth
            <div class="mb-3">
                <a href="{{ route('blogs.create') }}" class="btn btn-success">Create A Blog Article</a>
            </div>
        @endauth


        <!-- Display Blog Articles -->
        <div class="row g-4">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1">
                                @if($article->images->isIllustration())
                                    <img src="{{ asset('img/blogs/' . basename($article->images->imagePath)) }}" class="card-img-top" alt="Article Image" style="height: 200px; object-fit: cover;">
                                @endif
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">
                                    {{ Str::limit(strip_tags($article->body), 150) }}
                                </p>
                                <p class="card-text text-muted d-flex align-items-center">
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

        <!-- Pagination below the articles -->
        <div class="mt-4">
            @if($articles->hasPages())
                <nav>
                    {{ $articles->links() }}
                </nav>
            @endif
        </div>
    </div>
</x-app-layout>
