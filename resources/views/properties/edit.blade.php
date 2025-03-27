<x-app-layout>
    <x-slot name="title">Edit A Property</x-slot>

    <div class="container mt-4">
        <h2>Edit Property</h2>
        <form action="{{ route('properties.update', $property->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')  

            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $property->address) }}" required>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Region -->
            <div class="mb-3">
                <label for="region" class="form-label">Region</label>
                <select class="form-select @error('region') is-invalid @enderror" id="region" name="region" required>
                    <option value="Montreal" {{ $property->region == 'Montreal' ? 'selected' : '' }}>Montreal</option>
                    <option value="Laval" {{ $property->region == 'Laval' ? 'selected' : '' }}>Laval</option>
                    <option value="Longueuil" {{ $property->region == 'Longueuil' ? 'selected' : '' }}>Longueuil</option>
                    <option value="Brossard" {{ $property->region == 'Brossard' ? 'selected' : '' }}>Brossard</option>
                </select>
                @error('region')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $property->price) }}" required>
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Type -->
            <div class="mb-3">
                <label for="type" class="form-label">Property Type</label>
                <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" required>
                    <option value="Residential" {{ $property->type == 'Residential' ? 'selected' : '' }}>Residential</option>
                    <option value="Farm/Country Property" {{ $property->type == 'Farm/Country Property' ? 'selected' : '' }}>Farm/Country Property</option>
                    <option value="Commercial" {{ $property->type == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Bedroom -->
            <div class="mb-3">
                <label for="bedroom" class="form-label">Bedrooms</label>
                <select class="form-select @error('bedroom') is-invalid @enderror" id="bedroom" name="bedroom">
                    <option value="1" {{ $property->bedroom == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $property->bedroom == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $property->bedroom == '3' ? 'selected' : '' }}>3</option>
                </select>
                @error('bedroom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Bathroom -->
            <div class="mb-3">
                <label for="bathroom" class="form-label">Bathrooms</label>
                <select class="form-select @error('bathroom') is-invalid @enderror" id="bathroom" name="bathroom">
                    <option value="1" {{ $property->bathroom == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ $property->bathroom == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ $property->bathroom == '3' ? 'selected' : '' }}>3</option>
                </select>
                @error('bathroom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Year Built -->
            <div class="mb-3">
                <label for="yearBuilt" class="form-label">Year Built</label>
                <input type="number" class="form-control @error('yearBuilt') is-invalid @enderror" id="yearBuilt" name="yearBuilt" value="{{ old('yearBuilt', $property->yearBuilt) }}" required>
                @error('yearBuilt')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $property->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Property</button>
        </form>
    </div>
</x-app-layout>