<div class="property-item col-md-3">
    <div class="card h-100">
        <div class="position-relative">
            <a href="{{ route('property.show', $id) }}">
            @if(count($images) > 0)
                <img src="{{ asset('img/properties/' . basename($images[0]->imagePath)) }}" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
            @else
                <img src="{{ asset('img/properties/collection_img.png') }}" class="card-img-top" alt="No Image Available" style="height: 200px; object-fit: cover;">
            @endif
            </a>
        </div>
        <div class="card-body d-flex flex-column">
            <div class="flex-grow-1">
                <h5 class="card-title">{{ $price }}</h5>
                <p class="card-text">{{ $type }}</p>
                <p class="card-text text-muted">{{ $address }}</p>
            </div>
            <div class="d-flex justify-content-between text-muted border-top pt-2">
                @if($bedrooms)
                    <span><i class="fas fa-bed"></i> {{ $bedrooms }}</span>
                @else
                    <span><i class="fas fa-bed"></i> --</span>
                @endif
                
                @if($bathrooms)
                    <span><i class="fas fa-bath"></i> {{ $bathrooms }}</span>
                @else
                    <span><i class="fas fa-bath"></i> --</span>
                @endif
                
                <span class="bookmark-icon"><i class="far fa-heart"></i></span>
            </div>
        </div>
    </div>
</div>