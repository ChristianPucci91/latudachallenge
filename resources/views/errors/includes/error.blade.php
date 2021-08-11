@if (\Session::has('error'))
  <div class="alert alert-danger fade-message">
      <ul>
          <li>{!! \Session::get('error') !!}</li>
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
