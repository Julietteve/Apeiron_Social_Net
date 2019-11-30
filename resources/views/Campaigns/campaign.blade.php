<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Apeiron</title>

      <link rel="shortcut icon" type="image/png" href="img/apeiron_logo.png">



      <!-- bootstrap CSS-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- FancyBox -->
      <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">

      <!-- Beefup -->
      <link rel="stylesheet" href="css/jquery.beefup.css">


      <!-- Internal CSS -->
      <link rel="stylesheet" href="css/campaignstylesheet.css">

      <!-- fontawesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

      <!-- Google Fonts CSS -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">

</head>

  <body>

        <div class="container-fluid">

          <div class="camp-cont">

              <div class="">

                <form action="/Campaign" method="post" enctype="multipart/form-data" name="cargaPost">
                    @csrf


                        <h2> name</h2>


                    <div class="image-upload">
                      <label for="file-input">
                        <img class="upload_icon" src="img/upload_pic.png"/>
                     </label>
                      <input class="pic-up" id="file-input" type="file" name="post_image" value="">{{ $errors->first('post_image') }}
                    </div>

                    <div class="image-upload">
                      <label for="file-input">
                        description
                     </label>
                      <input class="pic-up" id="file-input" type="text" name="post_image" value="">{{ $errors->first('post_image') }}
                    </div>

                    <div class="image-upload">
                      <label for="file-input">
                        tags
                     </label>
                      <input class="pic-up" id="file-input" type="text" name="post_image" value="">{{ $errors->first('post_image') }}
                    </div>





                        <button class="boton-post "> Post </button>
                </form>




              </div>

          </div>


        </div>




      



<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>






  </body>
</html>
