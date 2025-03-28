<x-app-layout title="Display All Blog Articles">
    <div class="container py-4">
        <h1>All Blog Articles</h1>

        <!-- Display Blog Articles -->
        <div class="row g-4">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="position-relative">
                            <!-- Display the Illustration Image for the Blog Article -->
                            @if($article->images->first() && $article->images->first()->isIllustration())
                                <img src="{{ $article->images->first()->getImageUrlAttribute() }}" class="card-img-top" alt="Article Image" style="height: 200px; object-fit: cover;">
                            @else
                                <img src="{{ asset('images/default-image.jpg') }}" class="card-img-top" alt="Default Image" style="height: 200px; object-fit: cover;">
                            @endif
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">
                                    {{ Str::limit(strip_tags($article->body), 150) }} <!-- Excerpt -->
                                </p>
                                <p class="card-text text-muted d-flex align-items-center">
                                    <img src="#" style="width: 30px; height: 30px; margin-right: 10px;" alt="Author Avatar">
                                    <!-- Avatar Image -->
                                    {{-- @if($article->author && $article->author->images->where('imageType', 'avatar')->first())
                                        <img src="{{ $article->author->images->where('imageType', 'avatar')->first()->getImageUrlAttribute() }}" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;" alt="Author Avatar">
                                    @else
                                        <!-- Default avatar when no image exists -->
                                        <img src="{{ asset('images/default-avatar.jpg') }}" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;" alt="Default Avatar">
                                    @endif --}}
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
