@extends ('layouts.header')


@section('content')



      <div class="container-fluid">

        <div class="row">

          <div class="col-sm-12 col-lg-8">

            <div style="overflow:hidden">
              <div class="profile-pic">
                <img style="float:left" style="border-radius: 50%" src="{{Auth::user()->profile_pic}}" class="img-fluid" alt="">
              </div>
              <div class="">
                <button style="float:right" type="button" name="button">upload Profile Pic</button>
              </div>
          </div>

          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input placeholder="Name" type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="form-group col-md-6">
                <input placeholder="Nickname"type="password" class="form-control" id="inputPassword4">
              </div>
            </div>
            <div class="form-group">
              <input placeholder="Country or City" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
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
              <div class="form-group col-md-2">
                <input style="height:20vh" placeholder="About me"type="text" class="form-control" id="inputZip">
              </div>

              <div class="form-group col-md-2">
                <input placeholder="Skills"type="text" class="form-control" id="inputZip">
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>


          </div>

        </div>


      </div>

























@endsection
