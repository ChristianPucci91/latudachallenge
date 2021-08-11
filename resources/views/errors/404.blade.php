@extends('layouts.app')

@section('content')

  <div class="homepage">
    @include('navbar.navbar')
      <div class="not-found">
        <h1 style="color:#304d94;">PAGINA NON TROVATA</h1>
      </div>
    @include('footer.footer')
  </div>
@endsection
