@extends('layouts.app')

@section('content')

<div class="container-fluid">
<div class=" row">
  <div class=" login-cont col-7 d-none d-lg-block ">

    <div class="">

        <img class="img-logic img-fluid"src="img/jump.png" alt="">
    </div>

    <div class="show-up">

      <h2 style="color:#ecf4f4" class="Journey"> Join the Journey. Make an impact.</h2>

    </div>

    <div class="seen">

        <p> 'You gotta show up if you wanna be seen'</p>



    </div>

  </div>




  <div class=" container-form col-lg-5">




    <div class="row justify-content-center">

        <div class="col-lg-12  align-self-center">

            <div >
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">


                            <div class=" input-data col-md-8">

                              <div style="display: flex;
                              justify-content: center;">
                                <img class="logo image-fluid "src="/img/apeiron_logo.png" alt="">
                              </div>

                              <h2 style="text-align:center" class="log-in-title">Log In</h2>
                              <p class="register-a"> Spread and support.  </p>
                              <a style="color:#f24534"class="register-color" href="/register">Register</a>


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
                            <div class="col-md-6 col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 col-md-4">

                              <div class="login-button">
                                <button type="submit" class=" custom-btn btn btn-primary">
                                    {{ __('Log In') }}
                                </button>
                              </div>

                                @if (Route::has('password.request'))



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
<!--
<script src="{{ asset ('js/login.js')}}" defer></script> -->

@endsection
