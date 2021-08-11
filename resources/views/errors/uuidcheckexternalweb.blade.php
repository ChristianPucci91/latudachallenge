@extends('layouts.app')

@section('content')

  <div class="homepage">
    @include('navbar.navbar')
    @include('jumbotron.jumbotron')
    <div style="height:calc( 100vh - 300px);" class="width-container">
      <h1 class="is-white" style="text-align: left;
    margin: 40px 0;">Sorry,</h1>
        <h1 class="is-white" style="text-align: left;
      margin: 40px 0;">This website is only accessible to Angelini members</h1>
    </div>
    @include('footer.footer')
  </div>

@endsection
