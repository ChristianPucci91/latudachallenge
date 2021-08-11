@extends('layouts.app')

@section('content')
@include('navbar.navbar')
<style media="screen">
.iframe-box {
 position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%;
}
.video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
<h1>Storyboard1</h1>
<div class="embed-responsive embed-responsive-4by3x">
  <iframe class="embed-responsive-item"src="{{asset('storage/storyboard1/story_html5.html')}}" class="video" width="" height=""></iframe>
</div>
{{-- <div class="containter">

  <div class="row justify-content-center mb-4" style="margin:0;">
  <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-8">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://vimeo.com/event/1041042/embed/9c1675cfa1?autoplay=1" title="Vimeo video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe  src="{{asset('storage/storyboard1/story_html5.html')}}" class="video" width="" height=""></iframe>

    </div>
  </div>
</div>
</div> --}}
@include('footer.footer')
@endsection
