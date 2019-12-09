@extends ('layouts.header')


@section('content')

<!-- BANNER -->

<div class="banner">
  <img class="rounded img-fluid" width="100%" src="{{Auth::user()->banner_pic}}" alt="">
</div>


<div class="container-fluid profiles">
<div class=" container">

<div class="row">

<div class="col-12 col-md-4">

  <div class="row rounded profile-data">
  <div class=" col-12 ">

  <a href= '/profile/{id}/edit'><span style="float:right; opacity:0.4"class="icon"><i class="fas fa-edit"></i></span></a>



            <div >
              <div class="profile-pic">
                <img style="border-radius: 50%" src="{{Auth::user()->profile_pic}}" class="img-fluid" alt="">
              </div>

              <div class="user-name">
                <p >{{ $user->nickname }}</p>
              </div>

              <div class="profession">
                <p style="font-size:0.9em; text-transform:capitalize; padding:1%"> {{ $user->category}} </p>

                <p style="font-size:0.8em"> {{ $user->country}} </p>
              </div>


                <div class="follow-container">

              <div class="follow-b">
                <form action="{{ route('user.follow', $user->id) }}" method="post">
                  @csrf

                  <button
                    style="background-color:#f24534;color:white"
                    type="submit"
                    class=" rounded follow-contact">
                    Follow
                  </button>
                </form>
              </div>





                <div class="follow-b">
                  <form action="{{ route('user.unfollow', $user->id )}}" method="post">
                    @csrf

                    <button
                      type="submit"
                      class=" rounded follow-contact">
                      Unfollow
                    </button>
                  </form>


                </div>

                  </div>




  <div class="profile-cont">

    <div  class="profile-about" >
      <p>About</p>
      <p style="text-transform: capitalize;font-weight: normal;color:#8b91a1;font-size:1em; text-align: justify"class="about-p">  {{ $user->about}} </p>
      <p> </p>
    </div>

    <div class="profile-about">
      <p >abilities</p>
      <p style="text-transform: capitalize;font-weight: normal;color:#8b91a1;font-size:1em; text-align: justify">  {{ $user->skills}}</p>

    </div>

    <div class="profile-about">
      <p >Joined</p>
      <p style="text-transform: capitalize;font-weight: normal;color:#8b91a1;font-size:1em; text-align: justify">  {{ $user->created_at}}</p>

    </div>


  </div>
  </div>
  </div>
  </div>


</div>

<div class="col-12 col-md-8">
<div class="post-container">

<div class="row">



          <article class="col-sm-12  col-lg-6">
              <a data-fancybox="gallery" href="/img/example.jpg"><img class= "rounded img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
          </article>

          <article class="col-sm-12  col-lg-6">
              <a data-fancybox="gallery" href="/img/example.jpg"><img class= "rounded img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
          </article>



                    <article class="col-sm-12  col-lg-6">
                        <a data-fancybox="gallery" href="/img/example.jpg"><img class= "rounded img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
                    </article>

                    <article class="col-sm-12  col-lg-6">
                        <a data-fancybox="gallery" href="/img/example.jpg"><img class= "rounded img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
                    </article>


                              <article class="col-sm-12  col-lg-6">
                                  <a data-fancybox="gallery" href="/img/example.jpg"><img class= "rounded img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
                              </article>

                              <article class="col-sm-12  col-lg-6">
                                  <a data-fancybox="gallery" href="/img/example.jpg"><img class= "rounded img-fluid  home-article gallery-item "src="/img/example.jpg"></a>
                              </article>


          </div>
          </div>
          </div>





        </div>

      </div>
    </div>











@include('layouts.footer')

@endsection
