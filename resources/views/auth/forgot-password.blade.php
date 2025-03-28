<x-guest-layout title="Forgot Password">
    <h1>Reset Password</h1>
    <div class="mb-4 text-sm text-gray-600">
        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link.
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="custom-form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                   id="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-danger btn-submit">
            Send Password Reset Link
        </button>
    </form>

    <div class="text-center mt-3">
        <a href="{{ route('login') }}" class="text-muted">Back to Login</a>
    </div>

    <x-slot:footerLinks>
        Remember your password? -
        <a href="{{ route('login') }}">Back to Login</a>
    </x-slot:footerLinks>
</x-guest-layout> 