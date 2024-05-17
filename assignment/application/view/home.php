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
  <link rel="stylesheet" type="text/css" href="application/css/jquery.fancybox.css">

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
          <h1>COSTA COFFEE UNIVERSE</h1>
          <p>Love For The Bean</p>
        </a>
      </div>
    </div>

    <!-- END OF LOGO -->

    <!-- START OF NAVIGATION ELEM
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    Link Menu item button to the links class navbar-collapse selector -->
    <div class="collapse navbar-collapse">
      <div class="container-fluid">

        <!-- Links for navbar -->
        <ul class="navbar-nav mr-auto"> <!-- mx-auto = centre align, default to left, mr-auto to right -->
          <li class="nav-item">
            <a id="navHome" class="nav-link active" href="#" onclick="changeHomeClassToActive()">Home</a>
          </li>
          <li class="nav-item">
            <a id="navAbout" class="nav-link" onclick="changeAboutClassToActive()" href="#" data-bs-toggle="popover"
              data-bs-trigger="hover" data-bs-placement="bottom" title="Checkout upcoming news!">News</a>
          </li>
          <li class="nav-item">
            <a id="navModels" class="nav-link" onclick="changeModelsClassToActive()" href="#" data-bs-toggle="popover"
              data-bs-trigger="hover" data-bs-placement="bottom" title="Checkout the 3D Costa models!"
              data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
          </li>
          <!-- Button trigger modal -->
          <li class="nav-item dropdown">
            <a class="nav-link" href='#' data-bs-toggle="modal" data-bs-target="#contactModal">Candidate_Number</a>
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


    <!-- START OF SECOND ROW -->
    <div class="row">
      <div class="col-sm-12">
      </div>
    </div>
    <div class="row">

      <div class="col-sm-4">
        <div class="card-body-home">
          <a href="assets/images/front_page_images/FrontImage2.png" data-fancybox="gallery"
            data-caption="Costa Cup Render">
            <img class="card-img-top img-fluid" src="assets/images/front_page_images/FrontImage2.png" alt="Costa Cup">
          </a>
          <div class="card-body-home-white">
            <div id="title_left" class="text-center"></div>
          </div>
          <div class="card-body-home-news">
            <div id="subTitle_left" class="text-center"></div>
          </div>
          <div id="description_left"></div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card-body-home">
          <a href="assets/images/front_page_images/FrontImage3.png" data-fancybox
            data-caption="Costa Caramel Frappe Render">
            <img class="card-img-top img-fluid" src="assets/images/front_page_images/FrontImage2.png"
              alt="Costa Caramel Frappe">
          </a>
          <div class="card-body-home-white">
            <div id="title_center" class="text-center"></div>
          </div>
          <div class="card-body-home-news">
            <div id="subTitle_center" class="text-center"></div>
          </div>
          <div id="description_center"></div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card-body-home">
          <a href="assets/images/front_page_images/FrontImage4.png" data-fancybox
            data-caption="Costa Canned Coffee Vanilla Latte Render">
            <img class="card-img-top img-fluid" src="assets/images/front_page_images/FrontImage2.png"
              alt="Costa Canned Coffee Vanilla Latte">
          </a>
          <div class="card-body-home-white">
            <div id="title_right" class="text-center"></div>
          </div>
          <div class="card-body-home-news">
            <div id="subTitle_right" class="text-center"></div>
          </div>
          <div id="description_right"></div>
        </div>
      </div>

      <div class="card text-center">
        <div class="card-body-home-news-main">
          <div class="card-header">
            NEWS
          </div>
        </div>
        <div class="card-body-home-news">
          <h5 class="card-title">Our new food range has released!</h5>
          <p class="card-text">Find out more through the link below!</p>
          <a href="https://www.costa.co.uk/menu" class="btn btn-primary">Visit our full menu range!</a>
        </div>
      </div>

      <!-- START OF FIRST ROW
    <div class="col-sm-12">
      <div id="main_3d_image">
        <div id="main_text" class="col-xs-12 text-center">
          <div id="title_home"></div> 
          <div id="subTitle_home"></div> 
          <div id="description_home"></div>
         The below is only a taster of our range.
        </div>
      </div>
    </div>
    </div>
-->

      <!-- carousel -->
      <div class="row">
        <div class="col-sm-6">
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/front_page_images/FrontImage2.png"
                  href="assets/images/front_page_images/FrontImage4.png" data-fancybox="gallery"
                  data-caption="Costa Cup Render" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="card-body-home-news">
                    <h5>A taster of our food range</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/front_page_images/FrontImage3.png"
                  href="assets/images/front_page_images/FrontImage4.png" data-fancybox="gallery"
                  data-caption="Costa Cup Render" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="card-body-home-news">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/front_page_images/FrontImage4.png"
                  href="assets/images/front_page_images/FrontImage4.png" data-fancybox="gallery"
                  data-caption="Costa Cup Render" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="card-body-home-news">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body-home-news">
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
            </div>
            <div class="card-body-home-news">
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div id="carouselExampleCaptions2" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/front_page_images/FrontImage2.png"
                  href="assets/images/front_page_images/FrontImage4.png" data-fancybox="gallery"
                  data-caption="Costa Cup Render" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="card-body-home-news">
                    <h5>A taster of our drinks range</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/front_page_images/FrontImage3.png"
                  href="assets/images/front_page_images/FrontImage4.png" data-fancybox="gallery"
                  data-caption="Costa Cup Render" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="card-body-home-news">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/images/front_page_images/FrontImage4.png"
                  href="assets/images/front_page_images/FrontImage4.png" data-fancybox="gallery"
                  data-caption="Costa Cup Render" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="card-body-home-news">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body-home-news">
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
            </div>
            <div class="card-body-home-news">
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- carousel end -->

    </div>
  </div>

  <!-- END OF FIRST ROW -->

  <!-- END OF HOME -->

  <div id="about">
    <div class="row"> <!-- We hold the 3D model and the gallery in a row, the gallery on the right side -->
      <!-- The 3D model holder -->
      <div class="col-sm-12">
        <div class="card text-left">
        </div>
        <!-- TODO Nav Menu to choose models -->
        <div class="card text-left">
          <div class="card-body text-center">
            <h2 class="card-title text-center">News Categories</h2>
            <a id="navCostaNews" button type="button" class="btn btn-success">Costa News</button> </a>
            <a id="navColaNews" button type="button" class="btn btn-primary">Coca Cola News</button> </a>
            <br>
          </div>
        </div>
        <div id="costaNews">
          <div class="card text-center">
            <div class="card-body-home-news-main">
              <div class="card-header">
                NEWS
              </div>
              <div class="card-body-home-news">
                <div class="auto-resizable-iframe">
                  <div id="videoHolder">
                    <iframe src="https://www.youtube.com/embed/55DmnepMuTE?si=RCTSf5hy3zSs6b7g"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
                </div>
                <h5 class="card-title">The reveal is here!</h5>
                Get our Christmas Cups in store!
              </div>
            </div>
          </div>
        </div>

        <div id="colaNews">
          <div class="card text-center">
            <div class="card-body-home-news-main">
              <div class="card-header">
                NEWS
              </div>
              <div class="card-body-home-news">
                <div class="auto-resizable-iframe">
                  <div id="videoHolder">
                    <iframe src="https://www.youtube.com/embed/chFGAkBRHVE?si=2X5OxFu4vyHsBpJn"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
                </div>
                <h5 class="card-title">We are also part of the Coca-Cola company.</h5>
                Find Coca-Cola drinks in store with Costa today!
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

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
              <h2 class="card-title text-center">Products</h2>
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
                      <p class="card-text"><?php echo $data[0]["modelDescription"]; ?></p>
                    </div>
                  </div>
                </div>
                <!-- END OF FINAL ROW -->
                <div class="col-sm-6">
                  <h4 class="card-title text-center">Model Creation</h4>
                  <div class="card-text"><?php echo $data[0]["x3dCreationMethod"]; ?></div>
                </div>

              </div>
              <br>
              <div class="card-body-white-flavour">
                <div class="card-title text-center">
                  <!-- CHOOSE SKINS -->
                  <h4 class="card-title text-center">Flavours</h4>
                  <a id="cupButton" button type="button" class="btn btn-success">Costa Cup</button> </a>
                  <!-- END OF CHOOSE SKINS -->
                </div>
              </div>
            </div>

            <!-- MODEL 2 -->
            <div id="bottle" style="display:none;">
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
              <div class="card-body-white-flavour">
                <div class="card-title text-center">
                  <h4 class="card-title">Flavours</h4>
                  <a id="caramelButton" class="btn btn-success" onclick="changeTextureCaramel()">Frappe
                    Caramel</button></a>
                  <a id="brownieButton" class="btn btn-primary" onclick="changeTextureBrownie()">Frappe
                    Brownie</button></a>
                  <!-- END OF CHOOSE SKINS -->
                </div>
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
              <div class="card-body-white-flavour">
                <div class="card-title text-center">
                  <h4 class="card-title">Flavours</h4>
                  <a id="vanillaLatteButton" class="btn btn-success" onclick="changeTextureVanillaLatte()">Vanilla
                    Latte</a>
                  <a id="latteButton" class="btn btn-primary" onclick="changeTextureLatte()">Latte</a>
                  <!-- END OF CHOOSE SKINS -->
                </div>
              </div>
            </div>
            <!-- END OF MODEL 3 -->

            <!-- X3D MODEL SCENES -->
            <div class="model3D">
              <div class="card-body text-center">

                <div id="costaCupViewPanel">
                  <h4 class="card-title text-center">
                    View the model, video or image.
                  </h4>
                  <a id="cupModel" button type="button" class="btn btn-success">Model</a>
                  <a id="cupImage" button type="button" class="btn btn-primary">Image</a>
                  <a id="cupVideo" button type="button" class="btn btn-primary">Video</a>
                  <br>
                </div>

                <div id="costaBottleViewPanel">
                  <h4 class="card-title text-center">
                    View the model, video or image.
                  </h4>
                  <a id="bottleModel" button type="button" class="btn btn-success">Model</a>
                  <a id="bottleImage" button type="button" class="btn btn-primary">Image</a>
                  <a id="bottleVideo" button type="button" class="btn btn-primary">Video</a>
                  <br>
                </div>

                <div id="costaCanViewPanel">
                  <h4 class="card-title text-center">
                    View the model, video or image.
                  </h4>
                  <a id="canModel" button type="button" class="btn btn-success">Model</a>
                  <a id="canImage" button type="button" class="btn btn-primary">Image</a>
                  <a id="canVideo" button type="button" class="btn btn-primary">Video</a>
                  <br>
                </div>
              </div>

              <div id="x3dScene">
                <x3d id="wire">
                  <scene>
                    <Switch whichChoice="0" id='SceneSwitch'>
                      <transform>
                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                          url="assets/x3d/Costa_Cup.x3d"> </inline>
                      </transform>
                      <transform>
                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                          url="assets/x3d/Costa_Bottle.x3d"> </inline>
                      </transform>
                      <transform>
                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                          url="assets/x3d/Costa_Can.x3d"> </inline>
                      </transform>
                    </Switch>
              </div>

              <div class="auto-resizable-iframe">
                <div id="x3dImageCup" style="display:none;">
                  <a href="assets/images/front_page_images/FrontImage4.png" data-fancybox
                    data-caption="Costa Canned Coffee Vanilla Latte Render">
                    <img class="card-img-top img-fluid" src="assets/images/front_page_images/FrontImage2.png"
                      alt="Costa Canned Coffee Vanilla Latte">
                  </a>
                </div>
              </div>

              <div class="auto-resizable-iframe">
                <div id="x3dVideoCup" style="display:none;">
                  <iframe width="600" height="400" src="https://www.youtube.com/embed/Q5_3O50SnfY?si=lwDnPtgF2NtyH3p6"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>

              <div class="auto-resizable-iframe">
                <div id="x3dImageBottle" style="display:none;">
                  <a href="assets/images/front_page_images/FrontImage4.png" data-fancybox
                    data-caption="Costa Canned Coffee Vanilla Latte Render">
                    <img class="card-img-top img-fluid" src="assets/images/front_page_images/FrontImage2.png"
                      alt="Costa Canned Coffee Vanilla Latte">
                  </a>
                </div>
              </div>

              <div class="auto-resizable-iframe">
                <div id="x3dVideoBottle" style="display:none;">
                  <iframe width="600" height="400" src="https://www.youtube.com/embed/D-tjyNq7drk?si=FxBZD5ec_oMKat8x"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>

              <div class="auto-resizable-iframe">
                <div id="x3dImageCan" style="display:none;">
                  <a href="assets/images/front_page_images/FrontImage4.png" data-fancybox
                    data-caption="Costa Canned Coffee Vanilla Latte Render">
                    <img class="card-img-top img-fluid" src="assets/images/front_page_images/FrontImage2.png"
                      alt="Costa Canned Coffee Vanilla Latte">
                  </a>
                </div>
              </div>

              <div class="auto-resizable-iframe">
                <div id="x3dVideoCan" style="display:none;">
                  <iframe width="600" height="400" src="https://www.youtube.com/embed/dccvwUQxhL4?si=n6QbdhsGMgl957PY"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>

              </scene>
              </x3d>

            </div>
          </div>
        </div>

        <!-- END OF X3D MODEL SCENES -->

        <div id="interaction" class="col-sm-3"> <!-- This will hold the model interactions -->
          <br>
          <!-- CAMERA VIEWS -->
          <div class="card-body text-center">
            <h4 class="card-title text-center">
              <div id="interactionPanelCameraTitle"></div>
            </h4>
            <!-- The X3D model file will contain the camera locations -->
            <button type="button" class="btn btn-primary mt-2" onclick="cameraFront();">Front</button>
            <button type="button" class="btn btn-primary mt-2" onclick="cameraBack();">Back</button>
            <button type="button" class="btn btn-primary mt-2" onclick="cameraLeft();">Left</button>
            <button type="button" class="btn btn-primary mt-2" onclick="cameraRight();">Right</button>
            <button type="button" class="btn btn-primary mt-2" onclick="cameraTop();">Top</button>
            <button type="button" class="btn btn-primary mt-2" onclick="cameraBottom();">Bottom</button>
            <br>
            <div id="interactionPanelCamera"></div>
          </div>
          <!-- END OF CAMERA VIEWS -->
          <!-- ANIMATION CONTROLS -->
          <div class="card-body text-center">
            <h4 class="card-title text-center">
              <div id="interactionPanelAnimationTitle"></div>
            </h4>
            <a id="spinXButton" button type="button" class="btn btn-danger mt-2" onclick="spinX();">RotX</a>
            <a id="spinYButton" button type="button" class="btn btn-danger mt-2" onclick="spinY();">RotY</a>
            <a id="spinZButton" button type="button" class="btn btn-danger mt-2" onclick="spinZ();">RotZ</a>
            <button type="button" class="btn btn-primary mt-2 " onclick="stopRotation();">Stop Rotation</button>
            <br>
            <div id="interactionPanelAnimate"></div>
          </div>

          <!-- END OF ANIMATION CONTROLS -->
          <!-- RENDERER CONTROLS -->
          <div class="card-body text-center">
            <h4 class="card-title text-center">
              <div id="interactionPanelRenderTitle"></div>
            </h4>
            <a id="wireFrameButton" button type="button" class="btn btn-danger mt-2"
              onclick="wireframe();">Wireframe</a>
            <a id="toggleHeadlightsBtn" button type="button" class="btn btn-success mt-2" onclick="headlight();">Toggle
              Headlight</a>
            <a id="toggleLightsBtn" button type="button" class="btn btn-success mt-2" onclick="toggleLights();">Toggle
              Scene
              Lights</a>
            <br>
            <div id="interactionPanelRender"></div>
          </div>
          <!-- END OF RENDERER CONTROLS -->
          <!-- END OF ROW -->

          <!-- Where the gallery is held TODO: Add in the 3 gallery pages -->
          <div class="card-body">
            <div class="card text-left">
              <div class="card-header gallery-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a id="navGalleryCup" class="nav-link active" href="#">Costa Cup</a>
                  </li>
                  <li class="nav-item">
                    <a id="navGalleryBottle" class="nav-link" href="#">Costa Bottle</a>
                  </li>
                  <li class="nav-item">
                    <a id="navGalleryCan" class="nav-link" href="#">Costa Can</a>
                  </li>
                </ul>
              </div>
              <div class="card-body text-center">
              <div id="cup_gallery">
                <div id="title_gallery"></div>
                <div class="gallery_cup" id="gallery_cup"></div>
                <div id="description_gallery"> This is the cup gallery</div> <!-- desc gallery overriding text -->
                </div>
                <div id="bottle_gallery">
                <div id="title_gallery"></div>
                <div class="gallery_bottle" id="gallery_bottle"></div>
                <div id="description_gallery"> This is the bottle gallery</div>
                </div>
                <div id="can_gallery">
                <div id="title_gallery"></div>
                <div class="gallery_can" id="gallery_can"></div>
                <div id="description_gallery"> This is the can gallery.</div>
              </div>
            </div>
          </div>
        </div>
        <!-- END OF GALLERY -->
        <br>

        <!-- END OF MODELS -->
      </div>
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
        <div class="navbar-text float-left copyright">
          <p><a span class="align-baseline" href="#" id="navOriginality" style="color:#ffffff;">Statement of Originality
            </a> | <a id="navReferences" href="#" style="color:#ffffff;">| References | </a> | <a
              href="https://github.com/Bread02/Web3DFinalProject" style="color:#ffffff;">Github</a></span></p>
        </div>
      </div>
    </nav>
    <!-- END OF FOOTER -->

    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Candidate Number Details</h4>
            <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <p>Candidate Number: 197670</p>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

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
    <script src="application/js/jquery.fancybox.min.js"></script>

    <!-- Try to put this in controller if we can? -->

</body>

</html>