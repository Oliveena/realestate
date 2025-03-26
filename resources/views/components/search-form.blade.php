<!-- Filter Criteria Bar -->
<div class="col-12">
  <div class="card shadow-sm">
      <div class="card-body p-3">
          <form 
            action="{{ route('property.search') }}"
            method="GET"
            class="row g-2 align-items-center"
            >
              <div class="col">
                  <select class="form-select">
                      <option selected>Location</option>
                      <option>Montreal</option>
                      <option>Laval</option>
                      <option>Longueuil</option>
                      <option>Brossard</option>
                      <option>Boucherville</option>
                  </select>
              </div>

              <div class="col">
                  <select class="form-select">
                      <option selected>Property Type</option>
                      <option>Residential</option>
                      <option>Farm</option>
                      <option>Multiplex</option>
                      <option>Commercial</option>
                  </select>
              </div>

              <div class="col">
                  <select class="form-select">
                      <option selected>Bedrooms</option>
                      <option>1+</option>
                      <option>2+</option>
                      <option>3+</option>
                      <option>4+</option>
                  </select>
              </div>

              <div class="col">
                  <select class="form-select">
                      <option selected>Bathrooms</option>
                      <option>1+</option>
                      <option>2+</option>
                      <option>3+</option>
                      <option>4+</option>
                  </select>
              </div>

              <div class="col">
                  <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="number" class="form-control" placeholder="From">
                  </div>
              </div>

              <div class="col">
                  <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="number" class="form-control" placeholder="To">
                  </div>
              </div>

              <div class="col-auto">
                  <button class="btn btn-danger" type="submit">Search</button>
              </div>

              <div class="col-auto">
                  <button class="btn btn-outline-secondary" type="reset">Reset</button>
              </div>
          </form>
      </div>
  </div>
</div>