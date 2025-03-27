<x-app-layout title="Display All Properties">
    <div class="container py-4">
        <h1>All Properties</h1>

        <!-- Display Properties -->
        <div class="row g-4">
            @foreach ($properties as $property)
                <div class="col-md-3">
                    <div class="card h-100">
                        <div class="position-relative">
                            <span class="position-absolute top-0 start-0 badge bg-primary m-2">New</span>
                            <img src="{{ asset('storage/' . $property->image) }}" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                            <button class="btn position-absolute top-0 end-0 m-2 text-white">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1">
                                <h5 class="card-title">${{ number_format($property->price, 2) }}</h5>
                                <p class="card-text">{{ $property->type }}</p>
                                <p class="card-text text-muted">{{ $property->address }}</p>
                            </div>
                            <div class="d-flex justify-content-between text-muted border-top pt-2">
                                <span><i class="fas fa-bed"></i> {{ $property->bedrooms }}</span>
                                <span><i class="fas fa-bath"></i> {{ $property->bathrooms }}</span>
                                <span><i class="fas fa-ruler-combined"></i> {{ $property->size }} ft²</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination (if applicable) -->
        @if($properties->hasPages())
            <nav class="mt-4">
                {{ $properties->links() }}
            </nav>
        @endif
    </div>
</x-app-layout>
