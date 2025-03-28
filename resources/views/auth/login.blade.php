<x-guest-layout title="Login">
    <h1>Login to your account</h1>
    <form class="custom-form" method="post" action="{{ route('login.store') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Your email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Your password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="text-center mt-3">
            <a href="{{ route('password.request') }}" class="text-danger text-end d-block mb-3">Forgot your password?</a>
        </div>
        <button type="submit" class="btn btn-danger btn-submit">Submit</button>
    </form>

    <x-slot:footerLinks>
        Don't have an account? -
        <a href="{{ route('register')}}"> Click here to create one</a>
    </x-slot:footerLinks>

</x-guest-layout>