<x-app-layout title="View Property">
    <main class="container py-5">
        <!-- Property Header -->
        <div class="row mb-4">
            <div class="col-12 bg-light py-4 border-bottom rounded">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <!-- Property Type -->
                        <span class="badge bg-primary mb-2">{{ $property->type }}</span>
                        <!-- Property Address -->
                        <h1 class="mb-3">{{ $property->address }}</h1>
                        <!-- Property Region -->
                        <p class="text-muted mb-0">{{ $property->region }} ({{ $property->postalCode }})</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <!-- Property Price -->
                        <p class="fs-3 fw-bold text-primary mb-2">${{ number_format($property->price) }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Property Gallery -->
        <div class="row mb-5">
            <div class="col-12">
                <!-- Main Image with Carousel -->
                <div id="propertyCarousel" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner rounded shadow-sm">
                        <!-- Loop through property images if there are any -->
                        @foreach($property->images as $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $image->path) }}" class="d-block w-100" alt="Property Image">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Property Details -->
            <div class="col-lg-8">
                <!-- Property Description -->
                <div class="card shadow-sm mb-4 p-3">
                    <h3 class="mb-3">Property Description</h3>
                    <p>{{ $property->description }}</p>
                </div>

                <!-- Building Details -->
                <div class="card shadow-sm mb-4 p-3">
                    <h3 class="mb-3">Building Details</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Year Built:</strong> {{ $property->yearBuilt }}</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Bedrooms:</strong> {{ $property->bedroom }}</li>
                                <li class="mb-2"><strong>Bathrooms:</strong> {{ $property->bathroom }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Property Features -->
                <div class="card shadow-sm mb-4 p-3">
                    <h3 class="mb-3">Property Features</h3>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="d-flex align-items-center">
                                <span class="text-success me-2"><i class="fas fa-check-circle"></i></span>
                                <span>Air Conditioning</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="d-flex align-items-center">
                                <span class="text-success me-2"><i class="fas fa-check-circle"></i></span>
                                <span>Swimming Pool</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="d-flex align-items-center">
                                <span class="text-success me-2"><i class="fas fa-check-circle"></i></span>
                                <span>Fireplace</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="d-flex align-items-center">
                                <span class="text-success me-2"><i class="fas fa-check-circle"></i></span>
                                <span>Garage</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Broker Contact -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="mb-3">Contact Broker</h3>
                        <div class="text-center mb-4">
                            <!-- Broker Information -->
                            <img src="{{ asset('storage/' . $property->realtor->avatar) }}" alt="{{ $property->realtor->name }}" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                            <h4>{{ $property->realtor->name }}</h4>
                            <p class="text-muted">Certified Real Estate Broker, AEO</p>
                            <p class="mb-3">{{ $property->realtor->agency }}</p>
                            <a href="tel:{{ $property->realtor->phone }}" class="btn btn-primary w-100 mb-2">
                                <i class="fas fa-phone me-2"></i>{{ $property->realtor->phone }}
                            </a>
                            <a href="mailto:{{ $property->realtor->email }}" class="btn btn-outline-primary w-100">
                                <i class="fas fa-envelope me-2"></i>Send Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
