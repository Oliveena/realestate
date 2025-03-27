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
                            <form action="{{ route('property.search') }}" method="GET">
                                <!-- Location -->
                                <div class="mb-4">
                                    <label class="form-label">Location</label>
                                    <select class="form-select mb-3" name="location">
                                        <option value="">All Regions</option>
                                        <option value="Montreal" {{ request('location') == 'Montreal' ? 'selected' : '' }}>Montreal</option>
                                        <option value="Laval" {{ request('location') == 'Laval' ? 'selected' : '' }}>Laval</option>
                                        <option value="Longueuil" {{ request('location') == 'Longueuil' ? 'selected' : '' }}>Longueuil</option>
                                        <option value="Brossard" {{ request('location') == 'Brossard' ? 'selected' : '' }}>Brossard</option>
                                        <option value="Boucherville" {{ request('location') == 'Boucherville' ? 'selected' : '' }}>Boucherville</option>
                                    </select>
                                </div>
    
                                <!-- Price Range -->
                                <div class="mb-4">
                                    <label class="form-label">Price Range</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" name="min_price" placeholder="Min" value="{{ request('min_price') }}">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" name="max_price" placeholder="Max" value="{{ request('max_price') }}">
                                    </div>
                                </div>
    
                                <!-- Property Type -->
                                <div class="mb-4">
                                    <label class="form-label">Property Type</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="residential" name="property_type[]" value="Residential" {{ in_array('Residential', (array)request('property_type')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="residential">Residential</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="farm" name="property_type[]" value="Farm/Country Property" {{ in_array('Farm/Country Property', (array)request('property_type')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="farm">Farm / Country Property</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="multiplex" name="property_type[]" value="Multiplex" {{ in_array('Multiplex', (array)request('property_type')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="multiplex">Multiplex</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="commercial" name="property_type[]" value="Commercial/Industrial" {{ in_array('Commercial/Industrial', (array)request('property_type')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="commercial">Commercial / Industrial</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="land" name="property_type[]" value="Land" {{ in_array('Land', (array)request('property_type')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="land">Land</label>
                                    </div>
                                </div>
    
                                <!-- Property Details -->
                                <div class="mb-4">
                                    <label class="form-label">Property Details</label>
                                    <select class="form-select mb-3" name="bedrooms">
                                        <option value="">Any bedrooms</option>
                                        <option value="1" {{ request('bedrooms') == '1' ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ request('bedrooms') == '2' ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ request('bedrooms') == '3' ? 'selected' : '' }}>3</option>
                                    </select>
                                    <select class="form-select" name="bathrooms">
                                        <option value="">Any bathrooms</option>
                                        <option value="1" {{ request('bathrooms') == '1' ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ request('bathrooms') == '2' ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ request('bathrooms') == '3' ? 'selected' : '' }}>3</option>
                                    </select>
                                </div>
    
                                <div class="d-grid gap-2">
                                    <a href="{{ route('property.search') }}" class="btn btn-outline-secondary">Reset</a>
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
                        @forelse($properties as $property)
                            <x-property-item 
                                price="${{ number_format($property->price) }}"
                                type="{{ $property->type }}"
                                address="{{ $property->address }}, {{ $property->region }}"
                                :bedrooms="$property->bedroom"
                                :bathrooms="$property->bathroom"
                                :id="$property->propertyId"
                                :images="$property->images"
                                :created_at="$property->created_at"
                            />
                        @empty
                            <div class="col-12 text-center py-5">
                                <h3>No properties found matching your criteria</h3>
                                <p>Try adjusting your search filters</p>
                            </div>
                        @endforelse
                    </div>
    
                    
                    <!-- Pagination -->
                    <nav class="mt-4">
                        {{ $properties->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>