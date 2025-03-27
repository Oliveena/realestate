<x-app-layout>
    <x-slot name="title">Create Blog Article</x-slot>

    <div class="container mt-4">
        <h2>Create New Blog Article</h2>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Body -->
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="6" required></textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Add Article</button>
        </form>
    </div>
</x-app-layout>
