<x-app-layout title="Home Page">
  <main>
    <section class="hero-section" style="background-image: url('img/1920.jpeg');">
      <div class="container">
        <h1 class="mb-30">One click away from your future home!</h1>
        <p class="mb-5">Find the property of your dreams</p>
        <div class="col-md-2 col-sm-12">
          <button onclick="window.location.href='properties.html'" class="btn btn-danger w-100">Find</button>
        </div>
      </div>
    </section>
    
    <!-- Search and Filter Section -->
    <div class="container-fluid py-4">
      <div class="row justify-content-center">
        <x-search-form />


          <!-- Property Listings -->
          <div class="col-12">
              <!-- Property Cards -->
              <div class="row g-4">
                  <!-- Property Card 1 -->
                  <div class="col-md-3">
                      <div class="card h-100">
                          <div class="position-relative">
                              <span class="position-absolute top-0 start-0 badge bg-primary m-2">New</span>
                              <img src="img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
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
                              <img src="img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
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
                              <img src="img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
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
                              <img src="img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
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
                              <img src="img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
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
                              <img src="img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
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
                              <img src="img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
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
                              <img src="img/properties/collection_img.png" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
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
  <x-slot:footerLinks>
    <a href="#">Link 3</a>
    <a href="#">Link 4</a>
</x-slot:footerLinks>

</x-app-layout>