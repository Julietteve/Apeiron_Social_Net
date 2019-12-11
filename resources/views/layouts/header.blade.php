<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Apeiron</title>

      <link rel="shortcut icon" type="image/png" href="/img/apeiron_logo.png">



      <!-- bootstrap CSS-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- FancyBox -->
      <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">

      <!-- Beefup -->
      <link rel="stylesheet" href="css/jquery.beefup.css">


      <!-- Internal CSS -->
      <link rel="stylesheet" href="/css/stylesheet.css">

      <!-- fontawesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

      <!-- Google Fonts CSS -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet"> -->
      <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">

</head>
<body>
  <a name="top"></a>
  <!-- MENU RESPONSIVE -->

  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">

  <a class="navbar-brand" href="/post">

  <img class="logo" src="/img/apeiron_logo.png" alt="">

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" arias-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>




<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <div class="box">
            <form action="/search" method="get" >
              <div class="container-1">
                <span class="icon"><i class="fa fa-search"></i></span>
                <input name="q" placeholder="Search..." value="{{ request('q') }}" type="search" id="search" placeholder="Search..." />
                </div>
            </form>
          </div>






            <li class="nav-item">
              @guest
                  <li style="font-size:1em; font-weight:normal" class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li style="font-size:1em; font-weight:normal" class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li style="font-size:1em; font-weight:normal" class="nav-item dropdown">
                     <img  style="width:15%; border-radius:50%; display:inline" src="{{Auth::user()->profile_pic}}" alt="">
                      <a  style="display:inline"sid="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->nickname }} <span class="caret"></span>
                      </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="">



                              <a class="dropdown-item" href="/profile/{id}">
                                  {{ __('My profile') }}
                              </a>

                              <a class="dropdown-item" href="/profile/{id}/edit">
                                  {{ __('Edit my profile') }}
                              </a>

                              <a class="dropdown-item" href="/faqs">
                                  {{ __('F.A.Qs') }}
                              </a>

                              <a class="dropdown-item" href="/contact">
                                  {{ __('Contact Us') }}
                              </a>

                              <a style="color:#f24534" class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>


                            </div>



                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
              </nav>
            </li>
        </ul>
    </div>




@yield('content')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
