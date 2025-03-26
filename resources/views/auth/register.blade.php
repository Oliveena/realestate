<x-guest-layout title="Register">
  <h1>Sign up</h1>
  <form class="custom-form" method="post">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="firstName" class="form-label">First name</label>
        <input type="text" class="form-control" id="firstName" required />
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastName" class="form-label">Last name</label>
        <input type="text" class="form-control" id="lastName" required />
      </div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Your email address</label>
      <input type="email" class="form-control" id="email" required />
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Your password</label>
      <input
        type="password"
        class="form-control"
        id="password"
        required
      />
    </div>
    <div class="mb-3">
      <label for="confirmPassword" class="form-label"
        >Confirm your password</label
      >
      <input
        type="password"
        class="form-control"
        id="confirmPassword"
        required
      />
    </div>
    <button type="submit" class="btn btn-danger btn-submit">
      Submit
    </button>
  </form>

  <x-slot:footerLinks>
    Already have an account? -
    <a href="{{ route('login')}}"> Click here to login </a>
</x-slot:footerLinks>

</x-guest-layout>