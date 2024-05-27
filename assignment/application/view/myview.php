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

  <title>Costa Coffee Web 3D App</title> <!-- Page title -->
</head>

<body id="body">

  <!-- START OF NAVBAR -->
  <nav class="navbar sticky-top navbar-expand-sm navbar_costa">
    <div class="container-fluid">
      <!-- START OF LOGO -->
      <div class="logo">
        <a class="navbar-brand" href="index.php">
          <h1>COSTA COFFEE UNIVERSE</h1>
          <br>
          <p>For Coffee Lovers</p>
        </a>
      </div>
    </div>
    <!-- END OF LOGO -->

    <!-- HAMBURGER FOR MOBILE -->
    <div class="hamburger">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <!-- END OF HAMBURGER -->

    <!-- NAVIGATION MENU -->
    <div class="collapse navbar-collapse">
      <div class="container-fluid">
        <div class="card text-left"></div> <!-- Gives this a nice line -->
        <!-- Links for navbar -->
        <ul class="navbar-nav mr-auto"> <!-- mx-auto = centre align, default to left, mr-auto to right -->
          <li class="nav-item">
            <a id="navHome" class="nav-link topNavLink active" href="#"
              onclick="changeHomeClassToActive(); stopAudio();">Home</a>
          </li>
          <li class="nav-item">
            <a id="navAbout" class="nav-link topNavLink" onclick="changeAboutClassToActive(); stopAudio();" href="#"
              data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom"
              title="Checkout upcoming news!">News</a>
          </li>
          <li class="nav-item">
            <a id="navModels" class="nav-link topNavLink" onclick="changeModelsClassToActive()" href="#"
              data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom"
              title="Checkout the 3D Costa models!">Models</a>
          </li>
          <!-- Button trigger modal -->
          <li class="nav-item dropdown">
            <a class="nav-link" href='#' data-bs-toggle="modal" data-bs-target="#contactModal">Candidate</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- END OF NAVIGATION MENU -->
    <!-- END OF NAVIGATION ELEMENT OF BAR -->

  </nav>
  <!-- END OF TOP NAVBAR -->

  <!-- Start of the SPA -->
  <!-- START OF HOME -->
  <div id="home" class="container-fluid main_contents">
    <div class="card text-left"></div> <!-- Gives this a nice line at the top of the page -->

    <!-- START OF FIRST ROW -->
    <div class="row">
      <!-- CUP -->
      <div class="col-sm-4 d-flex align-items-stretch mb-3">
        <div class="card-body-home">
          <a href="assets/images/front_page_images/CupRender1.jpg" data-fancybox="gallery" data-caption="Costa Cup">
            <img class="card-img-top img-fluid" src="assets/images/front_page_images/CupRender1.jpg" alt="Costa Cup">
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
      <!-- END OF CUP -->
      <!-- BOTTLE -->
      <div class="col-sm-4 d-flex align-items-stretch mb-3">
        <div class="card-body-home">
          <a href="assets/images/front_page_images/TwoBottleRender.jpg" data-fancybox
            data-caption="Costa Caramel Frappe">
            <img class="card-img-top img-fluid" src="assets/images/front_page_images/TwoBottleRender.jpg"
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
      <!-- END OF BOTTLE -->
      <!-- CAN -->
      <div class="col-sm-4 d-flex align-items-stretch mb-3">
        <div class="card-body-home">
          <a href="assets/images/front_page_images/LatteVanillaLatteRender5.jpg" data-fancybox
            data-caption="Costa Coffee canned vanilla Latte and Costa Coffee canned Latte">
            <img class="card-img-top img-fluid" src="assets/images/front_page_images/LatteVanillaLatteRender5.jpg"
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
      <!-- END OF CAN -->
    </div>
    <!-- END OF FIRST ROW -->

    <!-- Home News -->
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
    <!-- End of Home News -->

    <!-- carousel -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div id="carouselExampleCaptionsOne" class="carousel slide" data-bs-interval="4000" data-bs-ride="carousel">
            <!-- CAROUSEL SLIDE INDICATORS -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptionsOne" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptionsOne" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptionsOne" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
              <!-- END OF CAROUSEL SLIDE INDICATORS -->
            </div>
            <!-- CAROUSEL ITEMS -->
            <div class="carousel-inner">
              <div class="carousel-item active card-body-home">
                <img src="assets/images/front_page_images/egg_muffin.jpg"
                  href="assets/images/front_page_images/egg_muffin.jpg" data-fancybox="gallery"
                  data-caption="Photo of Costa Coffee Egg Muffin" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <div class="card-body-home-carousel">
                    <div id="carousel_food_title_one"></div>
                    <div id="carousel_food_description_one"></div>
                  </div>
                </div>
              </div>
              <div class="carousel-item card-body-home">
                <img src="assets/images/front_page_images/Cheese_Bean.jpg"
                  href="assets/images/front_page_images/Cheese_Bean.jpg" data-fancybox="gallery"
                  data-caption="Photo of Costa Coffee Cheese and Bean Toastie" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <div class="card-body-home-carousel">
                    <div id="carousel_food_title_two"></div>
                    <div id="carousel_food_description_two"></div>
                  </div>
                </div>
              </div>
              <div class="carousel-item card-body-home">
                <img src="assets/images/front_page_images/Carrot_Cake.jpg"
                  href="assets/images/front_page_images/Carrot_Cake.jpg" data-fancybox="gallery"
                  data-caption="Photo of Costa Coffee Carrot Cake" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <div class="card-body-home-carousel">
                    <div id="carousel_food_title_three"></div>
                    <div id="carousel_food_description_three"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END OF CAROUSEL ITEMS -->
            <!-- CAROUSEL NAVIGATION - TODO -->
            <div class="card-body-home-borderless">
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionsOne"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
            </div>
            <div class="card-body-home-borderless">
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptionsOne"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- END OF CAROUSEL NAVIGATION -->
          </div>
        </div>
        <div class="col-sm-6">
          <div id="carouselExampleCaptionsTwo" class="carousel slide" data-bs-interval="4000" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptionsTwo" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptionsTwo" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptionsTwo" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <!-- CAROUSEL ITEMS -->
            <div class="carousel-inner">
              <div class="carousel-item active card-body-home">
                <img src="assets/images/front_page_images/AllModelsRender2.jpg"
                  href="assets/images/front_page_images/AllModelsRender2.jpg" data-fancybox="gallery"
                  data-caption="Photo of different Costa Coffee drinks" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <div class="card-body-home-carousel">
                    <div id="carousel_drink_title_one"></div>
                    <div id="carousel_drink_description_one"></div>
                  </div>
                </div>
              </div>
              <div class="carousel-item card-body-home">
                <img src="assets/images/front_page_images/AllModelsRender3.jpg"
                  href="assets/images/front_page_images/AllModelsRender3.jpg" data-fancybox="gallery"
                  data-caption="Photo of different Costa Coffee drinks 2" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <div class="card-body-home-carousel">
                    <div id="carousel_drink_title_two"></div>
                    <div id="carousel_drink_description_two"></div>
                  </div>
                </div>
              </div>
              <div class="carousel-item card-body-home">
                <img src="assets/images/front_page_images/AllModelsRender4.jpg"
                  href="assets/images/front_page_images/AllModelsRender4.jpg" data-fancybox="gallery"
                  data-caption="Photo of different Costa Coffee drinks 3" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <div class="card-body-home-carousel">
                    <div id="carousel_drink_title_three"></div>
                    <div id="carousel_drink_description_three"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END OF CAROUSEL ITEMS -->
            <div class="card-body-home-borderless">
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionsTwo"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
            </div>
            <div class="card-body-home-borderless">
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptionsTwo"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- carousel end -->

  </div>
  </div> <!-- END OF HOME -->

  <!-- START OF ABOUT -->
  <div id="about">
    <div class="row"> <!-- We hold the 3D model and the gallery in a row, the gallery on the right side -->
      <!-- The 3D model holder -->
      <div class="col-sm-12">
        <div class="card text-left"> <!-- Gives this a nice line at the top of the page -->
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
  </div> <!-- END OF ABOUT -->

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
            <div class="hr">
              <hr>
            </div>
            <a id="navCup" button type="button" class="btn btn-success  mt-2" onclick="cupScene();">Costa Cup</button>
            </a>
            <a id="navBottle" button type="button" class="btn btn-primary  mt-2" onclick="bottleScene();">Costa
              Bottle</button> </a>
            <a id="navCan" button type="button" class="btn btn-primary  mt-2" onclick="canScene();">Costa Can</button>
            </a>
          </div>
        </div>

        <!-- END OF NAV MENU TO CHOOSE MODELS -->

        <div class="card-body" class="container-fluid main_contents">

          <!-- MODEL 1 -->
          <div id="cup">
            <!-- The 3D Model Card -->
            <div class="card-body">
              <h3 class="card-title text-center">
                <?php echo $data[0]["x3dModelTitle"]; ?>
              </h3>
              <br>
            </div>

            <!-- START OF ROW -->
            <div class="row">
              <div class="col-sm-6 rightBorder">
                <div class="card-body">
                  <div id="cupDescription">
                    <div class="hr marginPullUpTitles">
                      <br>
                      <hr>
                    </div>
                    <h4 class="card-title text-center marginPullUpTitles"><?php echo $data[0]["modelTitle"]; ?></h4>
                    <div class="hr">
                      <hr>
                    </div>
                    <p class="card-text text-center modelDescription"><?php echo $data[0]["modelDescription"]; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="hr marginPullUpTitles">
                  <br>
                  <hr>
                </div>
                <h4 class="card-title text-center marginPullUpTitles">Model Creation</h4>
                <div class="hr">
                  <hr>
                </div>
                <div class="card-text text-center drinksText modelDescription">
                  <?php echo $data[0]["x3dCreationMethod"]; ?>
                </div>
              </div>
            </div>
            <!-- END OF ROW -->
            <br>
            <div class="card-body-white-flavour">
              <div class="card-title text-center">
                <!-- CHOOSE SKINS -->
                <h3 class="card-title text-center">Flavours</h3>
                <a id="cupMilkyButton" class="btn btn-success" onclick="changeTextureMilky()">Flat White</button></a>
                <a id="cupBlackButton" class="btn btn-primary" onclick="changeTextureBlack()">Americano</button></a>
                <!-- END OF CHOOSE SKINS -->
              </div>
            </div>
          </div>
          <!-- END OF MODEL 1 -->

          <!-- MODEL 2 -->
          <div id="bottle" style="display:none;">
            <!-- The 3D Model Card -->
            <div class="card-body">
              <h3 class="card-title text-center"> <?php echo $data[1]["x3dModelTitle"]; ?></h3>
            </div>
            <br>

            <!-- START OF ROW -->
            <div class="row">
              <div class="col-sm-6 rightBorder">
                <div class="card-body">
                  <div id="bottleDescription">
                    <div class="hr marginPullUpTitles">
                      <hr>
                    </div>
                    <h4 class="card-title text-center marginPullUpTitles"><?php echo $data[1]["modelTitle"]; ?></h4>
                    <div class="hr">
                      <hr>
                    </div>
                    <p class="card-text text-center modelDescription"><?php echo $data[1]["modelDescription"]; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="hr marginPullUpTitles">
                  <hr>
                </div>
                <h4 class="card-title text-center marginPullUpTitles">Model Creation</h4>
                <div class="hr">
                  <hr>
                </div>
                <div class="card-text text-center drinksText modelDescription">
                  <?php echo $data[1]["x3dCreationMethod"]; ?>
                </div>
              </div>
            </div>
            <!-- END OF ROW -->

            <br>
            <!-- CHOOSE SKINS -->
            <div class="card-body-white-flavour">
              <div class="card-title text-center">
                <h3 class="card-title">Flavours</h3>
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

            <!-- START OF ROW -->
            <div class="row">
              <div class="col-sm-6 rightBorder">
                <div class="card-body">
                  <div id="canDescription">
                    <div class="hr marginPullUpTitles">
                      <hr>
                    </div>
                    <h4 class="card-title text-center marginPullUpTitles"><?php echo $data[2]["modelTitle"]; ?></h4>
                    <div class="hr">
                      <hr>
                    </div>
                    <p class="card-text text-center modelDescription"><?php echo $data[2]["modelDescription"]; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="hr marginPullUpTitles">
                  <hr>
                </div>
                <h4 class="card-title text-center marginPullUpTitles">Model Creation</h4>
                <div class="hr">
                  <hr>
                </div>
                <div class="card-text text-center drinksText modelDescription">
                  <?php echo $data[2]["x3dCreationMethod"]; ?>
                </div>
              </div>
            </div>
            <!-- END OF ROW -->

            <br>
            <!-- CHOOSE SKINS -->
            <div class="card-body-white-flavour">
              <div class="card-title text-center">
                <h3 class="card-title">Flavours</h3>
                <a id="vanillaLatteButton" class="btn btn-success" onclick="changeTextureVanillaLatte()">Vanilla
                  Latte</a>
                <a id="latteButton" class="btn btn-primary" onclick="changeTextureLatte()">Latte</a>
                <!-- END OF CHOOSE SKINS -->
              </div>
            </div>
          </div>
          <!-- END OF MODEL 3 -->

          <!-- X3D MODEL -->
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

            <!-- X3D MODEL SCENE -->
            <div id="x3dScene">
              <x3d id="wire" class="wire"> <!-- Height needs to be fixed to this otherwise it falls out of page -->
                <scene>
                  <Switch whichChoice="0" id='SceneSwitch'>
                    <transform>
                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                        url="<?php echo $data[0]["modelURL"]; ?>"> </inline>
                    </transform>
                    <transform>
                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                        url="<?php echo $data[1]["modelURL"]; ?>"> </inline>
                    </transform>
                    <transform>
                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();"
                        url="<?php echo $data[2]["modelURL"]; ?>"> </inline>
                    </transform>
                  </Switch>
            </div>
            <!-- END OF X3D MODEL SCENE -->


            <div class="auto-resizable-iframe">
              <div id="x3dImageCup" style="display:none;">
                <a href="<?php echo $data[0]["modelImageURL"]; ?>" data-fancybox
                  data-caption="<?php echo $data[0]["modelImageDataCaption"]; ?>">
                  <img class="card-img-top img-fluid" src="<?php echo $data[0]["modelImageURL"]; ?>"
                    alt="<?php echo $data[0]["modelImageDataCaption"]; ?>">
                </a>
              </div>
            </div>

            <div class="auto-resizable-iframe">
              <div id="x3dVideoCup" style="display:none;">
                <iframe width="600" height="400" src="<?php echo $data[0]["modelYouTubeURL"]; ?>"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>

            <div class="auto-resizable-iframe">
              <div id="x3dImageBottle" style="display:none;">
                <a href="<?php echo $data[1]["modelImageURL"]; ?>" data-fancybox
                  data-caption="<?php echo $data[1]["modelImageDataCaption"]; ?>">
                  <img class="card-img-top img-fluid" src="<?php echo $data[1]["modelImageURL"]; ?>"
                    alt="<?php echo $data[1]["modelImageDataCaption"]; ?>">
                </a>
              </div>
            </div>

            <div class="auto-resizable-iframe">
              <div id="x3dVideoBottle" style="display:none;">
                <iframe width="600" height="400" src="<?php echo $data[1]["modelYouTubeURL"]; ?>"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>

            <div class="auto-resizable-iframe">
              <div id="x3dImageCan" style="display:none;">
                <a href="<?php echo $data[2]["modelImageURL"]; ?>" data-fancybox
                  data-caption="<?php echo $data[2]["modelImageDataCaption"]; ?>">
                  <img class="card-img-top img-fluid" src="<?php echo $data[2]["modelImageURL"]; ?>"
                    alt="<?php echo $data[2]["modelImageDataCaption"]; ?>">
                </a>
              </div>
            </div>

            <div class="auto-resizable-iframe">
              <div id="x3dVideoCan" style="display:none;">
                <iframe width="600" height="400" src="<?php echo $data[2]["modelYouTubeURL"]; ?>"
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
        <div class="card text-left"></div> <!-- Gives this a nice line at the top of the page -->
        <!-- CAMERA VIEWS -->
        <div class="card-body text-center borderedAllAround">
          <h3 class="card-title text-center">
            <div id="interactionPanelCameraTitle"></div>
          </h3>
          <div id="PaddedTextInteractionPanel">
            <div id="interactionPanelCamera"></div>
          </div>
          <div class="hr">
            <hr>
          </div>
          <!-- The X3D model file will contain the camera locations -->
          <div id="PaddedButtonsInteractionPanel">
            <button type="button" class="btn btn-primary mt-2" onclick="cameraFront();">Front</button>
            <button type="button" class="btn btn-primary mt-2" onclick="cameraBack();">Back</button>
            <button type="button" class="btn btn-primary mt-2" onclick="cameraLeft();">Left</button>
            <button type="button" class="btn btn-primary mt-2" onclick="cameraRight();">Right</button>
            <button type="button" class="btn btn-primary mt-2" onclick="cameraTop();">Top</button>
            <button type="button" class="btn btn-primary mt-2" onclick="cameraBottom();">Bottom</button>
          </div>
        </div>
        <!-- END OF CAMERA VIEWS -->
        <!-- ANIMATION CONTROLS -->
        <div class="card-body text-center borderedAllAround">
          <h3 class="card-title text-center">
            <div id="interactionPanelAnimationTitle"></div>
          </h3>
          <div id="PaddedTextInteractionPanel">
            <div id="interactionPanelAnimate"></div>
          </div>
          <div class="hr">
            <hr>
          </div>
          <div id="PaddedButtonsInteractionPanel">
            <a id="spinXButton" button type="button" class="btn btn-danger mt-2" onclick="spinX();">RotX</a>
            <a id="spinYButton" button type="button" class="btn btn-danger mt-2" onclick="spinY();">RotY</a>
            <a id="spinZButton" button type="button" class="btn btn-danger mt-2" onclick="spinZ();">RotZ</a>
            <button type="button" class="btn btn-primary mt-2 " onclick="stopAllAnimations();">Stop All
              Animations</button>
          </div>
        </div>

        <!-- END OF ANIMATION CONTROLS -->
        <!-- RENDERER CONTROLS -->
        <div class="card-body text-center borderedAllAround">
          <h3 class="card-title text-center">
            <div id="interactionPanelRenderTitle"></div>
          </h3>
          <div id="PaddedTextInteractionPanel">
            <div id="interactionPanelRender"></div>
          </div>
          <div class="hr">
            <hr>
          </div>
          <div id="PaddedButtonsInteractionPanel">
            <a id="wireFrameButton" button type="button" class="btn btn-danger mt-2"
              onclick="wireframe();">Wireframe</a>
            <a id="toggleHeadlightsBtn" button type="button" class="btn btn-success mt-2" onclick="headlight();">Toggle
              Headlight</a>
            <a id="toggleLightsBtn" button type="button" class="btn btn-success mt-2" onclick="toggleLights();">Toggle
              Scene
              Lights</a>
          </div>
        </div>
        <!-- END OF RENDERER CONTROLS -->

        <!-- BONUS CONTROLS -->
        <div class="card-body text-center borderedAllAround">
          <h3 class="card-title text-center">
            <div id="interactionPanelExtrasTitle"></div>
          </h3>
          <div id="PaddedTextInteractionPanel">
            <div id="interactionPanelExtras"></div>
          </div>
          <div class="hr">
            <hr>
          </div>
          <div id="PaddedButtonsInteractionPanel">
            <a id="playMusicButton" button type="button" class="btn btn-danger mt-2" onclick="toggleAudio();">Toggle
              Music</a>
            <a id="toggleHeadlightsBtn" button type="button" class="btn btn-success mt-2"
              onclick="changeBackground();">Change Background</a>
          </div>
          <div class="hr">
            <hr>
            <div id="BackgroundNumberCounter" class="card-body text-center">
              Background: 1 / 5
            </div>
          </div>
        </div>

        <!-- END OF RENDERER CONTROLS -->

        <!-- Where the gallery is held TODO: Add in the 3 gallery pages -->
        <div class="card-body">
          <div class="card text-center">
            <div class="gallery-header">
              <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item-gallery">
                  <a id="navGalleryCup" class="nav-link active" href="#">Costa Cup</a>
                </li>
                <li class="nav-item-gallery">
                  <a id="navGalleryBottle" class="nav-link" href="#">Costa Bottle</a>
                </li>
                <li class="nav-item-gallery">
                  <a id="navGalleryCan" class="nav-link" href="#">Costa Can</a>
                </li>
              </ul>
            </div>
            <div class="card-body text-center">
              <div id="cup_gallery">
                <div id="titleGallery">
                  <h3>3D Renders Cup</h3>
                </div>
                <div class="gallery_cup" id="gallery_cup"></div>
                <div id="description_gallery"> The cup was renderered using Blender either using the Cycles renderer or
                  the Eevee renderer.</div> <!-- desc gallery overriding text -->
              </div>
              <div id="bottle_gallery">
                <div id="titleGallery">
                  <h3>3D Renders Bottles</h3>
                </div>
                <div class="gallery_bottle" id="gallery_bottle"></div>
                <div id="description_gallery"> These bottles were renderered in Blender either using the Cycles renderer
                  or the Eevee renderer.</div>
              </div>
              <div id="can_gallery">
                <div id="titleGallery">
                  <h3>3D Renders Cans</h3>
                </div>
                <div class="gallery_can" id="gallery_can"></div>
                <div id="description_gallery"> These cans were renderered in Blender either using the Cycles renderer or
                  the Eevee renderer.</div>
              </div>
            </div>
          </div>
        </div>
        <!-- END OF GALLERY -->
        <br>
      </div>
    </div>
  </div> <!-- END OF MODELS -->

  <!-- START OF STATEMENT OF ORIGINALITY -->
  <div id="originality">
    <div class="card">
      <div class="card-body">
        <h1>Statement Of Originality</h1>
        <div id="originalityStatement"></div>
      </div>
    </div>
  </div>
  <!-- END OF STATEMENT OF ORIGINALITY -->

  <!-- START OF REFERENCES -->
  <div id="references">
    <div class="card">
      <div class="card-body">
        <h1>References</h1>
        <hr>
        <h2>Texture Image Sources</h2>
        <h5>Cup</h5>
        Costa Text for Cup: Costa Coffee Logo (2024) Costa Coffee. Available at: <a
          href="https://en.wikipedia.org/wiki/Costa_Coffee#/media/File:Costa_Coffee_logo.svg">
        https://en.wikipedia.org/wiki/Costa_Coffee#/media/File:Costa_Coffee_logo.svg</a> (Accessed: 27 May 2024).
        <br>
        <br>

        <h5>Cans</h5>
        Vanilla Latte: Costa Vanilla Latte Coffee Drink 12 Cans of 250 ml (2024) Amazon.co.uk. Available at: <a
          href="https://www.amazon.co.uk/Costa-Vanilla-Latte-Coffee-Drink/dp/B095CLLTQZ">
          https://www.amazon.co.uk/Costa-Vanilla-Latte-Coffee-Drink/dp/B095CLLTQZ</a> (Accessed: 27 May 2024).
        <br>
        <br>
        Latte: Costa Coffee Latte 250ml (no date) Sainsbury’s. Available at: <a
          href="https://www.sainsburys.co.uk/gol-ui/product/costa-coffee-latte-250ml">
          https://www.sainsburys.co.uk/gol-ui/product/costa-coffee-latte-250ml</a> (Accessed: 27 May 2024).
        <br>
        <br>
        Top of Can: Aluminum Stay on Tab SOT Can End for Beverage Can Light Gold (2024) Baofeng. Baofeng. Available at:
        <a href="https://www.xmbaofeng.com/aluminum-stay-on-tab-sot-can-end-for-beverage-can-light-gold">
          https://www.xmbaofeng.com/aluminum-stay-on-tab-sot-can-end-for-beverage-can-light-gold</a> (Accessed: 27 May
          2024).
        <br>
        <br>

        Bottom of Can - Provided by Labs - Can_Texture - From Coca Cola Map</a>
        <br>
        <br>

        <h5>Bottles</h5>
        Caramel Bottle Front: Costa Coffee Frappe Caramel Swirl Iced Coffee 250ml (2024) Tesco Groceries. Available at:
        <a href="https://www.tesco.com/groceries/en-GB/products/311423600">https://www.tesco.com/groceries/en-GB/products/311423600
        </a> (Accessed: 27 May 2024).
        <br>
        <br>
        Caramel Bottle Top - Image by self</a>
        <br>
        <br>
        Caramel Bottle Bottom - Image by self</a>
        <br>
        <br>
        Brownie Bottle Front: Costa Coffee Frappe Choc Fudge Brownie Iced Coffee (2024) Morrisons. Available at: <a
          href="https://groceries.morrisons.com/products/costa-coffee-frappe-choc-fudge-brownie-iced-coffee-594772011 ">
          https://groceries.morrisons.com/products/costa-coffee-frappe-choc-fudge-brownie-iced-coffee-594772011</a> 
          (Accessed: 27 May 2024).
        <br>
        <br>
        Brownie Bottle Top - Image by self
        <br>
        <br>
        Brownie Bottle Bottom - Image by self
        <br>
        <br>
        <h2>Photo Image Sources</h2>
        Costa Egg Muffin (Image edited in photoshop to create grey background): Our Menu (2024) Menu | Costa Coffee.
        Available at: <a href="https://www.costa.co.uk/menu">https://www.costa.co.uk/menu</a> (Accessed: 27 May 2024).
        <br>
        <br>
        Cheese Bean Toastie (Image edited in photoshop to create grey background): Our Menu (2024) Menu | Costa Coffee.
        Available at: <a href="https://www.costa.co.uk/menu"> https://www.costa.co.uk/menu</a> (Accessed: 27 May 2024).
        <br>
        <br>
        Carrot and Walnut Cake Slice (Image edited in photoshop to create grey background): Our Menu (2024) Menu | Costa
        Coffee. Available at: <a href="https://www.costa.co.uk/menu"> https://www.costa.co.uk/menu</a> (Accessed: 27 May
          2024).
        <br>
        <br>
        <h2>Video Sources</h2>
        Costa Coffee Christmas Cup: Christmas Cup reveal (2020) YouTube. Available at: <a
          href="https://www.youtube.com/watch?v=55DmnepMuTE">https://www.youtube.com/watch?v=55DmnepMuTE</a> (Accessed: 27
          May 2024).
        <br>
        <br>
        Coca Cola Zero Sugar: Coca-Cola Zero Sugar: Great taste, Zero sugar | Coca-Cola (2022) YouTube. Available at: <a
          href="https://www.youtube.com/watch?v=chFGAkBRHVE">https://www.youtube.com/watch?v=chFGAkBRHVE</a> (Accessed: 27
          May 2024).
        <br>
        <br>
        Costa Coffee Cappuccino: Costa Coffee Cappuccino (2014) YouTube. Available at: <a
          href="https://www.youtube.com/watch?v=Q5_3O50SnfY">https://www.youtube.com/watch?v=Q5_3O50SnfY</a> (Accessed: 27
          May 2024).
        <br>
        <br>
        Costa Coffee Hot Belgian Chocolate: Costa Coffee Hot Belgian Chocolate (2014) YouTube. Available at: <a
          href="https://www.youtube.com/watch?v=D-tjyNq7drk">https://www.youtube.com/watch?v=D-tjyNq7drk</a> (Accessed: 27
          May 2024).
        <br>
        <br>
        Costa Coffee Latte: Costa Coffee Latte (2014) YouTube. Available at: <a
          href="https://www.youtube.com/watch?v=dccvwUQxhL4">https://www.youtube.com/watch?v=dccvwUQxhL4</a> (Accessed: 27
          May 2024).
        <br>
        <br>
        <h2>Blender Reference Image Sources</h2>
        Costa Coffee Cup: Costa Primo 275 ml Coffee Cups (2024) Amazon.co.uk. Available at: <a
          href="https://www.amazon.co.uk/Costa-Primo-275-Coffee-Cups/dp/B07YB91TW5">https://www.amazon.co.uk/Costa-Primo-275-Coffee-Cups/dp/B07YB91TW5</a>
          (Accessed: 27 May 2024).
        <br>
        <br>
        Brownie Bottle Front: Costa Coffee Frappe Choc Fudge Brownie Iced Coffee (2024) Morrisons. Available at: <a
          href="https://groceries.morrisons.com/products/costa-coffee-frappe-choc-fudge-brownie-iced-coffee-594772011">https://groceries.morrisons.com/products/costa-coffee-frappe-choc-fudge-brownie-iced-coffee-594772011</a>
          (Accessed: 27 May 2024).
        <br>
        <br>
        Latte: Costa Coffee Latte 250ml (no date) Sainsbury’s. Available at: <a
          href="https://www.sainsburys.co.uk/gol-ui/product/costa-coffee-latte-250ml">https://www.sainsburys.co.uk/gol-ui/product/costa-coffee-latte-250ml</a>
          (Accessed: 27 May 2024).
        <br>
        <br>
        <h2>Code Sources</h2>
        CSS iframe code template: How can I make the YouTube player scale to the width of the page but also keep the
        aspect ratio? (2012) Stack Overflow. Available at: <a
          href="https://stackoverflow.com/questions/7737557/how-can-i-make-the-youtube-player-scale-to-the-width-of-the-page-but-also-keep-t">https://stackoverflow.com/questions/7737557/how-can-i-make-the-youtube-player-scale-to-the-width-of-the-page-but-also-keep-t</a>
          (Accessed: 27 May 2024).
        <br>
        <br>
        Starting Template for modelInteractions.js: Jackson, B. (no date) Ben’s Kitchen. Available at: <a
          href="https://stackoverflow.com/questions/7737557/how-can-i-make-the-youtube-player-scale-to-the-width-of-the-page-but-also-keep-t">https://benskitchen.com/</a>
          (Accessed: 27 May 2024).
        <br>
        <br>
        <h2>Audio Sources</h2>
        Jazz music in models page: Macleod, K. (2012) Sidewalk Shade, Incompetech. Available at: <a
          href="https://stackoverflow.com/questions/7737557/how-can-i-make-the-youtube-player-scale-to-the-width-of-the-page-but-also-keep-t">https://incompetech.com/music/royalty-free/index.html?isrc=USUAN1200103</a>
          (Accessed: 27 May 2024).
        </a>
      </div>
    </div>
  </div>
  <!-- END OF REFERENCES -->

  <!-- START OF FOOTER -->
  <ul class="navbar-nav mr-auto"> <!-- mx-auto = centre align, default to left, mr-auto to right -->
    <nav class="navbar-expand-sm navbar_costa footer">
      <div class="container-fluid">
        <div class="float-left">
          <ul class="navbar-nav mr-auto"> <!-- mx-auto = centre align, default to left, mr-auto to right -->
            <li class="nav-item padding-adjustment">
              <a id="navOriginality" class="nav-link" href="#"
                onclick="changeStatementOfOriginalityClassToActive(); stopAudio();">| Statement of Originality |</a>
            </li>
            <li class="nav-item padding-adjustment">
              <a id="navReferences" class="nav-link" onclick="changeReferencesClassToActive(); stopAudio();" href="#">|
                References |</a>
            </li>
            <li class="nav-item padding-adjustment">
              <a class="nav-link" href="https://github.com/Bread02/Web3DFinalProject" target="_blank">| Github |</a>
            </li>
            <li class="nav-item">
              <a id="lightThemeToggle" class="nav-link" href='#'>| Enable Light Theme |</a>
            </li>
            <li class="nav-item">
              <a id="darkThemeToggle" class="nav-link" href='#'>| Enable Dark Theme |</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </ul>
  <!-- END OF FOOTER -->

  <!-- Contact modal -->
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
        <!-- END OF MODAL FOOTER -->
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="application/js/jquery-3.4.1.js"></script>
  <script src="application/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <!-- popper is bundled in this -->

  <script type="text/javascript" src="application/js/custom.js" crossorigin="anonymous"></script>
  <script src="application/js/gallery_generator.js"></script>
  <script src="application/js/swap_restyle.js"></script>
  <script src='application/js/x3dom.js'></script>
  <script src="application/js/modelInteractions.js"></script>
  <script src="application/js/getJsonData.js"></script>
  <script src="application/js/jquery.fancybox.min.js"></script>

</body>

</html>