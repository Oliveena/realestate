<x-app-layout title="Add new property">
<main>
    <div class="container my-5">
        <h2 class="mb-4">Add new property</h2>
        
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Basic Property Information -->
                            <div class="row mb-4">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group @error('property_type') has-error @enderror">
                                        <label for="propertyType" class="form-label">Property Type</label>
                                        <select class="form-select" id="propertyType" name="property_type" required>
                                            <option value="" selected disabled>Select Type</option>
                                            <option value="residential" {{ old('property_type') == 'residential' ? 'selected' : '' }}>Residential</option>
                                            <option value="commercial" {{ old('property_type') == 'commercial' ? 'selected' : '' }}>Commercial</option>
                                            <option value="industrial" {{ old('property_type') == 'industrial' ? 'selected' : '' }}>Industrial</option>
                                            <option value="land" {{ old('property_type') == 'land' ? 'selected' : '' }}>Land</option>
                                            <option value="multiplex" {{ old('property_type') == 'multiplex' ? 'selected' : '' }}>Multiplex</option>
                                        </select>
                                        <p class="error-message">{{ $errors->first('property_type') }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-group @error('year_built') has-error @enderror">
                                        <label for="yearBuilt" class="form-label">Year Built</label>
                                        <input type="number" class="form-control" id="yearBuilt" name="year_built" 
                                               value="{{ old('year_built') }}" placeholder="Enter year built">
                                        <p class="error-message">{{ $errors->first('year_built') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <h3>Criteria</h3>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group @error('price') has-error @enderror">
                                        <label for="price" class="form-label">Price ($)</label>
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="number" class="form-control" id="price" name="price" 
                                                   value="{{ old('price') }}" placeholder="Enter price" required>
                                        </div>
                                        <p class="error-message">{{ $errors->first('price') }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group @error('bedrooms') has-error @enderror">
                                        <label for="bedrooms" class="form-label">Bedrooms</label>
                                        <select class="form-select" id="bedrooms" name="bedrooms" required>
                                            <option value="" selected disabled>Select bedrooms</option>
                                            <option value="1" {{ old('bedrooms') == '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ old('bedrooms') == '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ old('bedrooms') == '3' ? 'selected' : '' }}>3</option>
                                        </select>
                                        <p class="error-message">{{ $errors->first('bedrooms') }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group @error('bathrooms') has-error @enderror">
                                        <label for="bathrooms" class="form-label">Bathrooms</label>
                                        <select class="form-select" id="bathrooms" name="bathrooms" required>
                                            <option value="" selected disabled>Select bathrooms</option>
                                            <option value="1" {{ old('bathrooms') == '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ old('bathrooms') == '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ old('bathrooms') == '3' ? 'selected' : '' }}>3</option>
                                        </select>
                                        <p class="error-message">{{ $errors->first('bathrooms') }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Location Information -->
                            <div class="row mb-4">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group @error('state') has-error @enderror">
                                        <label for="state" class="form-label">Regions</label>
                                        <select class="form-select" id="state" name="state" required>
                                            <option value="" selected disabled>Select Region</option>
                                            <option value="QC" {{ old('state') == 'QC' ? 'selected' : '' }}>Montreal</option>
                                            <option value="ON" {{ old('state') == 'ON' ? 'selected' : '' }}>Laval</option>
                                            <option value="BC" {{ old('state') == 'BC' ? 'selected' : '' }}>Longueuil</option>
                                            <option value="AB" {{ old('state') == 'AB' ? 'selected' : '' }}>Brossard</option>
                                            <option value="MB" {{ old('state') == 'MB' ? 'selected' : '' }}>Boucherville</option>
                                        </select>
                                        <p class="error-message">{{ $errors->first('state') }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group @error('postal_code') has-error @enderror">
                                        <label for="postalCode" class="form-label">Postal Code</label>
                                        <input type="text" class="form-control" id="postalCode" name="postal_code" 
                                               value="{{ old('postal_code') }}" placeholder="Postal code">
                                        <p class="error-message">{{ $errors->first('postal_code') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-12 mb-3">
                                    <div class="form-group @error('address') has-error @enderror">
                                        <label for="address" class="form-label">Full Address</label>
                                        <input type="text" class="form-control" id="address" name="address" 
                                               value="{{ old('address') }}" placeholder="Enter complete address" required>
                                        <p class="error-message">{{ $errors->first('address') }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Property Description -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="form-group @error('description') has-error @enderror">
                                        <label for="description" class="form-label">Detailed Description</label>
                                        <textarea class="form-control" id="description" name="description" 
                                                  rows="5" placeholder="Detailed description of the property">{{ old('description') }}</textarea>
                                        <p class="error-message">{{ $errors->first('description') }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Property Images -->
                            <div class="row mb-4">
                                <div class="col-12 mb-3">
                                    <div class="form-group @error('images.*') has-error @enderror">
                                        <label class="form-label">Property Images</label>
                                        <div class="d-flex align-items-center justify-content-center border rounded p-4" 
                                             style="min-height: 200px;">
                                            <div class="text-center">
                                                <i class="fas fa-cloud-upload-alt fa-3x mb-3 text-muted"></i>
                                                <p class="mb-2">Drag &amp; drop your images here</p>
                                                <p class="text-muted small">or</p>
                                                <button type="button" class="btn btn-outline-secondary" 
                                                        onclick="document.getElementById('images').click()">Browse Files</button>
                                                <input type="file" id="images" name="images[]" multiple 
                                                       accept="image/*" style="display: none">
                                                <p class="text-muted small mt-2">JPEG or PNG (max 5MB each)</p>
                                            </div>
                                        </div>
                                        <p class="error-message">
                                            @foreach($errors->get('images.*') as $imageErrors)
                                                @foreach($imageErrors as $err)
                                                    {{ $err }}<br>
                                                @endforeach
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <div id="imagePreviews" class="row"></div>
                            </div>

                            <!-- Listing Options -->
                            <div class="row mb-4">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="published" 
                                               name="published" value="1" {{ old('published') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="published">Publish this listing</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="reset" class="btn btn-outline-secondary me-2">Reset</button>
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.getElementById('images');
    const imagePreviews = document.getElementById('imagePreviews');

    imageInput.addEventListener('change', function(e) {
        imagePreviews.innerHTML = '';
        [...e.target.files].forEach((file, index) => {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const col = document.createElement('div');
                    col.className = 'col-md-4 mb-3';
                    col.innerHTML = `
                        <div class="card">
                            <img src="${e.target.result}" class="card-img-top" alt="Preview">
                            <div class="card-body">
                                <button type="button" class="btn btn-sm btn-danger remove-image" data-index="${index}">
                                    Remove
                                </button>
                            </div>
                        </div>
                    `;
                    imagePreviews.appendChild(col);
                };
                reader.readAsDataURL(file);
            }
        });
    });

    // Handle remove image button clicks
    imagePreviews.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-image')) {
            const index = e.target.dataset.index;
            const dt = new DataTransfer();
            const { files } = imageInput;
            
            for (let i = 0; i < files.length; i++) {
                if (i !== parseInt(index)) {
                    dt.items.add(files[i]);
                }
            }
            
            imageInput.files = dt.files;
            e.target.closest('.col-md-4').remove();
        }
    });
});
</script>
@endpush
</x-app-layout>
