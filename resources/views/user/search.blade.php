@extends ('layouts.header')


@section('content')

<!-- VIDEO INTRO -->

     <header>
          <div class="intro">


            <div class="row">
              <div class="col-10">
                  <p class="community-p">A community of creative makers for those ones who still believe in  <i>the power of art</i></p>
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
    <div class="up-to">

      <p class="up-to-p">What are you up to?</p>

      <p class="up-to-select"> Select any category of your interest and explore</p>


      <button class="up-to-button" type="button" name="button"> Sign up and get involved</button>


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


<!-- POPULAR PROJECTS -->

 <section>

   <div class="popular-projects">

     <p class="popular-p">Popular Projects</p>

     <div class="card-deck ">

  <div class="card">
    <img src="img/broken.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card">
    <img src="img/broken.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card">
    <img src="img/broken.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card">
    <img src="img/broken.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>




    </div>
</div>
   </div>
 </section>



      <!-- FELLINGS -->

        <div class="feel">
          <div class="row">
              <div class="feeling-container col-6">
                  <p class="feeling-p"> <i> feeling creative?</i> </p>
                    <img class="img-fluid feeling-img"src="img/circle.png" alt="">
                    <button  class="feeling-button" button= name" button">Sponsor a Campaign</button>
              </div>

                <div class="feeling-container col-6">
                  <p class="feeling-p"> <i>feeling curious? </i></p>
                  <img class="img-fluid feeling-img" src="img/geometric_heart.png" alt="">
                  <div class=""><button class="feeling-button"type="button" name="button">Take a Look</button>
                </div>
          </div>
      </div>

      </div>

      </div>




   <div id="up"><a href="#top"> <img class="up"src="img/up.png"  alt=""> </i></a></div>

   @include('layouts.footer')

@endsection
