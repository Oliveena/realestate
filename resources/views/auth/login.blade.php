@extends('layouts.nonavbar', ['cssClass' => 'sign'])
@section('title', 'Sign In')
@section('childContent')
<main style="background-image: url('img/1921.jpg')">
<div class="container d-flex align-items-center" style="height: calc(110vh - 56px);">
    <div class="form-container">
        <h1>Login to your account</h1>
        <form class="custom-form">
            <div class="mb-3">
                <label for="email" class="form-label">Your email address</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Your password</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-danger btn-submit">Submit</button>
        </form>
        <div class="text-center mt-3">
            <a href="#" class="text-muted">Forgot your password?</a>
        </div>
        <div class="text-center mt-3">
          <a href="index.html" class="text-muted">Back</a>
      </div>
    </div>
</div>
</main>
@endsection