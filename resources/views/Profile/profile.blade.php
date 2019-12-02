@extends ('layouts.header')


@section('content')

<!-- BANNER -->

<div class="banner">
  <img class="img-fluid" width="100%" src="/img/banner.jpg" alt="">
</div>


<div class="profiles">
<div class=" container">

<div class="row">

<div class="col-12 col-md-4">

  <div class="row profile-data">
  <div class=" col-12 ">



            <div class="">
              <div class="profile-pic">
                <img src="/img/profilepic.png" class="img-fluid" alt="">
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

              </div>

              <div class="profile-button ">
                <form action="{{ route('user.follow', $user->id) }}" method="post">
                  @csrf

                  <button
                    type="submit"
                    class=" follow-contact">
                    Follow
                  </button>
                </form>


                  <a href="{{ route('user.unfollow', $user->id )}}"><button type="button" name="button"      class=" follow-contact ">unfollow</button></a>

                </div>




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


    <div class="container-fluid">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active tab-stl" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link tab-stl" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Campaigns</a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

          <!-- foreach de posts -->



        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Campaigns


          <div class="row">

          <article class="col-12 col-md-8 col-lg-6">
              <a data-fancybox="gallery" href="/img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
          </article>

          <article class="col-12 col-md-8 col-lg-6">
              <a data-fancybox="gallery" href="/img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
          </article>

          <article class="col-12 col-md-8 col-lg-6">
              <a data-fancybox="gallery" href="/img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
          </article>

          <article class="col-12 col-md-8 col-lg-6">
              <a data-fancybox="gallery" href="/img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
          </article>

          <article class="col-12 col-md-8 col-lg-6">
              <a data-fancybox="gallery" href="/img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
          </article>
          <article class="col-12 col-md-8 col-lg-6">
              <a data-fancybox="gallery" href="/img/example.jpg"><img class= "img-thumbnail img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
          </article>

          </div>



        </div>

      </div>
    </div>
  </div>






</div>

</div>



@include('layouts.footer')

@endsection
