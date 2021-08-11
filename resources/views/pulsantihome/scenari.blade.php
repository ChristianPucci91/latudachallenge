@extends('layouts.app')

@section('content')
  <div class="homepage">
    @include('navbar.navbar')
    <div class="scenari-img">
      <img src="{{asset('storage/img/scenari-banner.png')}}" alt="">
      <div class="scenari-title">
        <h1>Scenari</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>

    <main class="width-container">
      <ul class="row flex-reverse" style="padding:0;">
        {{-- <div class="col-12 column-scenario"> --}}
          <li class="col-12 col-sm-12 col-md-12 col-lg-12  col-xl-6">
            <div class="scenari-text">
              <h1>Titolo scenario 1</h1>
              <img src="{{asset('storage/img/yellowline-home.png')}}" alt="" style="width:auto;">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="btn btn-scenario" href="{{route('scenario1')}}">Vai allo scenario</a>
            </div>
          </li>
          <li class="col-12 col-sm-12 col-md-12 col-lg-12  col-xl-6">
            <img src="{{asset('storage/img/scenari-img-1.png')}}" alt="">
          </li>
        {{-- </div> --}}

      </ul>
      <ul class="row" style="padding:0;">
        {{-- <div class="col-12 column-scenario"> --}}
          <li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <img src="{{asset('storage/img/scenari-img-2.png')}}" alt="">
          </li>
          <li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="scenari-text">
              <h1>Titolo scenario 2</h1>
              <img src="{{asset('storage/img/yellowline-home.png')}}" alt="" style="width:auto;">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="btn btn-scenario" href="{{route('scenario2')}}">Vai allo scenario</a>
            </div>
          </li>

        {{-- </div> --}}

      </ul>
      <ul class="row flex-reverse" style="padding:0;">
        {{-- <div class="col-12 column-scenario"> --}}
          <li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="scenari-text">
              <h1>Titolo scenario 3</h1>
              <img src="{{asset('storage/img/yellowline-home.png')}}" alt="" style="width:auto;">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="btn btn-scenario" href="{{route('scenario3')}}">Vai allo scenario</a>
            </div>
          </li>
          <li class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <img src="{{asset('storage/img/scenari-img-3.png')}}" alt="">
          </li>
        {{-- </div> --}}

      </ul>
    </main>
    @include('footer.footer')
  </div>
@endsection
