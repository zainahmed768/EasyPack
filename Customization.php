 <!-- Header Include -->
 <?php include 'inc/head.php'; ?>
 <!-- Header Include -->

 <link rel="stylesheet" href="css/shop.css">
 <link rel="stylesheet" href="css/customization.css">
 <style>
     .shop-banner .shop-banner-content-wrapper .btn:hover {
         color: #000;
     }
 </style>
 <!-- *********************Banner section********************** -->
 <!-- ***********************End of bannersection************************** -->
 <!-- shop banner starts here -->
 <!-- <section class="shop-banner">
     <div class="container">
         <div class="row">
             <div class="col-lg-3"></div>

             <div class="col-lg-6 text-center align-self-center">
                 <div class="shop-banner-content-wrapper">
                     <h6>BEST OF OUR PRODUCTS</h6>
                     <h2>
                         <span style="color: #d29f45;"> EasyPack <br>Luggage</span>
                     </h2>
                     <p>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                     </p>
                     <a href="#" class="btn">SHOP NOW</a>
                 </div>
             </div>
             <div class="col-lg-3"></div>
        
         </div>
     </div>
 </section> -->
 <!-- shop banner End here -->
 <!-- **************Shop section********** -->
 <!-- Customization Start Here -->
 <section class="customization_section">
     <div class="container pt-5">
         <div class="top_heading text-center">
             <h2>Customize your <span>EasyPack Laggage</span><br>
                 At No Additional Cost</h2>
         </div>
         <div class="customization_start_here">
             <div class="row">
                 <div class="col-md-6 pr-4">
                     <div class="left_side_start">
                         <div class="bag_lg_photo">
                             <figure>
                                 <img src="images/customize.png" class="img-fluid" alt="">
                             </figure>
                         </div>
                         <div class="save_details">
                             <label class="custom_check_box">As a Valued Customer we will include a free of charge Clear Cover for your Easy Pack Luggage.
                                 <input type="checkbox" checked="checked">
                                 <span class="checkmark"></span>
                             </label>
                         </div>
                         <div class="small_images">
                             <figure>
                                 <img src="images/sm_bag.png" alt="">
                             </figure>
                         </div>
                         <div class="accesories">
                             <div class="select_btn">
                                 <button onclick="window.location.href='our-accessories.php'" class="btn">SELECT YOUR ACCESSORIES</button>
                             </div>
                             <div class="accesorries_list">
                                 <div class="single_accesory">
                                     <input type="radio" name="accesories" checked id="accesories_1" hidden class="accesory_input">
                                     <label for="accesories_1">
                                         <figure>
                                             <img src="images/acce1.png" alt="">
                                         </figure>
                                     </label>
                                 </div>
                                 <div class="single_accesory">
                                     <input type="radio" name="accesories" id="accesories_2" hidden class="accesory_input">
                                     <label for="accesories_2">
                                         <figure>
                                             <img src="images/acce2.png" alt="">
                                         </figure>
                                     </label>
                                 </div>
                                 <div class="single_accesory">
                                     <input type="radio" name="accesories" id="accesories_3" hidden class="accesory_input">
                                     <label for="accesories_3">
                                         <figure>
                                             <img src="images/acce3.png" alt="">
                                         </figure>
                                     </label>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6" id="resposive_padding">
                     <div class="luggage_description">
                         <div class="the_heading">
                             <h5>
                                 SELECT THE SIZE OF LUGGAGE YOU WOULD LIKE
                                 TO PURCHASE
                             </h5>
                         </div>
                         <div class="luggage_list">
                             <input type="radio" name="bag_list" hidden class="the_bags_list" checked id="bag1">
                             <label for="bag1">
                                 <div class="single_lugage">
                                     <div class="luggae_details">
                                         <figure>
                                             <img src="images/des.png" alt="">
                                         </figure>
                                         <div class="desc">
                                             <span class="price">$139</span>
                                             <span class="name">28” (71 cm) Large Case</span>
                                             <a href="product-detail.php">See Specification</a>
                                         </div>
                                     </div>
                                     <div class="lugage_quantity">
                                         <span clas>Quantity:</span>
                                         <input type="number" name="" value="01" readonly min="1" class="quantity" id="quantity1">
                                         <div class="quantity_controller">
                                             <span class="increment_quantity"><i class="fa fa-angle-up increment"></i></span>
                                             <span class="decrement_quantity"><i class="fa fa-angle-down decrement"></i></span>
                                         </div>
                                     </div>
                                 </div>
                             </label>
                             <input type="radio" name="bag_list" hidden class="the_bags_list" id="bag2">
                             <label for="bag2">
                                 <div class="single_lugage">
                                     <div class="luggae_details">
                                         <figure>
                                             <img src="images/des.png" alt="">
                                         </figure>
                                         <div class="desc">
                                             <span class="price">$139</span>
                                             <span class="name">28” (71 cm) Large Case</span>
                                             <a href="product-detail.php">See Specification</a>
                                         </div>
                                     </div>
                                     <div class="lugage_quantity">
                                         <span clas>Quantity:</span>
                                         <input type="number" name="" value="01" readonly min="1" class="quantity" id="quantity1">
                                         <div class="quantity_controller">
                                             <span class="increment_quantity"><i class="fa fa-angle-up increment"></i></span>
                                             <span class="decrement_quantity"><i class="fa fa-angle-down decrement"></i></span>
                                         </div>
                                     </div>
                                 </div>
                             </label>
                             <input type="radio" name="bag_list" hidden class="the_bags_list" id="bag3">
                             <label for="bag3">
                                 <div class="single_lugage ">
                                     <div class="luggae_details">
                                         <figure>
                                             <img src="images/des.png" alt="">
                                         </figure>
                                         <div class="desc">
                                             <span class="price">$139</span>
                                             <span class="name">28” (71 cm) Large Case</span>
                                             <a href="product-detail.php">See Specification</a>
                                         </div>
                                     </div>
                                     <div class="lugage_quantity">
                                         <span clas>Quantity:</span>
                                         <input type="number" name="" value="01" readonly min="1" class="quantity" id="quantity1">
                                         <div class="quantity_controller">
                                             <span class="increment_quantity"><i class="fa fa-angle-up increment"></i></span>
                                             <span class="decrement_quantity"><i class="fa fa-angle-down decrement"></i></span>
                                         </div>
                                     </div>
                                 </div>
                             </label>
                             <!-- <div class="single_lugage">
                                 <div class="luggae_details">
                                     <figure>
                                         <img src="images/des.png" alt="">
                                     </figure>
                                     <div class="desc">
                                         <span class="price">$139</span>
                                         <span class="name">28” (71 cm) Large Case</span>
                                         <a href="">See Specification</a>
                                     </div>
                                 </div>
                                 <div class="lugage_quantity">
                                     <span clas>Quantity:</span>
                                     <input type="number" name="" value="01" readonly min="1" class="quantity" id="quantity1">
                                     <div class="quantity_controller">
                                         <span class="increment_quantity"><i class="fa fa-angle-up increment"></i></span>
                                         <span class="decrement_quantity"><i class="fa fa-angle-down decrement"></i></span>
                                     </div>
                                 </div>
                             </div>
                             <div class="single_lugage">
                                 <div class="luggae_details">
                                     <figure>
                                         <img src="images/des.png" alt="">
                                     </figure>
                                     <div class="desc">
                                         <span class="price">$139</span>
                                         <span class="name">28” (71 cm) Large Case</span>
                                         <a href="">See Specification</a>
                                     </div>
                                 </div>
                                 <div class="lugage_quantity">
                                     <span clas>Quantity:</span>
                                     <input type="number" name="" value="01" readonly min="1" class="quantity" id="quantity1">
                                     <div class="quantity_controller">
                                         <span class="increment_quantity"><i class="fa fa-angle-up increment"></i></span>
                                         <span class="decrement_quantity"><i class="fa fa-angle-down decrement"></i></span>
                                     </div>
                                 </div>
                             </div> -->
                         </div>
                         <div class="luggage_steps">
                             <div class="single_step">
                                 <div class="text">
                                     <span class="step_no">Step 2</span>
                                     <h4>COLOR OF THE BODY</h4>
                                     <p>Select the color of your body</p>
                                 </div>
                                 <div class="colors">
                                     <div class="single_color">
                                         <input type="radio" name="body_colors" hidden id="body_colors_1" class="body_colors">
                                         <label for="body_colors_1">
                                             <span class="black"></span>
                                         </label>
                                     </div>
                                     <div class="single_color">
                                         <input type="radio" name="body_colors" hidden id="body_colors_2" class="body_colors">
                                         <label for="body_colors_2">
                                             <span class="red"></span>
                                         </label>
                                     </div>
                                     <div class="single_color">
                                         <input type="radio" name="body_colors" hidden id="body_colors_3" class="body_colors">
                                         <label for="body_colors_3">
                                             <span class="blue"></span>
                                         </label>
                                     </div>
                                     <div class="single_color">
                                         <input type="radio" name="body_colors" hidden id="body_colors_4" class="body_colors">
                                         <label for="body_colors_4">
                                             <span class="white"></span>
                                         </label>
                                     </div>
                                 </div>
                             </div>
                             <div class="single_step">
                                 <div class="text">
                                     <span class="step_no">Step 2</span>
                                     <h4>COLOR OF THE BODY</h4>
                                     <p>Select the color of your body</p>
                                 </div>
                                 <div class="colors">
                                     <div class="single_color">
                                         <input type="radio" name="cover_colors" hidden id="cover_colors_1" class="body_colors">
                                         <label for="cover_colors_1">
                                             <span class="black"></span>
                                         </label>
                                     </div>
                                     <div class="single_color">
                                         <input type="radio" name="cover_colors" hidden id="cover_colors_3" class="body_colors">
                                         <label for="cover_colors_3">
                                             <span class="blue"></span>
                                         </label>
                                     </div>
                                     <div class="single_color">
                                         <input type="radio" name="cover_colors" hidden id="cover_colors_2" class="body_colors">
                                         <label for="cover_colors_2">
                                             <span class="red"></span>
                                         </label>
                                     </div>
                                     <div class="single_color">
                                         <input type="radio" name="cover_colors" hidden id="cover_colors_4" class="body_colors">
                                         <label for="cover_colors_4">
                                             <span class="white_05"></span>
                                         </label>
                                     </div>
                                 </div>
                             </div>
                             <div class="single_step">
                                 <div class="text">
                                     <span class="step_no">Step 2</span>
                                     <h4>COLOR OF THE BODY</h4>
                                     <p>Select the color of your body</p>
                                 </div>
                                 <div class="colors">
                                     <div class="single_color">
                                         <input type="radio" name="trim_colors" hidden id="trim_colors_1" class="body_colors">
                                         <label for="trim_colors_1">
                                             <span class="black"></span>
                                         </label>
                                     </div>
                                     <div class="single_color">
                                         <input type="radio" name="trim_colors" hidden id="trim_colors_4" class="body_colors">
                                         <label for="trim_colors_4">
                                             <span class="white_1"></span>
                                         </label>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="the_heading mt-5">
                             <h5>
                                 Do you want to PERSONALIZE your Luggage?
                             </h5>
                             <p>For a small fee we could add your Initials embroidered on the front cover on the left
                                 side of the top pocket.</p>
                         </div>
                         <div class="final_customized_bag">
                             <figure>
                                 <img src="images/customized.png" alt="">
                             </figure>
                             <div class="ep_input">
                                 <label for="">EP</label>
                                 <input type="text" name="" id="">
                             </div>
                             <label class="custom_check_box mt-5">I would like to add my initial embroidered for additional $19.95
                                 <input type="checkbox" checked="checked">
                                 <span class="checkmark"></span>
                             </label>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="proced_to_checkout">
                 <div class="chck_btn">
                     <a href="checkout.php" class="btn">CONTINUE TO CHECKOUT</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Customization End Here -->

 <!-- easypack starts here -->
 <?php include 'inc/easypack.php' ?>
 <!-- easypack ends here -->

 <!-- Head include -->
 <?php include 'inc/footer.php'; ?>
 <!-- Head include -->