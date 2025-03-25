@extends('layouts.nonavbar')

@section('childContent')
  @include('layouts.partials.header')
  @yield('content')
@endsection