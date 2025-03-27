<x-app-layout title="View Property">
    <main class="container py-5">
        <!-- Property Header -->
        <div class="row mb-4">
            <div class="col-12 bg-light py-4 border-bottom rounded">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="badge bg-primary mb-2">Residential</span>
                        <h1 class="mb-3">1090 Rue du Poitou</h1>
                        <p class="text-muted mb-0">Montréal (Rivière-des-Prairies/Pointe-aux-Trembles)</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <p class="fs-3 fw-bold text-primary mb-2">$749,000</p>
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
                        <div class="carousel-item active">
                            <img src="/img/1924.jpeg" class="d-block w-100" alt="Property Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/1924.jpeg" class="d-block w-100" alt="Property Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/1924.jpeg" class="d-block w-100" alt="Property Image 3">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/1924.jpeg" class="d-block w-100" alt="Property Image 4">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/1924.jpeg" class="d-block w-100" alt="Property Image 5">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/1924.jpeg" class="d-block w-100" alt="Property Image 6">
                        </div>
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
                <!-- Description -->
                <div class="card shadow-sm mb-4 p-3">
                    <h3 class="mb-3">Property Description</h3>
                    <p>Unique 5-bedroom home with garage and 2-storey rear extension. Indoor saltwater in-ground pool, spa, sauna, and impressive solarium that can host 20-30 guests. No humidity issues thanks to the DRY-O-TRO system. Elegant granite and ceramic flooring. Private entrance to the pool area. Built in 1990, well maintained, easy to care for--move-in ready. Located in a quiet Pointe-aux-Trembles neighborhood, close to schools, parks, and services.</p>
                </div>

                <!-- Building Details -->
                <div class="card shadow-sm mb-4 p-3">
                    <h3 class="mb-3">Building Details</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Year Built:</strong> 1965</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Bedrooms:</strong> 5</li>
                                <li class="mb-2"><strong>Bathrooms:</strong> 3</li>
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
                        <h3 class="mb-3">Contact Broker</h3>
                        <div class="text-center mb-4">
                            <img src="/img/avatar-holder.jpeg" alt="NORMAND SHANKS" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                            <h4>NORMAND SHANKS</h4>
                            <p class="text-muted">Certified Real Estate Broker, AEO</p>
                            <p class="mb-3">RE/MAX DU CARTIER INC.</p>
                            <a href="tel:514-992-1779" class="btn btn-primary w-100 mb-2">
                                <i class="fas fa-phone me-2"></i>514 992-1779
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
