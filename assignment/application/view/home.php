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
  <div class="container-fluid">
    <!-- START OF LOGO -->
    <div class="logo">
        <a class="navbar-brand" href="index.php">
          <h1>Costa Coffee World</h1>
          <p>Love For The Bean</p>
        </a>
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
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a id="navAbout" class="nav-link" href="#" data-bs-toggle="popover" data-bs-trigger="hover"
              data-bs-placement="bottom" title="About Web 3D Applications"
              data-bs-content="3D Apps is a final year and postgraduate module ...">About</a>
          </li>
          <li class="nav-item">
            <a id="navModels" class="nav-link" href="#" data-bs-toggle="popover" data-bs-trigger="hover"
              data-placement="bottom" title="X3D Models"
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
    <!-- END OF NAVIGATION ELEMENT OF BAR -->

  </nav>
  <!-- END OF TOP NAVBAR -->

  <!-- Start of the SPA -->
  <!-- START OF HOME -->
  <div id="home">
    <!-- START OF FIRST ROW -->
    <div class="col-sm-12">
      <div id="main_3d_image">
        <div id="main_text" class="col-xs-12">
          <div id="title_home"></div>
          <div id="subTitle_home"></div>
          <div id="description_home"></div>
        </div>
      </div>
    </div>
    <!-- END OF FIRST ROW -->

    <!-- START OF SECOND ROW -->
    <div class="row">
      <div class="col-sm-12">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <div class="card-body">
          <img src="assets/images/front_page_images/FrontImage2.png" alt="Image of Costa Coffee Cup">
          <h4 class="card-title"> Coffee In Store</h4>
          <p class="card-text">In store you can buy coffee.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card-body">
          <img src="assets/images/front_page_images/FrontImage3.png" alt="Image of Costa Coffee Milkshake">
          <h4 class="card-title">Costa Frappe Bottle</h4>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card-body">
          <img src="assets/images/front_page_images/FrontImage4.png" alt="Image of Costa Coffee Canned">
          <h4 class="card-title">Costa in a Can</h4>
        </div>
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
        <!-- TODO Nav Menu to choose models -->
        <div class="card text-left">
          <div class="card-body">
            <h2 class="card-title">Models</h2>
            <a id="navCup" button type="button" class="btn btn-primary">Cup</button> </a>
            <a id="navBottle" button type="button" class="btn btn-secondary">Bottle</button> </a>
            <a id="navCan" button type="button" class="btn btn-success">Can</button> </a>
            <br>
          </div>
        </div>

        <!-- END OF NAV MENU TO CHOOSE MODELS -->

        <div class="card-body">
          <!-- MODEL 1 -->
          <div id="cup">
            <!-- The 3D Model Card -->
            <div class="card-body">
              <h3 class="card-title"> Cup X3D Model</h3>
              <br>
              <!-- CHOOSE SKINS -->
              <h4 class="card-title"> Skins</h4>
              <a id="navCoke" button type="button" class="btn btn-primary">Costa Cup</button> </a>
              <!-- END OF CHOOSE SKINS -->
              <div class="model3D">
                <x3d id="modelOne">
                  <scene>
                    <inline namespacename="modelOne" mapDEFToID="true" onclick="animateModel()"
                      url="assets/x3d/CostaCup.x3d"></inline>
                  </scene>
                </x3d>
              </div>
            </div>
            <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
          </div>
          <!-- END OF MODEL 1 -->

          <!-- MODEL 2 -->
          <div id="bottle" style="display:none;">
            <!-- The 3D Model Card -->
            <div class="card-body">
              <h3 class="card-title"> Bottle X3D Model</h3>
              <br>
              <!-- CHOOSE SKINS -->
              <h4 class="card-title"> Skins</h4>
              <a id="navCoke" button type="button" class="btn btn-primary">Frappe Caramel</button> </a>
              <a id="navCoke" button type="button" class="btn btn-primary">Frappe Brownie</button> </a>
              <!-- END OF CHOOSE SKINS -->
              <div class="model3D">
                <x3d id="modelTwo">
                  <scene>
                    <inline namespacename="modelTwo" mapDEFToID="true" onclick="animateModel()"
                      url="assets/x3d/sprite.x3d"></inline>
                  </scene>
                </x3d>
              </div>
            </div>
            <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
          </div>
          <!-- END OF MODEL 2-->

          <!-- MODEL 3 -->
          <div id="can" style="display:none;">
            <!-- The 3D Model Card -->
            <div class="card-body">
              <h3 class="card-title"> Can X3D Model</h3>
              <br>
              <!-- CHOOSE SKINS -->
              <h4 class="card-title"> Skins</h4>
              <a id="navCoke" button type="button" class="btn btn-primary">Vanilla Latte</button> </a>
              <a id="navCoke" button type="button" class="btn btn-primary">Latte</button> </a>
              <a id="navCoke" button type="button" class="btn btn-primary">Espresso</button> </a>
              <!-- END OF CHOOSE SKINS -->
              <div class="model3D">
                <x3d id="modelThree">
                  <scene>
                    <inline namespacename="modelThree" mapDEFToID="true" onclick="animateModel()"
                      url="assets/x3d/Costa_Can.x3d"></inline>
                  </scene>
                </x3d>
              </div>
            </div>
            <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
          </div>
          <!-- END OF MODEL 3 -->
        </div>
      </div>

      <!-- Where the gallery is held -->
      <div class="col-sm-3">
        <div class="card text-left">
          <div class="card-header gallery-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Gallery</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-title title_gallery drinksText"></div>
            <div class="gallery" id="gallery"></div>
            <div class="card-text description_gallery drinksText"></div>
          </div>
        </div>
      </div>
    </div>
    <br>


    <div id="interaction" class="row"> <!-- This will hold the model interactions -->
      <!-- CAMERA VIEWS -->
      <div class="col-sm-3">
        <div class="card-body">
          <h4 class="card-title">Camera Views</h4>
          <!-- TODO: MAKE THE BELOW BUTTONS FUNCTIONAL -->
          <!-- The X3D model file will contain the camera locations -->
          <button type="button" class="btn btn-primary" onclick="cameraFront();">Front</button>
          <button type="button" class="btn btn-primary" onclick="cameraBack();">Back</button>
          <button type="button" class="btn btn-primary" onclick="cameraLeft();">Left</button>
          <button type="button" class="btn btn-primary" onclick="cameraRight();">Right</button>
          <button type="button" class="btn btn-primary" onclick="cameraTop();">Top</button>
          <button type="button" class="btn btn-primary" onclick="cameraBottom();">Bottom</button>
          <br>
          Use the buttons to manipulate the camera.
        </div>
      </div>
      <!-- END OF CAMERA VIEWS -->
      <!-- ANIMATION CONTROLS -->
      <div class="col-sm-3">
        <div class="card-body">
          <h4 class="card-title">Animation</h4>
          <button type="button" class="btn btn-primary" onclick="spin();">RotX</button>
          <button type="button" class="btn btn-primary" onclick="spin();">RotY</button>
          <button type="button" class="btn btn-primary" onclick="spin();">RotZ</button>
          <button type="button" class="btn btn-primary" onclick="stopRotation();">Stop Rotation</button>
          <br>
          Use the buttons to animate the camera.
        </div>
      </div>
      <!-- END OF ANIMATION CONTROLS -->
      <!-- RENDERER CONTROLS -->
      <div class="col-sm-3">
        <div class="card-body">
          <h4 class="card-title">Render</h4>
          <button type="button" class="btn btn-primary" onclick="wireframe();">Wireframe</button>
          <button type="button" class="btn btn-primary" onclick="headlight();">Toggle Headlight </button>
          <button type="button" class="btn btn-primary">Toggle Scene Lights</button>
          <br>
          Use the buttons to change the rendering options.
        </div>
      </div>
      <!-- END OF RENDERER CONTROLS -->
    </div>
    <!-- END OF ROW -->

    <!-- START OF FINAL ROW -->
    <br>
    <div class="row"> <!-- This will hold the model description -->
      <div class="col-sm-6">
        <div class="card-body">
          <h4 class="card-title">Costa In Stores</h4>
          <p class="card-text">Costa offers a wide range of drinks including Espressos and Americanos</p>
          <a href='https://www.costa.co.uk/' type="button" class="btn btn-success">Visit the costa store</a>
        </div>
      </div>
    </div>
    <br>
  </div>
  <!-- END OF FINAL ROW -->

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
  <nav class="navbar navbar-expand-sm footer sticky">
    <div class="container-fluid">
      <ul class="navbar-nav mr-auto"> <!-- mx-auto = centre align, default to left, mr-auto to right -->
        <li class="nav-item">
          <!-- TODO Put the below styling into CSS rather than here -->
          <a id="navOriginality" href="#" style="color:#ffffff;">Statement of Originality | </a>
        </li>
        <a id="navAcknowledgements" href="#" style="color:#ffffff;">| Acknowledgements | </a>
        </ll>
        <li class="nav-item">
          <a id="navReferences" href="#" style="color:#ffffff;">| References |</a>
        </li>
        <li class="nav-item">
          <a href="https://github.com/Bread02/Web3DFinalProject" style="color:#ffffff;">| Github Link </a>
        </li>
        </li>
      </ul>
    </div>
  </nav>
  <!-- END OF FOOTER -->

  <!-- TODO MODALS -->
  <!-- END OF MODALS -->

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="application/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> <!-- popper is bundled in this -->

  <script type="text/javascript" src="application/js/all.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="application/js/custom.js" crossorigin="anonymous"></script>
  <script src="application/js/gallery_generator.js"></script>
  <script src="application/js/swap_restyle.js"></script>
  <script src='application/js/x3dom.js'></script>
  <script src="application/js/modelInteractions.js"></script>
  <script src="application/js/getJsonData.js"></script>

  <!-- Try to put this in controller if we can? -->

</body>

</html>