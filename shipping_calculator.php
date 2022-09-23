 <!-- Header Include --> <?php include 'inc/head.php'; ?>
 <!-- Header Include -->
 <link rel="stylesheet" href="css/shipping_calculator.css">
 <!-- **********************Profile section Start  Here *********************** -->
 <section class="shipping_calculator">
     <div class="container">
         <div class="calculator_start">
             <div class="row">
                 <div class="col-md-7">
                     <div class="text">
                         <h6 class="small">BEST OF OUR PRODUCTS</h6>
                         <h1>Shipping <br>
                             calculator</h1>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                     </div>
                 </div>
                 <div class="col-md-5">
                     <div class="calculator_start">
                         <h6 class="small_heading">Enter Your New Address</h6>
                         <form action="">
                             <div class="form_start mt-4">
                                 <div class="form_row mt-3">
                                     <input type="text" name="" class="d-block w-100" placeholder="ZIP Code (Shipping From)" id="">
                                 </div>
                                 <div class="form_row mt-3">
                                     <input type="text" name="" class="d-block w-100" placeholder="ZIP Code (Shipping To)" id="">
                                 </div>
                                 <div class="form_row mt-3">
                                     <input type="text" name="" class="d-block w-100" placeholder="Package Weight" id="">
                                 </div>
                                 <div class="form_row mt-3">
                                     <button class="btn d-block w-100 text-center" type="button" data-toggle="modal" data-target="#add_card_modal">find Out</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <div class="">
             <div class="modal fade" id="add_card_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                         <div class="modal-body">
                             <div class="shipping_details">
                                 <h3>Shipping Charges</h3>
                             </div>
                             <div class="the_range">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="wrapper filter_range">

                                             <div class="container" style="position: relative;">
                                                 <div class="slider-track" style="background: linear-gradient(to right, rgb(218, 218, 229) 0%, rgb(0, 0, 0) 0%, rgb(0, 0, 0) 100%, rgb(218, 218, 229) 100%);"></div>
                                                 <input type="range" min="0" max="10000000" value="0" id="slider-1" oninput="slideOne()">
                                                 <input type="range" min="0" max="10000000" value="10000000" id="slider-2" oninput="slideTwo()">
                                             </div>
                                             <div class="values">
                                                 <span>Price: $</span>
                                                 <span id="range1">0</span>
                                                 <span> ‐ </span>
                                                 <span id="range2">10000000</span>
                                             </div>
                                             <!-- <div class="price-tag">
                                        <p>Price: $ 200</p>
                                    </div> -->
                                         </div>
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
 <!-- Cart End Here -->
 <!-- Qualities Included Here --> <?php include 'inc/easypack.php' ?>;
 <!-- Qualities Included End Here -->
 <!-- **********************Profile section End  Here *********************** -->
 <!-- Head include --> <?php include 'inc/footer.php'; ?>
 <!-- Head include -->