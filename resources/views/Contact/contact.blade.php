@extends ('layouts.header')


@section('content')

  <!-- CONTENIDO -->
  <div class="container">
    <div class="row">
      <div class="col">

        <div class="container-fluid container_md">

        <h2 class="contact_team" > Contact <br> Apeiron Team</h2>

        <h5 class="contact_team_h5">If you have any concern , just let us know</h5>
        <p class="contact_team_p">  Don't forget you also count with our <a style="color:#f24534" class="anchor_color" href="/faqs">
          F.A.Q section</a>, where there are tons of already-made questions, where you can push your doubts out. If not, let's get personal! </p>

      </div>
    </div>
  </div>
  <!-- formulario -->
  <form action="contacto.php" method="post" enctype="multipart/form-data">

      <div class="form-row">

      </div>

        <div class="form-group">
        <label for="formGroupExampleInput"> Full Name</label>
        <input type="text" class="form-control" name="contact_name" id="formGroupExampleInput" placeholder="Example input"required>
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="contact_email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"required>
        </div>

        <div class="form-group">
      <label for="inputState"> What's the Issue?</label>
      <select id="inputState" name="contact_issue" class="form-control">
        <option selected>Choose...</option>
        <option>Membership </option>
        <option> Payments</option>
        <option>Branding</option>
        <option>Technical problem</option>
        <option>Suggestions or feedback</option>
        <option>Other</option>
        </select>
        </div>


        <div class="form-group">
        <label for="exampleFormControlTextarea1"> Message </label>
        <textarea class="form-control" name="contact_message" id="exampleFormControlTextarea1" rows="3"></textarea >
        </div>

        <button type="submit" class="boton-post">Let us know!</button>



    </form>




    @endsection
