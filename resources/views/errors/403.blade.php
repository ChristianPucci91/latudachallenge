@extends('layouts.app')

@section('content')

  <div class="homepage">
    @include('navbar.navbar')
    @include('jumbotron.jumbotron')
      <h1 style="color:#fff;">Non hai i permessi per accedere a questa pagina</h1>
    @include('footer.footer')
  </div>


@endsection
