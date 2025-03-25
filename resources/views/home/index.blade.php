@extends('layouts.app', ['cssClass' => 'home'])

@section('title', 'Home Page')
@section('content')
<main>
  <section class="hero-section" style="background-image: url('img/1920.jpeg');">
    <div class="container">
      <h1 class="mb-30">One click away from your future home!</h1>
      <p class="mb-5">Find the property of your dreams</p>
      <div class="col-md-2 col-sm-12">
        <button onclick="window.location.href='properties.html'" class="btn btn-danger w-100">Find</button>
      </div>
    </div>
  </section>
</main>
@endsection