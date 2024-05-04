<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="application/css/bootstrap.min.css" crossorigin="anonymous">
  <!-- X3DOM.css -->
  <link rel='stylesheet' type='text/css' href='application/css/x3dom.css'>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="application/css/custom.css" crossorigin="anonymous">
  <!-- Fancybox -->
  <link rel="stylesheet" type="text/css" href="application/css/jquery.fancybox.min.css">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">

  <title>Costa Coffee Web 3D App</title>
</head>

<body>

<!-- START OF NAVBAR -->
  <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">

  <!-- START OF LOGO -->
  <div class="logo">
    <div class="container-fluid">
      <!-- Logo -->
      <h1>Costa Coffee World</h1>
    </div>
</div>
  <!-- END OF LOGO -->

    <!-- START OF NAVIGATION ELEMENT OF BAR -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Link Menu item button to the links class navbar-collapse selector -->
    <div class="collapse navbar-collapse">
      <div class="container-fluid">

        <!-- Links for navbar -->
        <ul class="navbar-nav mr-auto"> <!-- mx-auto = centre align, default to left, mr-auto to right -->
          <li class="nav-item">
            <a class="nav-link active" href="javascript:swap('home')">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom"
              title="About Web 3D Applications"
              data-bs-content="3D Apps is a final year and postgraduate module ...">About</a>
          </li>
          <li class="nav-item">
            <a id="navModels" class="nav-link" href="javascript:swap('models')" data-bs-toggle="popover"
              data-bs-trigger="hover" data-placement="bottom" title="X3D Models"
              data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
          </li>
          <!-- Button trigger modal -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="modal"
              data-bs-target="#exampleModal">Contact</button></a>
          </li>
        </ul>
      </div>
    </div>
    </div>
    <!-- END OF NAVIGATION ELEMENT OF BAR -->

  </nav>
<!-- END OF TOP NAVBAR -->

  <!-- Start of the SPA -->
  <!-- START OF HOME -->
  <div id="home">
    <div class="col-sm-12">
      <div id="main_3d_image">
        <div id="main_text" class="col-xs-12">
          <div id="title_home"></div>
          <div id="subTitle_home"></div>
          <div id="description_home"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <img src="assets/images/front_page_images/FrontImage2.png" alt="Image of Costa Coffee Cup">
        <br>Costa coffee
      </div>
      <div class="col-sm-4">
      <img src="assets/images/front_page_images/FrontImage3.png" alt="Image of Costa Coffee Milkshake">
        Costa Milkshake
      </div>
      <div class="col-sm-4">
      <img src="assets/images/front_page_images/FrontImage4.png" alt="Image of Costa Coffee Canned">
        Costa Canned
      </div>
    </div>
  </div>

<!-- END OF HOME -->

  <!-- START OF MODELS -->
  <div id="models" class="container-fluid main_contents">
    <div class="row"> <!-- We hold the 3D model and the gallery in a row, the gallery on the right side -->
      <!-- The 3D model holder -->
      <div class="col-sm-9">
        <div class="card text-left">
      </div>
      <!-- Where the actual 3D models are held -->
      <div class="card-body">
      <h4 class="card-title"> Coca Cola X3D Model</h4>
        <div class="model3D">
          <x3d>
            <scene>
              <inline url="assets/x3d/coke.x3d"></inline>
            </scene>
          </x3d>
        </div>
      </div>
      </div>
       <!-- Where the gallery is held -->
       <div class="col-sm-3">
  <div class="card text-left">
    <div class="card-header gallery-header">
      Gallery
    </div>
    <div class="card-body">
      <h4 class="card-title"> 3D Image Gallery</h4>
      <!-- Dynamically genmerated image gallery using JS and PHP -->
      <div id="gallery_coke" class="gallery"></div>
      <p class="card-text">These 3D images of the Coke can, Sprite bottle and Dr Pepper cup could be rendered</p>
    </div>
  </div>
</div>
      </div>
    </div>
    <!-- END OF MODELS -->

  <!-- START OF STATEMENT OF ORIGINALITY -->
  <div id="originality">
    "These web pages are submitted as part requirement for the degree of Computer Science (BSc) at the University of
    Sussex.
    They are the product of my own labour except where indicated in the web page content.
    These web pages or contents may be freely copied and distributed provided the source is acknowledged".
  </div>
  <!-- END OF STATEMENT OF ORIGINALITY -->


  <!-- ACKNOWLEDGEMENTS -->
  <div id="acknowledgements">
    Acknowledgements to X and Y.
  </div>
  <!-- END OF ACKNOWLEDGEMENTS -->

    <!-- START OF REFERENCES -->
  <div id="references">
    Reference Sources:
    - Example 1
    - Example 2
    - Example 3
  </div>
    <!-- END OF REFERENCES -->

  <!-- START OF FOOTER -->
  <nav class="navbar navbar-expand-sm footer">
    <div class="container-fluid">
      <li>
	  <!-- TODO Put the below styling into CSS rather than here -->
        <a href="javascript:swap('originality')" style="color:#ffffff;">Statement of Originality</a>
        <a href="javascript:swap('acknowledgements')" style="color:#ffffff;">Acknowledgements</a>
        <a href="javascript:swap('references')" style="color:#ffffff;">References</a>
      </li>
    </div>
  </nav>
  <!-- END OF FOOTER -->

  <!-- JavaScript -->
  <script src="application/js/jquery-1.4.3.min.js" crossorigin="anonymous"></script>
  <script src="application/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <!-- <script src="application/js/popper.min.js" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    -->
  <script src="application/js/custom.js" crossorigin="anonymous"></script>
  <script src="application/js/swap_restyle.js"></script>
  <script type='text/javascript' src='application/js/x3dom.js'></script>
  <script src="application/js/jquery.fancybox.min.js"></script>
  <!-- Try to put this in controller if we can? -->
  <script>javascript: swap('home')</script>

</body>
</html>