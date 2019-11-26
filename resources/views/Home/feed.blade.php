@extends ('layouts.header')


@section('content')

<!-- BODY -->

<div class="feed-back">

  <div class="feed-cont">

      <div class="container-fluid">

        <div class="row">

        <!-- Left -->

          <div class="col-3">

            <div class="feed sticky">

            <img class="feed-pic" width="40%" src="img/profilepic.png" alt="">
            <p class="feed-name">NAME</p>

              <div>
                <p class="feed-media">Supporting</p>
                  </div>

                  <div class="media-div">
              <img class="feed-media-pic"src="img/pic.png" alt="">
              <p class="feed-media-p"> User's name</p>
                </div>

                <div class="media-div">
              <img class="feed-media-pic"src="img/pic.png" alt="">
              <p class="feed-media-p"> User's name</p>
                </div>

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

        <div class="col-6">



<div class="feed">

    <p class="make-a-move">Make a Move</p>
          <form action="/post" method="post" enctype="multipart/form-data">
              @csrf
                <input placeholder="What are you up to?" type="text" name="post_text">
                  <p>{{ $errors->first('post_text') }}</p>


                  <div class="image-upload">
                    <label for="file-input">
                      <img class="upload_icon" src="img/upload_pic.png"/>Photo
                    </label>
                    <input class="pic-up" id="file-input" type="file" name="post_img" value="">{{ $errors->first('post_img') }}
                  </div>

                  <div class="image-upload">
                    <label for="file-input">
                      <img  class="upload_icon"src="img/upload_pic.png"/> Video
                    </label>
                    <input id="file-input" type="file" name="post_video" value="">{{ $errors->first('video_img') }}
                  </div>


                  <button class="boton-post "> Post </button>
          </form>

          </div>



            <div class="feed">



              <div class="media-div">
              <img class="post-media-pic"src="img/pic.png" alt="">
              <p class="feed-media-p">User's name</p>
              </div>


              <div >
                <img class=" media-content img-fluid" src="img/mediapost.jpg" alt="">

                <p class="post-name"> Description's Name </p>

                @foreach ($posts as $post)
                  <div class="post-description">{{ $post->post_text }}</div>
                @endforeach

                @foreach ($posts as $post)
                  <div class="post-description">{{ $post->post_img }}</div>
                @endforeach


                <div class="reaction-container">

                  <p class="favourite-count"> Favourite Count</p>
                  <a href="#"><img class="image-fluid love-icon"src="img/love.png" alt=" Love"></a>

                </div>

                <div class="reaction-container">


                  <div class="comments-div">
                  <img class="comment-media-pic"src="img/profilepic.png" alt="">
                  </div>

                <textarea name="comment" rows="3" cols="50"></textarea>

              </div>


              </div>

        </div>
        </div>

        <!-- Right -->


        <div class="col-3">
            <div class="feed sticky">

        <div class="tag-cont">

          <p class="tag"> Share your creative project and find financial support from the community</p>
          <button class=" launch "type="button" name="button">Launch a Campaign</button>

        </div>


        <div class="tag-cont">


          <p class="tag"> Support creative projects you love</p>
            <button class=" launch "type="button" name="button">Find Makers</button>

      </div>

        </div>
      </div>
    </div>
      </div>

    </div>

       


</div>   

@endsection
