@if (\Session::has('success'))
  <div class="alert alert-success fade-message">
      <ul>
          <li>{!! \Session::get('success') !!}</li>
      </ul>
  </div>

  <script type="application/javascript">
  $(function(){
      setTimeout(function() {
          $('.fade-message').slideUp();
      }, 3000);
  });
  </script>

@endif
