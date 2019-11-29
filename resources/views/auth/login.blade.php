@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class=" row">
  <div class=" login-cont col-6">

    <div class="">

        <img class="img-logic img-fluid"src="img/woman.jpg" alt="">
    </div>

    <div class="show-up">

      <h2 class="Journey"> Join the Journey. Make an impact</h2>

    </div>

    <div class="seen">

        <p> 'You gotta show up if you wanna be seen'</p>

        <img class="logo "src="/img/apeiron_logo.png" alt="">

    </div>

  </div>




  <div class=" t col-6">




    <div class="row justify-content-center">

        <div class="col-md-12  align-self-center">

            <div >
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"  class="col-md-4 col-form-label text-md-right"></label>

                            <div class=" input-data col-md-8">


                              <h2 class="log-in-title">Log In</h2>
                              <p class="register-a"> Spread and support.  </p>
                              <a class="register-color" href="/register">Register</a>


                                <div class="input-holder">

                                <input placeholder="E-Mail Address" id="email" type="email" class=" form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <div class="input-holder">

                        <div class="form-group row">


                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-8">

                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                          </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                              <div class="login-button">
                                <button type="submit" class=" custom-btn btn btn-primary">
                                    {{ __('Log In') }}
                                </button>
                              </div>

                                @if (Route::has('password.request'))

                                    <div class="  login-button">
                                        <a class=" register-color login-password" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="{{ asset ('js/login.js')}}" defer></script>

@endsection
