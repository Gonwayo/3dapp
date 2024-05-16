<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="application/css/bootstrap-4.4.1.css">

    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='application/css/x3dom.css'>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="application/css/all.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="application/css/custom.css">

    <!-- Link in some fonts — Not used because we finally installed the fonts
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
    -->

    <!-- Use a light box to view images in the gallery -->
    <link rel="stylesheet" type="text/css" href="application/css/jquery.fancybox.min.css">

    <title>3D APP ASSIGNMENT</title>

  </head>
  <body id="bodyColor">
    
    <!-- Logo and navigation bar -->
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <div class="container-fluid">  
        <!-- Brand -->
        <div class="logo">
          <a class="navbar-brand" href="index.html">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p>Refreshing the world, one story at a time</p>
          </a>
        </div>
                 
        <!-- Collapsible Navbar Menu Icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Link Menu item button to the links class navbar-collapse selector -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Links -->
            <ul class="navbar-nav ml-auto"> <!-- Use mx-auto to align centre, default to left or use mr-auto -->
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <!-- Added navAbout ID, do we use this? -->
              <li class="nav-item">
                <a id="navAbout" class="nav-link" href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Coke" data-content="About the Coca Cola Family">About</a>
              </li>
          
              <!-- Replace Dropdown from lab 5 with single nav lnk to models -->
              <li class="nav-item">
                <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
              </li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- Start 3D App SPA Contents -->
    <div class="container-fluid main_contents"> <!-- Start SPA Contents -->
        <!-- Home page block element -->
        <div id="home">
          <div class="row"> <!-- Main_3D Image or Carousel -->
            <div class ="col-sm-12">
              <div id="main_3d_image">
                  <div id="main_text" class="col-xs-12 col-sm-4">
                    <div id="title_home"></div>
                    <div id="subTitle_home"></div>
                    <div id="description_home"></div>
                  </div> 
                  <div id="main_text_hover" class="col-xs-12 col-sm-4">
                    <div id="title_home_hover"></div>
                    <div id="subTitle_home_hover"></div>
                    <div id="description_home_hover"></div>
                  </div>
              </div> 
            </div>
          </div>



          <p id="header">Explore the Models</p>

          <!-- Row of cards on the grid -->
          <div class="row">
            <div class="col-sm-2">
                <div id="poppy" class="card card-small">
                    <a href="application/assets/images/render_images/coke.png" data-fancybox data-caption="My 3D Coke Can Render">
                        <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/Coca-Cola-logo.png" alt="Coca Cola">
                    </a>
                </div>
            </div>
        
            <div class="col-sm-2">
                <div id="poppy" class="card card-small">
                    <a href="application/assets/images/render_images/sprite.png" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                        <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/sprite4.png" alt="Sprite">
                    </a>
                </div>
            </div>
          
            <div class="col-sm-2">
                <div id="poppy" class="card card-small">
                    <a href="application/assets/images/render_images/drpepper.png" data-fancybox data-caption="My 3D Dr Pepper Can Render" class="thumbnail">
                        <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/drpepperlogo.png" alt="Dr Pepper">
                    </a>
                </div>
            </div>

            <div class="col-sm-2">
              <div id="poppy" class="card card-small">
                  <a href="application/assets/images/render_images/fanta.png" data-fancybox data-caption="My 3D Fanta Can Render" class="thumbnail">
                      <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/fantalogo.png" alt="Fanta">
                  </a>
              </div>
            </div>

            <div class="col-sm-2">
              <div id="poppy" class="card card-small">
                  <a href="application/assets/images/render_images/cokezero.png" data-fancybox data-caption="My 3D Diet Coke Can Render" class="thumbnail">
                      <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/Diet_Coke-Logo.wine.png" alt="Diet Coke">
                  </a>
              </div>
            </div>

            <div class="col-sm-2">
              <div id="poppy" class="card card-small">
                  <a href="application/assets/images/render_images/cokezero.png" data-fancybox data-caption="My 3D Coke Zero Can Render" class="thumbnail">
                      <img class="card-img-top img-fluid img-thumbnail" src="application/assets/images/site_images/cokezero.png" alt="Coca Cola Zero">
                  </a>
              </div>
            </div>
            </div>
            <div class="col-sm-7 text-center mt-5" color="black">
              <button id="Modelpage" onclick="$('#navModels').click();" class="btn btn-primary btn-lg">View Models</button>
            </div>

          <div class="row">
            <div class="col-md-12"> <!-- adjust the column size as needed -->

              <div id="vid" class="col-12 mb-3">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-3 order-md-2">
                            <a href="application/assets/videos/coke.mp4" data-fancybox data-caption="Feel the thirst" class="img-narrow">
                                <video class="card-img img-fluid img-thumbnail" controls>
                                    <source src="application/assets/videos/coke.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                        </div>
                        <div class="col-md-9 order-md-1">
                            <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                                <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-primary btn-responsive">Find out more ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
        
            </div>
          </div>


          
          

        </div> <!-- End home page -->

 


                <!-- About page block element -->
                <div id="about" class="container about-page">

                  
                  <!-- Bootstrap Carousel -->
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="application/assets/images/site_images/product2.png" class="d-block w-100" alt="Coke">
                          </div>
                          <div class="carousel-item">
                              <img src="application/assets/images/site_images/product.png" class="d-block w-100" alt="Coca Cola drinks">
                          </div>
                          <div class="carousel-item">
                              <img src="application/assets/images/site_images/cokelanding1400.png" class="d-block w-100" alt="Coke supreme">
                          </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Back</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                      <h2>Coca-Cola</h2>
                      <p>For more than 135 years, the Coca‑Cola Company has been a part of people’s lives at holidays, special events, and everyday occasions. From our iconic brands and advertising to our sustainability initiatives around the world, the Coca‑Cola company aims to refresh the world while making a difference..</p>
                      <p>From our iconic brands and advertising to our sustainability initiatives around the world, the Coca‑Cola company aims to refresh the world while making a difference..</p>
                  </div>
                  <button id="playButton" class="default">Play Audio</button>
                  <audio id="Musicplayer" src="application/assets/audio/coke_theme_song.mp3"></audio>
              </div>

              


         
        <!-- Start X3D models and 3D Image Gallery -->
        <div id="models" class="section">
          <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
          <div class="row">
              <!-- X3D Models — Place 4 models in here for the assignment -->
              <div class="col-sm-8">
                  <div class="card text-left">
                      <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                          <a id="navCoke" class="nav-link active" href="#" onMouseUp="cokeScene(); cokeDescription();">Coke</a>
                          </li>
                          <li class="nav-item">
                          <a id="navSprite" class="nav-link" href="#" onMouseUp="spriteScene(); spriteDescription();">Sprite</a>
                          </li>
                          <li class="nav-item">
                          <a id="navPepper" class="nav-link" href="#" onMouseUP="pepperScene(); pepperDescription();">Pepper</a>
                          </li>
                      </ul>
                      </div>
                      <div class="card-body">
                        


                      <!-- Coke X3D model -->
                    <div>

             
                        
                        <!-- Place the X3D code here -->
                        <div class="model3D">
                          <x3d id="x3d-model">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/coke_scenefin3.x3d" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/spritebottle.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="application/assets/x3d/drpepper.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 

                    </div>
                  </div>
                </div>
              </div>
     



                                        <!-- 3D image gallery -->
                                        <div id="gall" class="col-sm-4">
                                          <div class="card text-left">
                                             
                                              <div class="card-body">
                                                  <div class="card-title title_gallery drinksText"></div>
                                                  <div class="gallery" id="gallery"></div>
                                                  <div class="card-text description_gallery drinksText"></div>
                                              </div>
                                          </div> <!-- End gallery card -->
                                      </div> <!-- End gallery column -->
                                  </div> <!-- End row for X3D Model and Gallery -->


          </div> <!-- End X3D Models and Gallery -->



    
    
        <!-- Start the interaction panels -->
        <div id="interaction" class="row" >
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#" onclick="cameraFront();">Front</a>
                              <a class="dropdown-item" href="#" onclick="cameraBack();">Back</a>
                              <a class="dropdown-item" href="#" onclick="cameraLeft();">Left</a>
                              <a class="dropdown-item" href="#" onclick="cameraRight();">Right</a>
                              <a class="dropdown-item" href="#" onclick="cameraTop();">Top</a>
                              <a class="dropdown-item" href="#" onclick="cameraBottom();">Bottom</a>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="card-Title x3dCamera_Subtitle drinksText">
                          <h3>Camera Views</h3>
                        </div>                            
                        <a href="#" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                        <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                        <a href="#" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                        <div class="card-text x3dCameraDescription drinksText">
                          <p>Use the dropdown menu for more camera views</p>
                        </div>
                      </div>
                    </div>
              </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="spin();">Rotate</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Polygon</a>
                                <a class="dropdown-item" href="#" onclick="wireframe();">Wireframe</a>
                                <a class="dropdown-item" href="#">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Default</a>
                                <a class="dropdown-item" href="#">Onmi On/Off</a>
                                <a class="dropdown-item" href="#">Target On/Off</a>
                                <a class="dropdown-item" href="#">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-success btn-responsive">Poly</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wire</a>
                          <a href="#" class="btn btn-success btn-responsive" onclick="headlight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p> Use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>
        </div> <!-- End the interaction panels -->
        



        <!-- Row to hold one card to hold the coke descriptive text, etc.-->
        <div id="cokeDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_coke" class="card-title drinksText"></div>
                        <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                        <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End coke description contents -->

        <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
        <div id="spriteDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_sprite" class="card-title drinksText"></div>
                        <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                        <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End sprite description contents -->

        <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
        <div id="pepperDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End pepper description contents -->  

    </div>  <!-- End 3D App SPA Contents --> 

    <!-- Your 3D App footer -->
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy 2024 Ayomide Adewumi 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
            </div>
            <div class="navbar-text social">
                  <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
            </div>
        </div>
    </nav> 

    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">3D App Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <p>Ayo Adewumi, Email: aa2907@sussex.ac.uk</p>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            
            </div>
        </div>
    </div>

    <!-- JavaScript code to switch between X3D model pages -->
  <script>
  // Get the X3D model container
  var x3dModelContainer = document.getElementById('x3d-model-container');

  // Get the Switch node
  var switchNode = x3dModelContainer.querySelector('Switch');

  // Function to switch to a specific X3D model page
  function switchModel(pageIndex) {
    switchNode.whichChoice = pageIndex;
  }

  // Add event listeners to switch between X3D model pages
  document.getElementById('navCoke').addEventListener('click', function() {
    switchModel(0); // Switch to Coke X3D model page
  });

  document.getElementById('navSprite').addEventListener('click', function() {
    switchModel(1); // Switch to Sprite X3D model page
  });

  document.getElementById('navPepper').addEventListener('click', function() {
    switchModel(2); // Switch to Pepper X3D model page
  });
</script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="application/scripts/js/jquery-3.4.1.js"></script>
    <script src="application/scripts/js/popper.min.js"></script>
    <!--<script src="js/bootstrap.js"></script>-->
    <script src="application/scripts/js/bootstrap-4.4.1.js"></script>

    <!-- Include the x3dom JavaScript -->
    <script src='application/scripts/js/x3dom.js'></script>

    <!-- Font Awesome Version 5 -->
    <!-- <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script> -->
    <!-- <script src="all.js"></script> -->

    <!-- Custom JavaScript code for your 3d App -->
    <!-- Also, intialises popovers-->
    <script src="application/scripts/js/custom.js" crossorigin="anonymous"></script>

    <script src="application/scripts/js/new.js"></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src="application/scripts/js/swap_restyle.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="application/scripts/js/gallery_generator.js"></script>

    <!-- JQuery code to get content data from a backend JSON file -->
    <script src="application/scripts/js/getJsonData.js"></script>

    <!-- JavaScript model interactions -->
    <script src="application/scripts/js/modelInteractions.js"></script>

    <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
    <script src="application/scripts/js/jquery.fancybox.min.js"></script>

  

  </body>
</html>

