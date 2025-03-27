<x-guest-layout title="Register">
  <h1>Sign up</h1>
  
  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  @if(session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
  @endif

  <form class="custom-form" method="post" action="{{ route('register.store') }}">
    @csrf
    <div class="row">
      <div class="col-sm-6 mb-1">
        <label for="firstName" class="form-label">First name</label>
        <input type="text" class="form-control @error('firstName') is-invalid @enderror" 
               id="firstName" name="firstName" value="{{ old('firstName') }}" required />
        @error('firstName')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastName" class="form-label">Last name</label>
        <input type="text" class="form-control @error('lastName') is-invalid @enderror" 
               id="lastName" name="lastName" value="{{ old('lastName') }}" required />
        @error('lastName')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Your email address</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" 
             id="email" name="email" value="{{ old('email') }}" required />
      @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="phoneNumber" class="form-label">Phone Number (Optional)</label>
      <input type="tel" class="form-control @error('phoneNumber') is-invalid @enderror" 
             id="phoneNumber" name="phoneNumber" value="{{ old('phoneNumber') }}" 
             placeholder="Enter your phone number" />
      @error('phoneNumber')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Your password</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" 
             id="password" name="password" required />
      @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="confirmPassword" class="form-label">Confirm your password</label>
      <input type="password" class="form-control" 
             id="confirmPassword" name="password_confirmation" required />
    </div>
    <div class="mb-3">
      <label for="city" class="form-label">City</label>
      <select class="form-control @error('city') is-invalid @enderror" 
              id="city" name="city" required>
        <option value="">Select a city</option>
        <option value="Montreal" {{ old('city') == 'Montreal' ? 'selected' : '' }}>Montreal</option>
        <option value="Laval" {{ old('city') == 'Laval' ? 'selected' : '' }}>Laval</option>
        <option value="Longueuil" {{ old('city') == 'Longueuil' ? 'selected' : '' }}>Longueuil</option>
        <option value="Brossard" {{ old('city') == 'Brossard' ? 'selected' : '' }}>Brossard</option>
        <option value="Boucherville" {{ old('city') == 'Boucherville' ? 'selected' : '' }}>Boucherville</option>
      </select>
      @error('city')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="role" class="form-label">Role</label>
      <select class="form-control @error('role') is-invalid @enderror" 
              id="role" name="role" required>
        <option value="">Select a role</option>
        <option value="Realtor" {{ old('role') == 'Realtor' ? 'selected' : '' }}>Realtor</option>
        <option value="Buyer" {{ old('role') == 'Buyer' ? 'selected' : '' }}>Buyer</option>
      </select>
      @error('role')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-danger btn-submit">Submit</button>
  </form>

  <x-slot:footerLinks>
    Already have an account? -
    <a href="{{ route('login')}}"> Click here to login </a>
  </x-slot:footerLinks>
</x-guest-layout>