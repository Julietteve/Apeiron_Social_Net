@extends ('layouts.header')


@section('content')



      <div class="container-fluid">

        <div class="row">

          <div style="padding:5%" class="col-sm-12 col-lg-4">

            <form action="{{ url('profileUpdate') }}"method="Post" enctype="multipart/form-data">
           {!! csrf_field() !!}


            <div >
              <div class="profile-pic">
                <img  style="border-radius: 50%; margin:5%;display: flex;justify-content: center" src="/img/profilepic.png" class="img-fluid update-pic" alt="">
              </div>
              <div style="display: flex;justify-content: center;margin:5%">
                <div class="">
                  <input type="file" name="profile_pic">
                </div>
              </div>
          </div>

          </div>

          <div style="padding:5%"class="col-sm-12 col-lg-8">

            <div class="">
              <p style="font-size:2em; color:#f24534">{{Auth::user()->name}}</p> <p style="font-size:1.3em; color:#44495c padding:5%">/ Edit Profile</p>
            </div>



            <div class="form-row">
              <div class="form-group col-12">
                <input placeholder="{{ Auth::user()->name }}"  type="text" name="name"class="form-control" id="inputEmail4">
              </div>
              <div class="form-group col-12">
                <input placeholder="{{ Auth::user()->nickname }}" type="text" name="nickname" class="form-control" id="inputPassword4">
              </div>
            </div>
            <div class="form-group">
              <input placeholder="{{ Auth::user()->country }}" type="text" name="country" class="form-control" id="inputAddress">
            </div>
            <div class="form-row">
              <div class="form-group col-12">
                <label name="category" for="category">I am a ...</label>
                <select name="category"id="inputState" class="form-control">
                  <option >Choose...</option>
                  <option>Sculptor</option>
                  <option>Photographer</option>
                  <option>Painter</option>
                  <option>Digital Artist</option>
                  <option>Illustrator</option>
                  <option>Film Maker</option>
                </select>
              </div>
              <div class="form-group col-12">
                <input style="height:20vh" name="about" placeholder="{{ Auth::user()->about }}"type="text" class="form-control" id="inputZip">
              </div>

              <div class="form-group col-12">
                <input name="skills" placeholder="{{ Auth::user()->Skills }}" type="text" class="form-control" id="inputZip">
              </div>
            </div>


            <button style="padding:2%; width:10%; float:left"type="submit" class="rounded boton-post">Save</button>
          </form>


          </div>

        </div>


      </div>






















   @include('layouts.footer')


@endsection
