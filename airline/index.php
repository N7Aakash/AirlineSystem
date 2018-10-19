<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Skyline Airways</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">SKYLINE AIRWAYS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="deals.php" class="nav-link">Deals</a></li>
            <li class="nav-item"><a href="details.php" class="nav-link">Details</a></li>
            <li class="nav-item"><a href="destination.php" class="nav-link">Destination</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li><a href="registration_form.php"><input type="submit" class="search-submit btn btn-primary "style= "margin-top: 30px; padding: 5px; margin-left: 10px; margin-top: 30px;" value="Sign up"></a></li>
            <li><a href="login.php"><input type="submit" class="search-submit btn btn-primary" style= "margin-top: 30px; padding: 5px; margin-left: 10px; margin-top: 30px;" value="Login "></a></li>
            
            
<!--
         <input type="submit" class="search-submit btn btn-primary" value="Find Flights">
         <input type="submit" class="search-submit btn btn-primary" value="Find Flights">
-->
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Experience the best trip ever</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Making the most out of your holiday</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Travel Operator Just For You</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <div class="ftco-section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tabulation-search">
            <div class="element-animate">
              <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span>01</span> One wayFlight</a>
                <a class="nav-link p-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span>02</span>Two way flight</a>
              
              </div>
            </div>
              
            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="block-17">
                  <form action="" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">

<!--                      <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Source">-->
                       <select name="" id="" class="textfield-search one-third" placeholder="Source">
                         <option></option>
                          <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                      </select>
<!--                      </div>-->
                     
<!--                       <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Destination"></div>-->
                      <select name="" id="" class="textfield-search one-third" placeholder="Desination">
                         <option></option>
                          <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                      </select>

                      <div class="check-in one-third"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                      
                      
                    </div>
                    <input type="submit" class="search-submit btn btn-primary" value="Find Flights">  
                  </form>
                </div>
              </div>
              
              
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="block-17">
                  <form action="" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
<!--                      <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Source"></div>-->
                     <select name="" id="" class="textfield-search one-third" placeholder="Source">
                         <option></option>
                          <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                      </select>
<!--                     <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Destination location"></div>-->
                      <select name="" id="" class="textfield-search one-third" placeholder="Source">
                         <option></option>
                          <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                      </select>
                      <div class="check-in one-third"><input type="text" id="checkin_date" class="form-control" placeholder="Check-in date"></div>

                      
                      
                    </div>
                                

                    <input type="submit" class="search-submit btn btn-primary" value="Find Flights">  
                  </form>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('images/tour-2.jpg');">
            <a href="https://vimeo.com/45830194" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Welcome to Skyline Airways since 1898 established Far far away.</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    

  

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>Most Popular Destination</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-5.jpg');">
              <div class="text">
                <span class="price">Rs 3999</span>
                <h3 class="heading">Mumbai to Delhi</h3>
               
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-2.jpg');">
              <div class="text">
                <span class="price">Rs 4999</span>
                <h3 class="heading">Delhi to Paris</h3>
               
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-3.jpg');">
              <div class="text">
                <span class="price">Rs 9999</span>
                <h3 class="heading">Mumbai to London</h3>
                
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-4.jpg');">
              <div class="text">
                <span class="price">Rs 2999</span>
                <h3 class="heading">Srinagar to Amritsar</h3>
                
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-5.jpg');">
              <div class="text">
                <span class="price">Rs 1999</span>
                <h3 class="heading">Indore to Candigarh</h3>
                
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-6.jpg');">
              <div class="text">
                <span class="price">Rs 2898</span>
                <h3 class="heading">Mumbai to Goa</h3>
                
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-7.jpg');">
              <div class="text">
                <span class="price">Rs 5333</span>
                <h3 class="heading">Singapore to Mumbai</h3>
                
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span  class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="#" class="block-5" style="background-image: url('images/tour-8.jpg');">
              <div class="text">
                <span class="price">Rs 2555</span>
                <h3 class="heading">New Delhi to Candigarh</h3>
               
                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>500 reviews</span></p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our Satisfied Guests says</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="carousel owl-carousel ftco-owl">
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">I recommend to use it, they have good fares.</p>
                  <p class="name">John Smith</p>
                  
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Very nice interface and easy to use.</p>
                  <p class="name">Dennis Green</p>
                 
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                  <p class="mb-5">Very nice interface and easy to use.</p>
                  <p class="name">David Jones</p>
                  
                </div>
              </div>
            </div>
           
            
          </div>
        </div>
      </div>
    </section>

    

   

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Skyline Airways Fellow Tourist</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">View Our Website</h2>
              <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="deals.php" class="nav-link">Deals</a></li>
            <li class="nav-item"><a href="details.php" class="nav-link">Details</a></li>
            <li class="nav-item"><a href="destination.php" class="nav-link">Destination</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
           
 
          </ul>
            </div>
          </div>
          
         
          
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Skyline Airways</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <script src="assets/js/jquery.timepicker.min.js"></script>
<!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>-->
   <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!--  <script src="assets/js/google-map.js"></script>-->
  <script src="assets/js/main.js"></script>
    
  </body>
</html>