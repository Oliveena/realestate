@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Messages</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Message Form -->
                    <form method="POST" action="{{ route('messages.store') }}" class="mb-4">
                        @csrf
                        <div class="form-group">
                            <label for="receiverId">To:</label>
                            <select name="receiverId" id="receiverId" class="form-control @error('receiverId') is-invalid @enderror" required>
                                <option value="">Select a user</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->firstName }} {{ $user->lastName }}</option>
                                @endforeach
                            </select>
                            @error('receiverId')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="propertyId">Property:</label>
                            <select name="propertyId" id="propertyId" class="form-control @error('propertyId') is-invalid @enderror" required>
                                <option value="">Select a property</option>
                                @foreach($properties as $property)
                                    <option value="{{ $property->propertyId }}">{{ $property->title }}</option>
                                @endforeach
                            </select>
                            @error('propertyId')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="messBody">Message:</label>
                            <textarea name="messBody" id="messBody" class="form-control @error('messBody') is-invalid @enderror" rows="3" required maxlength="500"></textarea>
                            @error('messBody')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>

                    <!-- Messages List -->
                    <div class="messages-list">
                        <h4>Your Messages</h4>
                        @forelse($messages as $message)
                            <div class="message-item mb-3 p-3 border rounded">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <strong>{{ $message->senderName }}</strong>
                                        <small class="text-muted">to {{ $message->receiver->firstName }} {{ $message->receiver->lastName }}</small>
                                    </div>
                                    <small class="text-muted">{{ $message->created_at->format('M d, Y H:i') }}</small>
                                </div>
                                <p class="mb-0 mt-2">{{ $message->messBody }}</p>
                                <small class="text-muted">Property: {{ $message->property->title }}</small>
                            </div>
                        @empty
                            <p>No messages yet.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 