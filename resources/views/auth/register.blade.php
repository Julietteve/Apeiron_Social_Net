@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class=" row">
  <div class=" login-cont col-6 d-none d-lg-block ">

    <div class="">

        <img class="img-logic img-fluid"src="img/fly.png" alt="">
    </div>

    <div class="show-up">

      <h2 style="color:#ecf4f4"class="Journey"> Join the Journey. Make an impact</h2>

    </div>

    <div class="seen">

        <p> 'You gotta show up if you wanna be seen'</p>


    </div>

  </div>




  <div class=" col-lg-6">




    <div class="row justify-content-center">

        <div class="col-md-12  align-self-center">


          <div>
              <form method="POST" action="{{ route('register') }}">
                  @csrf


                  <div class="input-holder" >



                  <div class="form-group row">
                      <label  for="name" class="col-md-4 col-form-label text-md-right"></label>

                      <div class="col-md-6">

                        <div style="display: flex;
                        justify-content: center;">
                          <img class="logo image-fluid "src="/img/apeiron_logo.png" alt="">
                        </div>

                        <h2 style="text-align:center"class="log-in-title">Register</h2>
                        <p class="register-a"> Keep on moving. </p>
                        <a class="register-color" href="/login">Log In</a>

                          <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                </div>




                  <div class="input-holder" >

                  <div class="form-group row">
                      <label for="nickname" class="col-md-4 col-form-label text-md-right"></label>

                      <div class="col-md-6">
                          <input placeholder="Nickname" id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>

                          @error('nickname')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  </div>


                  <div class="input-holder" >
                  <div class="form-group row">
                      <label for="country" class="col-md-4 col-form-label text-md-right"></label>

                      <div class="col-md-6">
                          <input placeholder="Country" id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                          @error('country')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                    </div>

                <div class="input-holder" >
                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                      <div class="col-md-6">
                          <input placeholder="E-mail Adress" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  </div>

                <div class="input-holder" >
                  <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                      <div class="col-md-6">
                          <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                    </div>


                      <div class="input-holder" >
                  <div class="form-group row">
                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

                      <div class="col-md-6">
                          <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      </div>
                  </div>
                </div>


                <div class="login-button">
                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button class=" custom-btn btn btn-primary" type="submit">
                              {{ __('Create Account') }}
                          </button>
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
@endsection
