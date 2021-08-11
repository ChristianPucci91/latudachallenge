@extends('layouts.app')

@section('content')
  <div class="auth-container">

    <section class="login" style="width:100%;">
      <div class="img-header-mobile">
        <img src="{{asset('storage/img/logo-bianco.png')}}" alt="">
      </div>
      <div class="login-box">

        <div class="img-background">
          <img class="login-logo" src="{{asset('storage/img/vettori-background.png')}}" alt="">
          <img class="login-logo-mobile" src="{{asset('storage/img/vettori-background-login.png')}}" alt="">
        </div>
        <form class="form-signin" method="POST" action="{{ route('login') }}">
          @csrf

          <div class="text-center mb-4 title-mobile">
            {{-- <img class="mb-4" src="{{asset('storage/img/Angelini_Logo.jpg')}}" alt="" width="140" height="140"> --}}
            <h1 class="h3 mb-3 font-weight-normal text-login-color">Login to account</h1>

          </div>

          <div class="form-label-group">
            {{-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> --}}
            <input style="background:  #e7e7e7;color:#4c4c4c;"id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail Address">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            {{-- <label for="inputEmail">Email address</label> --}}

          </div>

          <div class="form-label-group">
            {{-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> --}}
            <input style="background:  #e7e7e7;color:#4c4c4c;" id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            {{-- <label for="inputPassword">Password</label> --}}
          </div>

          <div id="login_info" class="checkbox mb-3">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}  style="margin-right:15px;">

            <label class="form-check-label" for="remember" style="color:#4c4c4c;">
                {{ __('Remember Me') }}
            </label>

            {{-- <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label> --}}
          </div>
          <div class="bottom-login-form">
          <button class="btn login-btn" type="submit">Login</button>
          @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#4c4c4c;">
                  {{ __('Forgot Your Password?') }}
              </a>
          @endif
          <div id="login_info2" class="checkbox mb-3">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}  style="margin-right:15px;">

            <label class="form-check-label" for="remember" style="color:#4c4c4c;">
                {{ __('Remember Me') }}
            </label>

            {{-- <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label> --}}
          </div>

          {{-- <p class="mt-5 mb-3 text-muted text-center">&copy; MTH - TheBrightSideOfTheMood 2021</p> --}}
          </div>
        </form>


      </div>

    </section>
  </div>
@endsection
