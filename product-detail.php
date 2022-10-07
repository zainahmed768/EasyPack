 <!-- Header Include -->
 <?php include 'inc/head.php'; ?>
 <!-- Header Include -->
 <link rel="stylesheet" href="css/product-detail.css">
 <!-- product detail starts here -->
 <section class="product-detail-sec">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                 <div class="product-img-wrapper">
                     <figure>
                         <img src="images/product-img.png" class="img-fluid" alt="">
                     </figure>
                 </div>
                 <div class="product-list-img-wrapper">
                     <ul>
                         <li>
                             <div class="product-list-wrapper">
                                 <figure>
                                     <img src="images/product-img2.png" class="img-fluid" alt="">
                                 </figure>
                             </div>
                         </li>
                         <li>
                             <div class="product-list-wrapper">
                                 <figure>
                                     <img src="images/product-img2.png" class="img-fluid" alt="">
                                 </figure>
                             </div>
                         </li>
                         <li>
                             <div class="product-list-wrapper">
                                 <figure>
                                     <img src="images/product-img2.png" class="img-fluid" alt="">
                                 </figure>
                             </div>
                         </li>
                     </ul>

                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="product-detail-wrapper">
                     <div class="name-price-wrapper">
                         <div class="name-wrapper">
                             <h5>Nutrients and Additives</h5>
                             <h3>DELSEY Paris Helium</h3>
                         </div>
                         <div class="price-wrapper">
                             <h2>$250.00</h2>
                         </div>
                     </div>
                     <div class="description-wrapper">
                         <div class="heading-wrapper">
                             <h6>Discription</h6>
                             <p>
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                             </p>
                         </div>
                     </div>
                     <div class="quality-color-wrapper">
                         <div class="quality-wrapper">
                             <div class="heading-wrapper">
                                 <h6>Quantity:</h6>
                             </div>
                             <div class="quality-number-wrapper">
                                 <div class="field-wrapper">
                                     <input type="number" value="1">
                                 </div>
                                 <div class="btn-wrapper">
                                     <button class="add"><i class="fa fa-angle-up"></i></button>
                                     <button class="sub"><i class="fa fa-angle-down"></i></button>
                                 </div>
                             </div>
                         </div>
                         <div class="color-wrapper">
                             <div class="heading-wrapper">
                                 <h6>Color:</h6>
                             </div>
                             <div class="radio-coolor-wrapper">
                                 <input type="radio" name="color" id="black" />
                                 <label for="black"><span class="black"></span></label>
                                 <input type="radio" name="color" id="red" value="red" />
                                 <label for="red"><span class="red"></span></label>
                                 <input type="radio" name="color" id="blue" />
                                 <label for="blue"><span class="blue"></span></label>
                                 <input type="radio" name="color" id="white" />
                                 <label for="white"><span class="white"></span></label>
                             </div>
                         </div>
                     </div>
                     <div class="form">
                         <section class="plan cf">
                             <h2>Size:</h2>
                             <input type="radio" name="radio1" id="free" value="free"><label class="free-label four col" for="free">21’’ (53 cms) <br> Carry On – Case</label>
                             <input type="radio" name="radio1" id="basic" value="basic" checked><label class="basic-label four col" for="basic">24’’ (61 cms) <br> Mid- Size Case</label>
                             <input type="radio" name="radio1" id="premium" value="premium"><label class="premium-label four col" for="premium">28’’ (71 cms) <br> Large-Size Case</label>
                         </section>
                     </div>
                     <div class="availability-wrapper">
                         <div class="heading-wrapper">
                             <h6>Availability:</h6>
                         </div>
                         <div class="size-wrapper">
                             <h4>M</h4>
                         </div>
                     </div>
                     <div class="cart-btn-wrapper">
                         <button onclick="location.href='cart.php'" class="btn">Add to cart</button>
                         <button class="btn">Add to wishlist</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-6"></div>
             <div class="col-lg-6">
                 <div class="review-wrapper">
                     <div class="heading-wrapper">
                         <h5>Reviews</h5>
                     </div>
                     <div class="single-review-wrapper">
                         <div class="review-img-wrapper">
                             <figure>
                                 <img src="images/review-img.png" class="img-fluid" alt="">
                             </figure>
                         </div>
                         <div class="review-content-wrapper">
                             <div class="name-date-wrapper">
                                 <div class="name-wrapper">
                                     <h6>Joeby Ragpa</h6>
                                 </div>
                                 <div class="date-wrapper">
                                     <h5> - 12 April, 2014 at 16:50</h5>
                                 </div>
                             </div>
                             <div class="text-wrapper">
                                 <p>
                                     We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and complexity that it literally staggers the imagination.
                                 </p>
                             </div>
                             <div class="rating-reply-wrapper">
                                 <div class="rating-wrapper">
                                     <ul>
                                         <li><i class="fa fa-star"></i></li>
                                         <li><i class="fa fa-star"></i></li>
                                         <li><i class="fa fa-star"></i></li>
                                         <li><i class="fa fa-star-o"></i></li>
                                         <li><i class="fa fa-star-o"></i></li>
                                     </ul>
                                     <span>3.9 </span>
                                 </div>
                                 <div class="reply-wrapper">
                                     <button>Reply</button>
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="reply-review single-review-wrapper">
                         <div class="review-img-wrapper">
                             <figure>
                                 <img src="images/review-img2.png" class="img-fluid" alt="">
                             </figure>
                         </div>
                         <div class="review-content-wrapper">
                             <div class="name-date-wrapper">
                                 <div class="name-wrapper">
                                     <h6>Joeby Ragpa</h6>
                                 </div>
                                 <div class="date-wrapper">
                                     <h5> - 12 April, 2014 at 16:50</h5>
                                 </div>
                             </div>
                             <div class="text-wrapper">
                                 <p>
                                     We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind the hidden and mysterious subconscious.
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="reply-review single-review-wrapper">
                         <div class="review-img-wrapper">
                             <figure>
                                 <img src="images/review-img3.png" class="img-fluid" alt="">
                             </figure>
                         </div>
                         <div class="review-content-wrapper">
                             <div class="name-date-wrapper">
                                 <div class="name-wrapper">
                                     <h6>Joeby Ragpa</h6>
                                 </div>
                                 <div class="date-wrapper">
                                     <h5> - 12 April, 2014 at 16:50</h5>
                                 </div>
                             </div>
                             <div class="text-wrapper">
                                 <p>
                                     We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="reply-review single-review-wrapper">
                         <div class="review-img-wrapper">
                             <figure>
                                 <img src="images/review-img4.png" class="img-fluid" alt="">
                             </figure>
                         </div>
                         <div class="review-content-wrapper">
                             <div class="name-date-wrapper">
                                 <div class="name-wrapper">
                                     <h6>Joeby Ragpa</h6>
                                 </div>
                                 <div class="date-wrapper">
                                     <h5> - 12 April, 2014 at 16:50</h5>
                                 </div>
                             </div>
                             <div class="text-wrapper">
                                 <p>
                                     We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="single-review-wrapper">
                         <div class="review-img-wrapper">
                             <figure>
                                 <img src="images/review-img.png" class="img-fluid" alt="">
                             </figure>
                         </div>
                         <div class="review-content-wrapper">
                             <div class="name-date-wrapper">
                                 <div class="name-wrapper">
                                     <h6>Joeby Ragpa</h6>
                                 </div>
                                 <div class="date-wrapper">
                                     <h5> - 12 April, 2014 at 16:50</h5>
                                 </div>
                             </div>
                             <div class="text-wrapper">
                                 <p>
                                     We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power and complexity that it literally staggers the imagination.
                                 </p>
                             </div>
                             <div class="rating-reply-wrapper">
                                 <div class="rating-wrapper">
                                     <ul>
                                         <li><i class="fa fa-star"></i></li>
                                         <li><i class="fa fa-star"></i></li>
                                         <li><i class="fa fa-star"></i></li>
                                         <li><i class="fa fa-star-o"></i></li>
                                         <li><i class="fa fa-star-o"></i></li>
                                     </ul>
                                     <span>3.9 </span>
                                 </div>
                                 <div class="reply-wrapper">
                                     <button>Reply</button>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
                 <div class="load-more-wrapper">
                     <button onclick="location.href='SubmitRreview.php'" class="load">LOAD MORE</button>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- product detail ends here -->

 <!-- easypack starts here -->
 <?php include 'inc/easypack.php' ?>
 <!-- easypack ends here -->

 <!-- Head include -->
 <?php include 'inc/footer.php'; ?>
 <!-- Head include -->