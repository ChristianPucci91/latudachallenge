@extends('layouts.app')

@section('content')

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endpush

<div class="homepage">

  @include('navbar.navbar')
  @include('includes.carousel')

  <div class="home-title">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <img src="{{asset('storage/img/yellowline-home.png')}}" alt="">
  </div>
  <main class="main-parts width-container">

    <section class="section-action">
      <a href="{{route('index-scenari')}}">
        <img src="{{asset('storage/img/scenari-pulsante.png')}}" alt="">
      </a>
    </section>
    <section class="section-action">
      <a href="{{route('index-repository')}}">
        <img src="{{asset('storage/img/repository-pulsante.png')}}" alt="">
      </a>
    </section>
  </main>
</div>
@include('footer.footer')

@endsection
