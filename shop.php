 <!-- Header Include -->
 <?php include 'inc/head.php';?>
 <!-- Header Include -->

 <link rel="stylesheet" href="css/shop.css">

 <!-- **********************Banner section*********************** -->
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
         <div class="carousel-item active">
             <img class="d-block w-100 img-fluid" src="images/Shop-ban.png" alt="First slide">

         </div>
         <!-- <div class="carousel-item">
             <img class="d-block w-100" src="..." alt="Second slide">
             <div class="car-caption">

             </div>
         </div>
         <div class="carousel-item">
             <img class="d-block w-100" src="..." alt="Third slide">
             <div class="car-caption">

             </div>
         </div> -->
     </div>
     <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
     </a> -->
 </div>
 <div class="car-caption-flex">
     <div class="car-caption">
         <h3>Best of our Products</h3>
         <h2>ShelfPack <br> Suitcases</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut labore et
             dolore <br> magna aliqua. Ut enim ad minim veniam.</p>
         <a href="#">Shop Now</a>

     </div>
 </div>
 <!-- ************************End of bannersection*************************** -->

 <!-- ***************Shop section*********** -->
 <section class="shop-sec">

     <div class="container">
         <div class="row">
             <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                 <div class="shop-bar-head">
                     <h2>Filter By</h2>
                 </div>
                 <div class="shop-bar">
                     <div class="shop-price">
                         <h3>Price Range</h3>
                         <!-- Range slider  -->

                         <div class="row">
                             <div class="col-sm-12">
                                 <div id="slider-range"></div>
                             </div>
                         </div>
                         <div class="row slider-labels">
                             <div class="col-xs-6 caption">
                                 <span id="slider-range-value1"></span>
                             </div>
                             <div class="col-xs-6 text-right caption">
                                 <span id="slider-range-value2"></span>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-sm-12">
                                 <form>
                                     <input type="hidden" name="min-value" value="">
                                     <input type="hidden" name="max-value" value="">
                                 </form>
                             </div>
                         </div>

                         <!-- Range Slider  -->

                     </div>
                     <div class="side-bar-size">
                         <div class="sample-color">
                             <h5>Size</h5>
                             <div class="radio-color-btn">
                                 <div class="color-variation">
                                     <div class="colors">
                                         <!-- <span class="color">
                                 <input type="radio" id="blue" name="radio">
                                 <label id="blue" for="blue">blue</label>
                                     </span> -->
                                         <label class="label_container">
                                             <input type="radio" checked="checked" name="radio">
                                             <span class="checkmark">
                                                 <div class="label" style="background-color: #d29f45;">
                                                     <span>55cm</span>
                                                 </div>
                                             </span>
                                         </label>
                                         <label class="label_container">
                                             <input type="radio" checked="checked" name="radio">
                                             <span class="checkmark">
                                                 <div class="label" style="background-color: #eeeeee;">
                                                     <span>65cm</span>
                                                 </div>
                                             </span>
                                         </label>

                                         <label class="label_container">
                                             <input type="radio" checked="checked" name="radio">
                                             <span class="checkmark">
                                                 <div class="label" style="background-color: #eeeeee;">
                                                     <span>70cm</span>
                                                 </div>
                                             </span>
                                         </label>
                                         <!-- <label class="label_container">
                                             <input type="radio" checked="checked" name="radio">
                                             <span class="checkmark">
                                                 <div class="label" style="background-color: #eeeeee;">
                                                     <span></span>
                                                 </div>
                                             </span>
                                         </label> -->
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>

                     <div class="side-bar-material">
                         <h3>Material</h3>
                         <div class="material-list">
                             <div class="mat-flex">
                                 <li>Burlap</li>
                                 <li>(1)</li>
                             </div>
                             <div class="mat-flex">
                                 <li>Faux Leather</li>
                                 <li>(2)</li>
                             </div>
                             <div class="mat-flex">
                                 <li>Leather</li>
                                 <li>(1)</li>
                             </div>
                             <div class="mat-flex">
                                 <li>Microfiber</li>
                                 <li>(2)</li>
                             </div>
                             <div class="mat-flex">
                                 <li>Polyester</li>
                                 <li>(1)</li>
                             </div>
                             <div class="mat-flex">
                                 <li>Spandex</li>
                                 <li>(2)</li>
                             </div>
                             <div class="mat-flex">
                                 <li>Organic Cotton</li>
                                 <li>(1)</li>
                             </div>
                             <div class="mat-flex">
                                 <li>Rubber</li>
                                 <li>(2)</li>
                             </div>
                             <div class="mat-flex">
                                 <li>Synthetic</li>
                                 <li>(2)</li>
                             </div>
                         </div>
                     </div>

                     <div class="side-bar-color">
                         <div class="sample-color">
                             <h5>color</h5>
                             <div class="radio-color-btn">
                                 <div class="color-variation">
                                     <div class="colors">
                                         <!-- <span class="color">
                                 <input type="radio" id="blue" name="radio">
                                 <label id="blue" for="blue">blue</label>
                                     </span> -->
                                         <label class="label_container">
                                             <input type="radio" checked="checked" name="radio">
                                             <span class="checkmark">
                                                 <div class="label" style="background-color: #000000;">
                                                     <span></span>
                                                 </div>
                                             </span>
                                         </label>
                                         <label class="label_container">
                                             <input type="radio" checked="checked" name="radio">
                                             <span class="checkmark">
                                                 <div class="label" style="background-color: #c10538;">
                                                     <span></span>
                                                 </div>
                                             </span>
                                         </label>

                                         <label class="label_container">
                                             <input type="radio" checked="checked" name="radio">
                                             <span class="checkmark">
                                                 <div class="label" style="background-color: #041e42;">
                                                     <span></span>
                                                 </div>
                                             </span>
                                         </label>
                                         <label class="label_container">
                                             <input type="radio" checked="checked" name="radio">
                                             <span class="checkmark">
                                                 <div class="label" style="background-color: #f9ddd6;">
                                                     <span></span>
                                                 </div>
                                             </span>
                                         </label>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>


             </div>

             <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                 <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop1.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop2.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop3.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop4.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop5.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop6.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop7.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop8.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop9.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop10.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop11.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-3 col-lg-4">
                         <div class="shop-all">
                             <div class="shop-img-text">
                                 <div class="shop-img">
                                     <img class="img-fluid" src="images/shop12.png" alt="">
                                 </div>
                                 <div class="shop-text">
                                     <h3>$139</h3>
                                     <h4>Shelfpack Suitcase</h4>
                                     <h2>DELSEY Paris Helium</h2>
                                     <div class="pro-stars">
                                         <ul>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>

     </div>
 </section>

 <!-- *******************End of shop Section*********** -->

 <section class="pics-sec">
     <div class="container">
         <div class="row">
             <div class="all-pics">
                 <div class="pic1">
                     <img class="img-fluid" src="images/blog1.png" alt="">
                 </div>
                 <div class="pic1">
                     <img class="img-fluid" src="images/blog2.png" alt="">
                 </div>
                 <div class="pic1">
                     <img class="img-fluid" src="images/blog3.png" alt="">
                 </div>
                 <div class="pic1">
                     <img class="img-fluid" src="images/blog4.png" alt="">
                 </div>
                 <div class="pic1">
                     <img class="img-fluid" src="images/blog5.png" alt="">
                 </div>
                 <div class="pic1">
                     <img class="img-fluid" src="images/blog6.png" alt="">
                 </div>
                 <div class="pic1">
                     <img class="img-fluid" src="images/blog7.png" alt="">
                 </div>
                 <div class="pic1">
                     <img class="img-fluid" src="images/blog8.png" alt="">
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- **************************************************End of Pictures section******************************* -->

 <!-- ******************************************************Blogs section****************************************** -->
 <section class="blog-sec">
     <div class="container">
         <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                 <div class="blog-text">
                     <h2>Lorem ipsum dolor sit amet, consectetur...</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                         labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                         laboris nisi ut aliquip ex ea commodo consequat.</p>
                 </div>
                 <!-- new row in blog  -->
                 <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                         <div class="b-img">
                             <img class="img-fluid" src="images/lorem1.png" alt="">
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                         <div class="b-img">
                             <img class="img-fluid" src="images/lorem2.png" alt="">
                         </div>

                     </div>
                 </div>
                 <!-- End of new row  -->
             </div>
             <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                 <div class="blog-col-2">
                     <h3>BLogs</h3>
                     <div class="blog-1">
                         <img class="img-fluid" src="images/small1.png" alt="">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                             ut labore et dolore magna aliqua.</p>
                     </div>
                     <div class="blog-1">
                         <img class="img-fluid" src="images/small2.png" alt="">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                             ut labore et dolore magna aliqua.</p>
                     </div>
                     <div class="blog-1">
                         <img class="img-fluid" src="images/small3.png" alt="">
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                             ut labore et dolore magna aliqua.</p>
                     </div>
                 </div>
                 <div class="blog-btn">
                     <a href="#">Learn More</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ******************************************************End of Blogs section****************************************** -->

 <!-- ***********************************************Contact Us section********************************************** -->
 <section class="contact-sec">
     <div class="container">
         <div class="row">
             <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                 <div class="contact-head">
                     <h2>Contact Us</h2>
                     <p>Contact us for repair and customise Job</p>
                 </div>
             </div>
             
             <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 for-border">
                <div class="contact-icon">
                    <ul>
                        <li><a href="#"><img class="img-fluid" src="images/fill1.png" alt=""> </a></li>
                        <li><a href="#"><img class="img-fluid" src="images/fill2.png" alt=""> </a></li>
                        <li><a href="#"><img class="img-fluid" src="images/fill3.png" alt=""> </a></li>
                    </ul>
                </div>
                <div class="contact-icon">
                    <ul>
                    <li><a href="#"><img class="img-fluid" src="images/fill4.png" alt=""> </a></li>
                    <li><a href="#"><img class="img-fluid" src="images/fill5.png" alt=""> </a></li>
                    <li><a href="#"><img class="img-fluid" src="images/fill6.png" alt=""> </a></li>
                    </ul>
                </div>

            </div>
             <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                 <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                         <div class="contact-form">
                             <div class="form-group">
                                 <input type="text" class="form-control" id="exampleInputEmail1"
                                     aria-describedby="emailHelp" placeholder="Full Name">
                             </div>
                             <div class="form-group">
                                 <input type="email" class="form-control" id="exampleInputEmail1"
                                     aria-describedby="emailHelp" placeholder="Phone">
                             </div>
                         </div>

                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                         <div class="contact-form">
                             <div class="form-group">
                                 <input type="text" class="form-control" id="exampleInputEmail1"
                                     aria-describedby="emailHelp" placeholder="Email Address">
                             </div>
                             <div class="form-btn">
                                 <button type="submit" class="btn btn-primary">Get In Touch</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </section>
 <!-- ***********************************************End of Contact Us section********************************************** -->

 <!-- Head include -->
 <?php include 'inc/footer.php';?>
 <!-- Head include -->