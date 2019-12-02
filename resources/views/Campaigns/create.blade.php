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
      <link rel="stylesheet" href="/css/campaignstylesheet.css">

      <!-- fontawesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

      <!-- Google Fonts CSS -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">

</head>



  <body>




        <div class=" camp-cont container-fluid">

          <div class=" row ">

              <div class="col-12">

                <form action="/Campaign" method="post" enctype="multipart/form-data" name="cargaPost">
                    @csrf


                    <div >
                      <label for="file-input">
                        Name of the Campaign
                     </label>
                      <input class="pic-up" id="file-input" type="text" name="post_image" value="">{{ $errors->first('post_image') }}
                    </div>


                    <div class="image-upload">
                      <label for="file-input">
                        <div class="img-cont"><img class="upload_icon img-fluid" src="/img/triangle-upload.png"/>  <p class="here">Upload your files here</p> </div>
                     </label>
                      <input class="pic-up" id="file-input" type="file" name="post_image" value="">{{ $errors->first('post_image') }}


                    </div>



                    <div >
                      <label for="file-input">
                        Description
                     </label>
                      <input class="pic-up" id="file-input" type="text" name="post_image" value="">{{ $errors->first('post_image') }}

                    </div>

                    <div >
                      <label for="file-input">
                        Tags
                     </label>
                      <input class="pic-up" id="file-input" type="text" name="post_image" value="">{{ $errors->first('post_image') }}
                    </div>





                        <button class="btn-primary custom-btn">Post</button>
                </form>




              </div>

          </div>


        </div>









  </body>
</html>
