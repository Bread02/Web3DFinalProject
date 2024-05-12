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
  <nav class="navbar sticky-top navbar-expand-sm navbar_costa">
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
            <a id="navHome" class="nav-link active" href="#" onclick="changeHomeClassToActive()">Home</a>
          </li>
          <li class="nav-item">
            <a id="navAbout" class="nav-link" onclick="changeAboutClassToActive()" href="#" data-bs-toggle="popover"
              data-bs-trigger="hover" data-bs-placement="bottom" title="About Web 3D Applications"
              data-bs-content="3D Apps is a final year and postgraduate module ...">About</a>
          </li>
          <li class="nav-item">
            <a id="navModels" class="nav-link" onclick="changeModelsClassToActive()" href="#" data-bs-toggle="popover"
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
          <div id="title_left"></div>
          <div id="subTitle_left"></div>
          <div id="description_left"></div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card-body">
          <img src="assets/images/front_page_images/FrontImage3.png" alt="Image of Costa Coffee Milkshake">
          <div id="title_center"></div>
          <div id="subTitle_center"></div>
          <div id="description_center"></div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card-body">
          <img src="assets/images/front_page_images/FrontImage4.png" alt="Image of Costa Coffee Canned">
          <div id="title_right"></div>
          <div id="subTitle_right"></div>
          <div id="description_right"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- END OF HOME -->

  <!-- START OF MODELS -->
  <div id="models" class="container-fluid main_contents">
    <div class="row"> <!-- We hold the 3D model and the gallery in a row, the gallery on the right side -->
      <!-- The 3D model holder -->
      <div class="col-sm-8">
        <div class="card text-left">
        </div>
        <!-- TODO Nav Menu to choose models -->
        <div class="card text-left">
          <div class="card-body text-center">
            <h2 class="card-title text-center">Models</h2>
            <a id="navCup" button type="button" class="btn btn-success" onclick="cupScene();">Costa Cup</button> </a>
            <a id="navBottle" button type="button" class="btn btn-primary" onclick="bottleScene();">Costa
              Bottle</button> </a>
            <a id="navCan" button type="button" class="btn btn-primary" onclick="canScene();">Costa Can</button> </a>
            <br>
          </div>
        </div>

        <!-- END OF NAV MENU TO CHOOSE MODELS -->

        <div class="card-body" class="container-fluid main_contents">
          <!-- MODEL 1 -->
          <div id="cup">
            <!-- The 3D Model Card -->
            <div class="card-body">
              <!-- <h3 class="card-title"> Cup X3D Model</h3> --->
              <h3 class="card-title text-center">
                <?php echo $data[0]["x3dModelTitle"]; ?>
              </h3>

              <br>
            </div>

            <!-- START OF FINAL ROW -->
            <div class="row">
              <div class="col-sm-6">
                <div class="card-body">
                  <div id="cupDescription">
                    <h4 class="card-title text-center"><?php echo $data[0]["modelTitle"]; ?></h4>
                    <p class="card-text "><?php echo $data[0]["modelDescription"]; ?></p>
                    <a href='https://www.costa.co.uk/' type="button" class="btn btn-primary">Visit the costa store</a>
                  </div>
                </div>
              </div>
              <!-- END OF FINAL ROW -->
              <div class="col-sm-6">
                <h4 class="card-title text-center">Model Creation</h4>
                <div class="card-text text-center"><?php echo $data[0]["x3dCreationMethod"]; ?></div>
              </div>

            </div>
            <br>
            <div class="card-title text-center">
              <!-- CHOOSE SKINS -->
              <h4 class="card-title text-center">Flavours</h4>
              <a id="navCoke" button type="button" class="btn btn-success">Costa Cup</button> </a>
              <!-- END OF CHOOSE SKINS -->
            </div>
          </div>



          <!-- MODEL 2 -->
          <div id="bottle" tyle="display:none;" s>
            <!-- The 3D Model Card -->
            <div class="card-body">
              <h3 class="card-title text-center"> <?php echo $data[1]["x3dModelTitle"]; ?></h3>
            </div>
            <br>

            <div class="row">
              <div class="col-sm-6">
                <div class="card-body">
                  <div id="bottleDescription">
                    <h4 class="card-title text-center"><?php echo $data[1]["modelTitle"]; ?></h4>
                    <p class="card-text text-center"><?php echo $data[1]["modelDescription"]; ?></p>
                    <a href='https://www.costa.co.uk/' type="button" class="btn btn-primary">Visit the costa store</a>
                  </div>
                </div>
              </div>
              <!-- END OF FINAL ROW -->
              <div class="col-sm-6">
                <h4 class="card-title text-center">Model Creation</h4>
                <div class="card-text drinksText"><?php echo $data[1]["x3dCreationMethod"]; ?></div>
              </div>
            </div>
            <br>
            <!-- CHOOSE SKINS -->
            <div class="card-title text-center">
              <h4 class="card-title">Flavours</h4>
              <a id="caramelButton" class="btn btn-success" onclick="changeTextureCaramel()">Frappe Caramel</button></a>
              <a id="brownieButton" class="btn btn-primary" onclick="changeTextureBrownie()">Frappe Brownie</button></a>
              <!-- END OF CHOOSE SKINS -->
            </div>
          </div>
          <!-- END OF MODEL 2-->

          <!-- MODEL 3 -->
          <div id="can" style="display:none;">
            <!-- The 3D Model Card -->
            <div class="card-body">
              <h3 class="card-title text-center"> <?php echo $data[2]["x3dModelTitle"]; ?></h3>
            </div>
            <br>

            <div class="row">
              <div class="col-sm-6">
                <div class="card-body">
                  <div id="canDescription">
                    <h4 class="card-title text-center"><?php echo $data[2]["modelTitle"]; ?></h4>
                    <p class="card-text text-center"><?php echo $data[2]["modelDescription"]; ?></p>
                    <a href='https://www.costa.co.uk/' type="button" class="btn btn-primary">Visit the costa store</a>
                  </div>
                </div>
              </div>
              <!-- END OF FINAL ROW -->
              <div class="col-sm-6">
                <h4 class="card-title text-center">Model Creation</h4>
                <div class="card-text drinksText"><?php echo $data[2]["x3dCreationMethod"]; ?></div>
              </div>
            </div>
            <br>
            <!-- CHOOSE SKINS -->
            <div class="card-title text-center">
              <h4 class="card-title">Flavours</h4>
              <a id="vanillaLatteButton" class="btn btn-success" onclick="changeTextureVanillaLatte()">Vanilla Latte</a>
              <a id="latteButton" class="btn btn-primary" onclick="changeTextureLatte()">Latte</a>
              <!-- END OF CHOOSE SKINS -->
            </div>
          </div>
          <!-- END OF MODEL 3 -->

          <!-- X3D MODEL SCENES -->
          <div class="model3D">
            <x3d id="models">
              <scene>
                <Switch whichChoice="0" id='SceneSwitch'>
                  <transform>
                    <inline nameSpaceName="modelOne" mapDEFToID="true" onclick="animateModel();"
                      url="assets/x3d/Costa_Cup.x3d"> </inline>
                  </transform>
                  <transform>
                    <inline nameSpaceName="modelTwo" mapDEFToID="true" onclick="animateModel();"
                      url="assets/x3d/Costa_Bottle.x3d"> </inline>
                  </transform>
                  <transform>
                    <inline nameSpaceName="modelThree" mapDEFToID="true" onclick="animateModel();"
                      url="assets/x3d/Costa_Can.x3d"> </inline>
                  </transform>
                </Switch>
              </scene>
            </x3d>
          </div>
        </div>
      </div>

      <!-- END OF X3D MODEL SCENES -->

      <div id="interaction" class="col-sm-3"> <!-- This will hold the model interactions -->
        <br>
        <!-- CAMERA VIEWS -->
        <div class="card-body">
          <h4 class="card-title text-center">
            <div id="interactionPanelCameraTitle"></div>
          </h4>
          <!-- The X3D model file will contain the camera locations -->
          <button type="button" class="btn btn-primary" onclick="cameraFront();">Front</button>
          <button type="button" class="btn btn-primary" onclick="cameraBack();">Back</button>
          <button type="button" class="btn btn-primary" onclick="cameraLeft();">Left</button>
          <button type="button" class="btn btn-primary" onclick="cameraRight();">Right</button>
          <button type="button" class="btn btn-primary" onclick="cameraTop();">Top</button>
          <button type="button" class="btn btn-primary" onclick="cameraBottom();">Bottom</button>
          <br>
          <div id="interactionPanelCamera"></div>
        </div>
        <!-- END OF CAMERA VIEWS -->
        <!-- ANIMATION CONTROLS -->
        <div class="card-body">
          <h4 class="card-title text-center">
            <div id="interactionPanelAnimationTitle"></div>
          </h4>
          <button type="button" class="btn btn-primary" onclick="spinX();">RotX</button>
          <button type="button" class="btn btn-primary" onclick="spinY();">RotY</button>
          <button type="button" class="btn btn-primary" onclick="spinZ();">RotZ</button>
          <button type="button" class="btn btn-primary" onclick="stopRotation();">Stop Rotation</button>
          <br>
          <div id="interactionPanelAnimate"></div>
        </div>
        <!-- END OF ANIMATION CONTROLS -->
        <!-- RENDERER CONTROLS -->
        <div class="card-body">
          <h4 class="card-title text-center">
            <div id="interactionPanelRenderTitle"></div>
          </h4>
          <button type="button" class="btn btn-primary" onclick="wireframe();">Wireframe</button>
          <a id="toggleHeadlightsBtn" button type="button" class="btn btn-success" onclick="headlight();">Toggle
            Headlight</a>
          <a id="toggleLightsBtn" button type="button" class="btn btn-success" onclick="toggleLights();">Toggle Scene
            Lights</a>
          <br>
          <div id="interactionPanelRender"></div>
        </div>
        <!-- END OF RENDERER CONTROLS -->
        <!-- END OF ROW -->

        <!-- Where the gallery is held -->
        <div class="card-body">
          <div class="card text-left">
            <div class="card-header gallery-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Gallery</a>
                </li>
              </ul>
            </div>
            <div class="card-body text-center">
              <div id="title_gallery"></div>
              <div class="gallery" id="gallery"></div>
              <div id="description_gallery"></div>
            </div>
          </div>
        </div>
      </div>
      <br>

      <!-- END OF MODELS -->
    </div>

    <!-- START OF STATEMENT OF ORIGINALITY -->
    <div id="originality">
      <div id="originalityStatement"></div>
    </div>
    <!-- END OF STATEMENT OF ORIGINALITY -->

    <!-- Acknowledgements can be added here optionally -->

    <!-- START OF REFERENCES -->
    <div id="references">
      <div id="referencesStatement"></div>
      Please also be sure to produce appropriate citations within your web pages to all sources of content, including
      X3D/VRML functions, extensions, HTML, JavaScrip, ... code, etc. that you have not developed yourself. For each
      piece of content that is not developed by yourself you should 'cite and refer' via a hyperlink to the source (via
      this page) that lists your references just as if you had written an essay or report.
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
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script> -->
    <script src="application/js/jquery-3.4.1.js"></script>
    <script src="application/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- popper is bundled in this -->

    <script type="text/javascript" src="application/js/all.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="application/js/custom.js" crossorigin="anonymous"></script>
    <script src="application/js/gallery_generator.js"></script>
    <script src="application/js/swap_restyle.js"></script>
    <script src='application/js/x3dom.js'></script>
    <script src="application/js/modelInteractions.js"></script>
    <script src="application/js/getJsonData.js"></script>
    <!-- <script src="application/js/jquery.fancybox.min.js"></script> -->

    <!-- Try to put this in controller if we can? -->

</body>

</html>