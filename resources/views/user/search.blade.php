@extends ('layouts.header')


@section('content')

<!-- VIDEO INTRO -->

     <header>
          <div class="intro">


            <div class="row-6">
              <div class= "col-10">
                <p class="community-p">A community of creative makers for  those ones who still believe in  <i>the power of art</i></p>

            </div>

            </div>
</div>

            <div class="plexus">

              <div class="row">
                <div class="col-3">
                  <img class="whales"src="img/whales.jpg" alt="">
                </div>



                <div class="col-3">
                  <img  class="woman" src="img/woman.jpg" alt="">
                </div>


                <div class="col-3">
                  <img  class="dreams" src="img/deepdeream.jpg" alt="">
                </div>

              </div>
</div>


    </header> -->

    <!-- STAGES -->

<!-- <div class="tangled">
      <img  class=""src="img/untangled.gif" alt="">
    </div>  -->





    <!-- WHAT ARE YOU UP TO? -->


      <div class=" up-to-container row">

        <div class="col-2">
          <img class="category-img" src="img/sculptor.png" alt="">
          <p class="category-p">Sculptors</p>
        </div>

        <div class="col-2">
          <img class="category-img" src="img/painter.png" alt="">
          <p class="category-p">Illustrators</p>
        </div>

      <div class="col-2">
        <img class="category-img" src="img/illustrators.png" alt="">
        <p class="category-p">Painters</p>
      </div>

      <div class="col-2">
        <img  class="category-img"src="img/photographers.png" alt="">
        <p class="category-p">Digital Artists</p>
      </div>

      <div class="col-2">
        <img class="category-img" src="img/filmmakers.png" alt="">
        <p class="category-p">Film makers</p>
      </div>

      <div class="col-2">
        <img  class="category-img"src="img/digitalartist.png" alt="">
        <p class="category-p">Photographers</p>
      </div>
      </div>

    </div>



      <!-- FELLINGS -->

        <div class="feel">
          <div class="row">
              <div class="feeling-container col-6">
                  <p class="feeling-p"> <i> feeling creative?</i> </p>
                    <img class="img-fluid feeling-img"src="img/circle.png" alt="">
                  <a href="/login"> <button  class="feeling-button" button= name" button">Sign In</button>
              </div></a>

                <div class="feeling-container col-6">
                  <p class="feeling-p"> <i>feeling curious? </i></p>
                  <img class="img-fluid feeling-img" src="img/geometric_heart.png" alt="">
                  <a href="/register"> <div class=""><button class="feeling-button"type="button" name="button">Register</button></a>
                </div>
          </div>
      </div>

      </div>

      </div>




   <div id="up"><a href="#top"> <img class="up"src="img/up.png"  alt=""> </i></a></div>

   @include('layouts.footer')

@endsection
