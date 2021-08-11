@extends('layouts.app')

@section('content')
  <div class="homepage">
    @include('navbar.navbar')
    <div class="repository-img">
      <img src="{{asset('storage/img/repository-banner.png')}}" alt="">
      <div class="repository-title">
        <h1>Repository</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <main class="width-container">
      <ul class="row">
       @foreach ($documents as $key => $document)
        <div class="col-12 document @php
          if ($key != 0) {
            echo 'border-top-yellow';
          }
        @endphp">
          <div class="document-icon">
            <img src="{{$document->logo}}" alt="">
          </div>
          <div class="document-title">
            <h1>{{$document->title}}</h1>
            <p>{{$document->description}}</p>
          </div>
          <div class="document-btn">
            <a class="btn btn-primary" href="{{route('download',$document->id)}}">Scarica il file</a>
          </div>
        </div>
       @endforeach
      </ul>
    </main>
    @include('footer.footer')
  </div>
@endsection
