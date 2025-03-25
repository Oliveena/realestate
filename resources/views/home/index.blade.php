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
          <div class="properties-listing col-12">
            <h2>Latest Added Properties</h2>
              <!-- Property Cards -->
              <div class="row g-4">
                  @for($i = 0; $i < 8; $i++)
                    <x-property-item />
                  @endfor
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