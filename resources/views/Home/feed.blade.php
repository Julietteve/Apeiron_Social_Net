@extends ('layouts.header')


@section('content')

<!-- BODY -->

<div class="feed-back">

  <div class="feed-cont">

      <div class="container-fluid">

        <div class="row">

        <!-- Left -->

          <div class="col-lg-3 col-sm-3">

            <div class="sticky-top">

            <img class="feed-pic" width="40%" src="img/profilepic.png" alt="">
            <a href="/profiles/{{ Auth::user()->id }}"> <p class="feed-name"> {{Auth::user()->name}} </p></a>



                <div>
                <p class="feed-media">Following</p>
                </div>

                <div class="media-div">
              <img class="feed-media-pic"src="img/pic.png" alt="">
              <p class="feed-media-p"> User's name</p>
                </div>

          </div>

        </div>


        <!-- Middle -->

        <div class="col-lg-6 col-sm-12">

          <div class="feed">

                    <form action="/post" method="post" enctype="multipart/form-data" name="cargaPost">
                        @csrf

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> <span class="icon"><i class="far fa-newspaper"></i></span> Status</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><span class="icon"><i class="far fa-images"></i></span>Photo</a>

            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

              <input class="posting" placeholder="What are you up to?" type="text" name="post_text">
                <p>{{ $errors->first('post_text') }}</p>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">



              </div>

              <div class="upload_cont">

                <div class="image-upload">
                  <label for="file-input">
                  <span class="icon"><i class="fas fa-camera"></i></span>
                  </label>
                  <input class="pic-up" id="file-input" type="file" name="post_image" value="">{{ $errors->first('post_image') }}
                </div>
                <button class="boton-post "> Post Status </button>

              </div>




        </form>


          </div>









      </div>






              <!-- <div>
                @foreach ($posts as $post)

                <p class="post-name"></p>
                <div class="post-description">{{ $post->post_text }}</div>
                <img class=" media-content img-fluid" src="/public/{{$post->post_image}}" alt="">
                @endforeach

              </div> -->

                <!-- @foreach ($posts as $post)
                  <div class="post-description">{{ $post->post_image }}</div>
                @endforeach -->


                <!-- <div class="reaction-container">

                  <p class="favourite-count">Favourite Count</p>
                  <a href="#"><img class="image-fluid love-icon" src="" alt=" Love"></a>

                </div>

                <div class="reaction-container">


+p08ikuhyt|<var>qc
</var>
                  <div class="comments-div">
                  <img class="comment-media-pic"src="img/profilepic.png" alt="">
                  </div>

                <textarea name="comment" rows="3" cols="50"></textarea>

              </div> -->





        <div class="feed">

          @foreach ($posts as $post)

          <div class="media-div">
          <img class="post-media-pic"src="img/pic.png" alt="">
          <p class="feed-media-p"> {{Auth::user()->name}} </p>
          </div>



          <p class="post-name">  </p>

          <img class=" media-content rounded img-fluid" src="storage/{{$post->post_image}}" alt="">
          <div class="post-description">{{ $post->post_text }}</div>


                     <form method="post" action="">
                         @csrf
                         <div class="form-group">
                             <textarea class="form-control" name="body"></textarea>
                             <input type="hidden" name="post_id" value="" />
                         </div>
                         <div class="form-group">
                             <input type="submit" class="btn btn-success" value="Add Comment" />
                         </div>
                     </form>




          @endforeach

        </div>

        </div>



        <!-- Right -->


        <div class="col-lg-3 col-sm-3">
            <div class="sticky-top">



        <div class="tag-cont">


          <p class="tag"> Image of the day</p>

              <a data-fancybox="gallery" href="/img/example.jpg"><img class= "rounded img-fluid  home-article gallery-item "src="/img/example.jpg"></a>

      </div>

        </div>
      </div>
    </div>
      </div>

    </div>

       


</div>   

@endsection
