<!-- resources/views/properties/images.blade.php -->
<x-app-layout title="Property Images for {{ $property->address }}">
    <div class="container py-4">
        <h1>Images for {{ $property->address }}</h1>

        <div class="row g-4">
            @foreach($images as $image)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $image) }}" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
