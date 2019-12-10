@extends ('layouts.header')


@section('content')



      <div class="container-fluid">

        <div class="row">

          <div style="padding:5%" class="col-sm-12 col-lg-4">

            <div >
              <div class="profile-pic">
                <img  style="border-radius: 50%; margin:5%;display: flex;justify-content: center" src="{{Auth::user()->profile_pic}}" class="img-fluid update-pic" alt="">
              </div>
              <div style="display: flex;justify-content: center;margin:5%">
                <button class="rounded boton-post"style="font-size:1em" type="button" name="button">Update Profile Pic</button>
              </div>
          </div>

          </div>

          <div style="padding:5%"class="col-sm-12 col-lg-8">

            <div class="">
              <p style="font-size:2em; color:#f24534">{{Auth::user()->name}}</p> <p style="font-size:1.3em; color:#44495c padding:5%">/ Edit Profile</p>
            </div>

          <form >
            <div class="form-row">
              <div class="form-group col-12">
                <input placeholder="Name" type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="form-group col-12">
                <input placeholder="Nickname"type="password" class="form-control" id="inputPassword4">
              </div>
            </div>
            <div class="form-group">
              <input placeholder="Country or City" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-row">
              <div class="form-group col-12">
                <label for="inputState">I am a ...</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>Sculptor</option>
                  <option>Photographer</option>
                  <option>Painter</option>
                  <option>Digital Artist</option>
                  <option>Illustrator</option>
                  <option>Film Maker</option>
                </select>
              </div>
              <div class="form-group col-12">
                <input style="height:20vh" placeholder="About me"type="text" class="form-control" id="inputZip">
              </div>

              <div class="form-group col-12">
                <input placeholder="Skills"type="text" class="form-control" id="inputZip">
              </div>
            </div>


            <button style="padding:2%; width:10%; float:left"type="submit" class="rounded boton-post">Save</button>
          </form>


          </div>

        </div>


      </div>






















   @include('layouts.footer')


@endsection
