<x-app-layout title="View Property">
    <main class="container py-5">
        <!-- Property Header -->
        <div class="row mb-4">
            <div class="col-12 bg-light py-4 border-bottom rounded">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="badge bg-primary mb-2">{{ $property->type }}</span>
                        <h1 class="mb-3">{{ $property->address }}</h1>
                        <p class="text-muted mb-0">{{ $property->region }}</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
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
                        @forelse($property->images as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('img/properties/' . basename($image->imagePath)) }}" class="d-block w-100" alt="Property Image {{ $index + 1 }}" style="height: 500px; object-fit: cover;">
                            </div>
                        @empty
                            <div class="carousel-item active">
                                <img src="{{ asset('img/properties/collection_img.png') }}" class="d-block w-100" alt="No Images Available" style="height: 500px; object-fit: cover;">
                            </div>
                        @endforelse
                    </div>
                    @if($property->images->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>

                <!-- Thumbnail Navigation -->
                @if($property->images->count() > 1)
                    <div class="row mt-3">
                        @foreach($property->images as $index => $image)
                            <div class="col-2">
                                <img src="{{ asset('img/properties/' . basename($image->imagePath)) }}" 
                                    class="img-thumbnail cursor-pointer" 
                                    alt="Thumbnail {{ $index + 1 }}"
                                    style="height: 80px; object-fit: cover; cursor: pointer;"
                                    data-bs-target="#propertyCarousel"
                                    data-bs-slide-to="{{ $index }}">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <!-- Property Details -->
            <div class="col-lg-8">
                <!-- Description -->
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
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Broker Contact -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="text-center mb-3">Contact Broker</h3>
                        <div class="text-center mb-4">
                            <img src="{{ $property->realtor->avatar ? asset('img/avatar/' . basename($property->realtor->avatar)) : asset('img/avatar/avatar-holder.jpeg') }}" 
                                alt="{{ $property->realtor->firstName }} {{ $property->realtor->lastName }}" 
                                class="rounded-circle mb-3" 
                                style="width: 150px; height: 150px; object-fit: cover;">
                            <h4>{{ $property->realtor->firstName }} {{ $property->realtor->lastName }}</h4>
                            <p class="text-muted">Certified Real Estate Broker</p>
                            <p class="mb-3">{{ $property->realtor->company ?? 'Independent Broker' }}</p>
                            <a href="tel:{{ $property->realtor->phoneNumber }}" class="btn btn-primary w-100 mb-2">
                                <i class="fas fa-phone me-2"></i>{{ $property->realtor->phoneNumber }}
                            </a>
                            <a href="#" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#contactModal">
                                <i class="fas fa-envelope me-2"></i>Send Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Contact Modal -->
        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel">Contact Broker</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
