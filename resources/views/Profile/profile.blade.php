@extends ('layouts.header')


@section('content')

<!-- BANNER -->

<div class="banner">
  <img class="img-fluid" width="100%" src="img/banner.jpg" alt="">
</div>


<div class="profiles">
<div class=" container">

<div class="row">

<div class="col-12 col-md-4">

  <div class="row">
  <div class=" col-12 ">



            <div class="profile-data">



              <div class="profile-pic">
                <img src="img/profilepic.png" class="img-fluid" alt="">
              </div>



              <div class="user-name">
                <p>{{Auth::user()->name}}</p>
              </div>

              <div class="profession">
              <p> {{ $user->country}} </p>
                <a href="https://www.wetanz.com/">www.wetanz.com/</a>
              </div>

              <div class="profile-button">

              <button type="button" name="button"class="btn btn-outline-secondary sponsor-button">Sponsor</button>

              </div>

              <div class="follow">
                <p> 2,009 pushes</p>
                <p> 201 follows</p>
                <p> 2,238 followers</p>
              </div>

              <div class="profile-button ">

                  <button type="button" name="button"      class="btn btn-outline-secondary  follow-contact ">Follow</button>
                  <button type="button" name="button"      class="btn btn-outline-secondary  follow-contact ">Contact</button>

                </div>







                <!-- TABS -->

                <ul class="nav justify-content">

                    <li class="nav-item" >
                      <a id="gallery-nav" class="  nav-link active" href="#">Gallery</a>
                    </li>

                <li class="nav-item">
                      <a class="nav-link" href="#"> 4 Targets</a>
                </li>

                <li class="nav-item">
                      <a class="nav-link" href="#">About me</a>
                </li>
              </ul>



  <div class="about-user">

    <div class="about">
      <p class="about-title">About</p>
      <p>  {{ $user->about}} </p>
    </div>

    <div class="abilities">
      <p class="about-title">abilities</p>
      <p>  {{ $user->skills}}</p>

    </div>

    <div class="social-contact">

      <a href="#"><i  class=" icons fab fa-twitter"></i></a>
      <a href="#"><i class="icons fab fa-facebook-f"></i></a>
      <a href="#"><i class=" icons fab fa-instagram"></i></a>

    </div>

  </div>
  </div>
  </div>
  </div>


</div>

<div class="col-12 col-md-8">

  <div class="row">

  <article class="col-12 col-md-8 col-lg-6">
      <a data-fancybox="gallery" href="img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="img/example.jpg"></a>
  </article>

  <article class="col-12 col-md-8 col-lg-6">
      <a data-fancybox="gallery" href="img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="img/example.jpg"></a>
  </article>

  <article class="col-12 col-md-8 col-lg-6">
      <a data-fancybox="gallery" href="img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="img/example.jpg"></a>
  </article>

  <article class="col-12 col-md-8 col-lg-6">
      <a data-fancybox="gallery" href="img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="img/example.jpg"></a>
  </article>

  <article class="col-12 col-md-8 col-lg-6">
      <a data-fancybox="gallery" href="img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="img/example.jpg"></a>
  </article>
  <article class="col-12 col-md-8 col-lg-6">
      <a data-fancybox="gallery" href="img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="img/example.jpg"></a>
  </article>



  </div>
  </div>




</div>

</div>

@endsection
