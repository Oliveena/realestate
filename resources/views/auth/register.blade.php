<x-guest-layout title="Register">
  <h1>Sign up</h1>
  <form class="custom-form" method="post" action="{{ route('register.store') }}">
    @csrf
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="firstName" class="form-label">First name</label>
        <input type="text" class="form-control" id="firstName" name="firstName" required />
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastName" class="form-label">Last name</label>
        <input type="text" class="form-control" id="lastName" name="lastName" required />
      </div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Your email address</label>
      <input type="email" class="form-control" id="email" name="email" required />
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Your password</label>
      <input
        type="password"
        class="form-control"
        id="password"
        name="password"
        required
      />
    </div>
    <div class="mb-3">
      <label for="confirmPassword" class="form-label">Confirm your password</label>
      <input
        type="password"
        class="form-control"
        id="confirmPassword"
        name="password_confirmation"
        required
      />
    </div>
    <div class="mb-3">
      <label for="city" class="form-label">City</label>
      <select class="form-control" id="city" name="city" required>
        <option value="Montreal">Montreal</option>
        <option value="Laval">Laval</option>
        <option value="Longueuil">Longueuil</option>
        <option value="Brossard">Brossard</option>
        <option value="Boucherville">Boucherville</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="role" class="form-label">Role</label>
      <select class="form-control" id="role" name="role" required>
        <option value="Realtor">Realtor</option>
        <option value="Buyer">Buyer</option>
      </select>
    </div>
    <button type="submit" class="btn btn-danger btn-submit">Submit</button>
  </form>

  <x-slot:footerLinks>
    Already have an account? -
    <a href="{{ route('login')}}"> Click here to login </a>
  </x-slot:footerLinks>
</x-guest-layout>