@extends ('layouts.header')


@section('content')

<!-- BODY -->

<div class="feed-back">

  <div class="feed-cont">

      <div class="container-fluid">

        <div class="row">

        <!-- Left -->

          <div class="login-cont col-3 d-none d-lg-block ">



            <div class=" rounded sticky-top">

                <div class="inner-div">

            <img style="border-radius: 50%" class="feed-pic img-fluid" width="40%" src="{{ (auth()->user()->profile_pic) }}" alt="">
            <a href="/profile/{{ Auth::user()->id }}"> <p class="feed-name"> {{Auth::user()->name}} </p></a>

              </div>

                <div>
                <p class="feed-media">Following</p>
                </div>

                @foreach (auth()->user()->followings as $f)



              <div style="padding:2%"class="">    <a href="/profile/{{ $f->id }}"> <div class="media-div">
              <img style="border-radius:50%" class="feed-media-pic"src="{{$f->profile_pic}} "alt="">
              <p class="feed-media-p"> {{$f->name}}</p>
                </div></a> </div>
                @endforeach


                <div>
                <p class="feed-media">Followers</p>
                </div>


                @foreach (auth()->user()->followers as $follower)



              <div style="padding:2%"class="">    <a href="/profile/{{ $f->id }}"> <div class="media-div">
              <img style="border-radius:50%" class="feed-media-pic"src="{{$follower->profile_pic}} "alt="">
              <p class="feed-media-p"> {{$follower->name}}</p>
                </div></a> </div>
                @endforeach







        </div>

        </div>


        <!-- Middle -->

        <div class="col-lg-6 col-sm-12">



          <div class="feed rounded">


                    <form action="/post" method="post" enctype="multipart/form-data" name="cargaPost">
                        @csrf

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> <span style="color:#F24534" class="icon"><i class="far fa-newspaper"></i></span> Status</a>

            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

              <input style="font-size:0.8em"class="posting" placeholder="What are you up to?" type="text" name="post_text">
                <p>{{ $errors->first('post_text') }}</p>


                <div class="upload_cont">

                  <div class="image-upload">
                    <label class="file-input"for="file-input">
                    <span  class="icon"><i class="fas fa-camera"></i></span>
                    </label>
                    <input class="pic-up" id="file-input" type="file" name="post_image" value="">{{ $errors->first('post_image') }}
                  </div>

                  <div class="image-upload">
                    <label class="file-input"for="file-input">
                    <span class="icon"><i class="fas fa-video"></i></span>
                    </label>
                    <input class="pic-up" id="file-input" type="file" name="post_video" value="">{{ $errors->first('post_video') }}
                  </div>

                  <button class="rounded boton-post "> Post</button>

                </div>

            </div>

        </form>


          </div>

      </div>

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



        </div>
        @endforeach



        </div>



        <!-- Right -->


        <div class="col-3 d-none d-lg-block">

            <div class="sticky-top">



        <div class="tag-cont">

          <p class="tag"> Pick of the day</p>

            <p class="tag-p"> Everyday we choose a random pic for you to explore the community</p>

              <a data-fancybox="gallery" href="{{$post->post_image}}"><img class= "rounded img-fluid   gallery-item "src="{{$post->post_image}}"></a>
      </div>
          </div>


      </div>
    </div>
      </div>

    </div>

       


</div>   

@endsection
