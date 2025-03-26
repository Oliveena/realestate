<x-app-layout title="Search Property">
    <main>
        <!-- Search and Filter Section -->
        <div class="container-fluid py-4">
            <div class="row">
                <!-- Filter Sidebar -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Criteria</h5>
                            <form>
                                <!-- Location -->
                                <div class="mb-4">
                                    <label class="form-label">Location</label>
                                    <select class="form-select mb-3">
                                        <option selected>Regions</option>
                                        <option>Montreal</option>
                                        <option>Laval</option>
                                        <option>Longueuil</option>
                                        <option>Brossard</option>
                                        <option>Boucherville</option>
                                    </select>
                                </div>
    
                                <!-- Price Range -->
                                <div class="mb-4">
                                    <label class="form-label">Price Range</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" placeholder="Min">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" placeholder="Max">
                                    </div>
                                </div>
    
                                <!-- Property Type -->
                                <div class="mb-4">
                                    <label class="form-label">Property Type</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="residential">
                                        <label class="form-check-label" for="residential">Residential</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="farm">
                                        <label class="form-check-label" for="farm">Farm / Country Property</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="multiplex">
                                        <label class="form-check-label" for="multiplex">Multiplex</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="commercial">
                                        <label class="form-check-label" for="commercial">Commercial / Industrial</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="land">
                                        <label class="form-check-label" for="land">Land</label>
                                    </div>
                                </div>
    
                                <!-- Property Details -->
                                <div class="mb-4">
                                    <label class="form-label">Property Details</label>
                                    <select class="form-select mb-3">
                                        <option selected>Number of bedrooms</option>
                                        <option>1+</option>
                                        <option>2+</option>
                                        <option>3+</option>
                                        <option>4+</option>
                                    </select>
                                    <select class="form-select">
                                        <option selected>Number of bathrooms</option>
                                        <option>1+</option>
                                        <option>2+</option>
                                        <option>3+</option>
                                        <option>4+</option>
                                    </select>
                                </div>
    
                                <div class="d-grid gap-2">
                                    <button class="btn btn-outline-secondary" type="reset">Reset</button>
                                    <button class="btn btn-danger" type="submit">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
                <!-- Property Listings -->
                <div class="col-md-9">
                    <!-- Property Cards -->
                    <div class="row g-4">
                        <!-- Property Card 1 -->
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="position-relative">
                                    <span class="position-absolute top-0 start-0 badge bg-primary m-2">New</span>
                                    <img src="/img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                                    <button class="btn position-absolute top-0 end-0 m-2 text-white">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">$499,000</h5>
                                        <p class="card-text">Duplex</p>
                                        <p class="card-text text-muted">1999 Av. Drouin, Québec (Beauport)</p>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted border-top pt-2">
                                        <span><i class="fas fa-bed"></i> 2</span>
                                        <span><i class="fas fa-bath"></i> 1</span>
                                        <span><i class="fas fa-ruler-combined"></i> 1,045 ft²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Property Card 2 -->
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="position-relative">
                                    <span class="position-absolute top-0 start-0 badge bg-primary m-2">New</span>
                                    <img src="/img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                                    <button class="btn position-absolute top-0 end-0 m-2 text-white">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">$614,924 +GST/QST</h5>
                                        <p class="card-text">Two-storey house</p>
                                        <p class="card-text text-muted">27 Ch. du Graphite, L'Ange-Gardien</p>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted border-top pt-2">
                                        <span><i class="fas fa-bed"></i> 3</span>
                                        <span><i class="fas fa-bath"></i> 2</span>
                                        <span><i class="fas fa-ruler-combined"></i> 1,794 ft²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Property Card 3 -->
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="position-relative">
                                    <span class="position-absolute top-0 start-0 badge bg-primary m-2">New</span>
                                    <img src="/img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                                    <button class="btn position-absolute top-0 end-0 m-2 text-white">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">$799,000</h5>
                                        <p class="card-text">Apartment - Condominium</p>
                                        <p class="card-text text-muted">2335 Rue des Équinoxes app. 414, Montréal</p>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted border-top pt-2">
                                        <span><i class="fas fa-bed"></i> 2</span>
                                        <span><i class="fas fa-bath"></i> 2</span>
                                        <span><i class="fas fa-ruler-combined"></i> 105.50 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Property Card 4 -->
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="position-relative">
                                    <span class="position-absolute top-0 start-0 badge bg-primary m-2">New</span>
                                    <img src="/img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                                    <button class="btn position-absolute top-0 end-0 m-2 text-white">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">$499,000</h5>
                                        <p class="card-text">Duplex</p>
                                        <p class="card-text text-muted">1999 Av. Drouin, Québec (Beauport)</p>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted border-top pt-2">
                                        <span><i class="fas fa-bed"></i> 2</span>
                                        <span><i class="fas fa-bath"></i> 1</span>
                                        <span><i class="fas fa-ruler-combined"></i> 1,045 ft²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Property Card 5 -->
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="position-relative">
                                    <span class="position-absolute top-0 start-0 badge bg-primary m-2">New</span>
                                    <img src="/img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                                    <button class="btn position-absolute top-0 end-0 m-2 text-white">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">$614,924 +GST/QST</h5>
                                        <p class="card-text">Two-storey house</p>
                                        <p class="card-text text-muted">27 Ch. du Graphite, L'Ange-Gardien</p>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted border-top pt-2">
                                        <span><i class="fas fa-bed"></i> 3</span>
                                        <span><i class="fas fa-bath"></i> 2</span>
                                        <span><i class="fas fa-ruler-combined"></i> 1,794 ft²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Property Card 6 -->
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="position-relative">
                                    <span class="position-absolute top-0 start-0 badge bg-primary m-2">New</span>
                                    <img src="/img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                                    <button class="btn position-absolute top-0 end-0 m-2 text-white">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">$799,000</h5>
                                        <p class="card-text">Apartment - Condominium</p>
                                        <p class="card-text text-muted">2335 Rue des Équinoxes app. 414, Montréal</p>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted border-top pt-2">
                                        <span><i class="fas fa-bed"></i> 2</span>
                                        <span><i class="fas fa-bath"></i> 2</span>
                                        <span><i class="fas fa-ruler-combined"></i> 105.50 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Property Card 7 -->
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="position-relative">
                                    <span class="position-absolute top-0 start-0 badge bg-primary m-2">New</span>
                                    <img src="/img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                                    <button class="btn position-absolute top-0 end-0 m-2 text-white">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">$799,000</h5>
                                        <p class="card-text">Apartment - Condominium</p>
                                        <p class="card-text text-muted">2335 Rue des Équinoxes app. 414, Montréal</p>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted border-top pt-2">
                                        <span><i class="fas fa-bed"></i> 2</span>
                                        <span><i class="fas fa-bath"></i> 2</span>
                                        <span><i class="fas fa-ruler-combined"></i> 105.50 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Property Card 8 -->
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="position-relative">
                                    <span class="position-absolute top-0 start-0 badge bg-primary m-2">New</span>
                                    <img src="/img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                                    <button class="btn position-absolute top-0 end-0 m-2 text-white">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">$799,000</h5>
                                        <p class="card-text">Apartment - Condominium</p>
                                        <p class="card-text text-muted">2335 Rue des Équinoxes app. 414, Montréal</p>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted border-top pt-2">
                                        <span><i class="fas fa-bed"></i> 2</span>
                                        <span><i class="fas fa-bath"></i> 2</span>
                                        <span><i class="fas fa-ruler-combined"></i> 105.50 m²</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    
                    <!-- Pagination -->
                    <nav class="mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
