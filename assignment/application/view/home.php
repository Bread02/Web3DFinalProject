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
  <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
    <div class="container-fluid">
      <!-- Logo -->
      <h1>Costa Coffee World</h1>
    </div>

    <!-- Nav bar -->
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
            <a id="navModels" class="nav-link" href="javascript:swap('milkshake')" data-bs-toggle="popover"
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

  </nav>

  <!-- Start of the SPA -->
  <div id="home">
    <div class="row">
      <div class="col-sm-12">
        Hello world!
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4">
        Costa coffee
      </div>
      <div class="col-sm-4">
        Costa Milkshake
      </div>
      <div class="col-sm-4">
        Costa Shop
      </div>
    </div>
  </div>

  <div id="milkshake">
    <div class="row">
      <div class="col-sm-12">
        Welcome to Costa Milkshake!
      </div>
    </div>
  </div>

  <div id="StatementOfOriginality">
    "These web pages are submitted as part requirement for the degree of Computer Science (BSc) at the University of
    Sussex.
    They are the product of my own labour except where indicated in the web page content.
    These web pages or contents may be freely copied and distributed provided the source is acknowledged".
  </div>
  <div id="Acknowledgements">
    Acknowledgements to X and Y.
  </div>
  <div id="References">
    Reference Sources:
    - Example 1
    - Example 2
    - Example 3
  </div>

  <!-- Footer -->
  <nav class="navbar navbar-expand-sm footer">
    <div class="container">
      <ul>
        <a href="javascript:swap('StatementOfOriginality')">Statement of Originality</a>
        <a href="javascript:swap('Acknowledgements')">Acknowledgements</a>
        <a href="javascript:swap('References')">References</a>
      </ul>
    </div>
  </nav>



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