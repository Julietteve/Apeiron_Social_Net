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
                <p >{{ $user->name }}</p>
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


  @foreach ($posts as $post)
      <div class="feed rounded">


        <div class="rounded inner-div">

          <div class="btn-group ">
            <button  style="background-color:white !important; border:none !important; color:gray; float:left"class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
            <div class="dropdown-menu">

                <form class="" action="/post" method="post">
                  {{csrf_field()}}
                  @method('delete')

                  <input type="hidden" name="id" value="{{$post->id}}">
                  <input style="background-color:white; color: gray; font-weight:lighter;; size:0.8em; border:none"type="submit" name="" value="Delete Post">

                </form>


            </div>
            </div>

        <a href="/profile/{{ Auth::user()->id }}">
        <div class="media-div">
        <img style="border-radius: 50%" class="post-media-pic"src="{{Auth::user()->profile_pic}}" alt="">
        <p class="feed-media-p"> {{Auth::user()->name}} </p>
        </div>
        </a>

          <a data-fancybox="gallery" src="{{$post->post_image}}"><img style=" width:100% "class= "rounded img-fluid "src="{{$post->post_image}}"></a>

        <div class="post-description">{{ $post->post_text }}</div>

          </div>

          <div class="inner-comment">

          </div>

                   <form method="post" action="">
                       @csrf
                       <div class="form-group">
                         <div class="comment-contains">
                          <img style="border-radius: 50%" class=" post-media-pic comment-pic"src="{{Auth::user()->profile_pic}}" alt="">
                           <textarea style="font-size:0.8em" placeholder="Remember, be nice!" wrap="off"class="comment"  class="form-control" name="body"></textarea>
                          </div>
                           <input type="hidden" name="post_id" value="" />
                           <div >
                               <button style="font-size:0.8em; background-color:#e4ecf3; color:#44495c"type="submit"  class="boton-post"/> Comment</button>
                           </div>
                       </div>

                   </form>





      </div>
      @endforeach



          </div>
          </div>





        </div>

      </div>
    </div>











@include('layouts.footer')

@endsection
