 <!-- Header Include -->
 <?php include 'inc/head.php'; ?>
 <!-- Header Include -->
 <link rel="stylesheet" href="css/product-detail.css">
 <link rel="stylesheet" href="css/submit-review.css">
 <style>
     .product-detail-sec .product-img-wrapper {
         background: #fff;
         border: 1px solid #707070;
         text-align: center;
         padding: 50px 0px;
         margin-bottom: 12px;
         box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
     }

     .product-detail-sec .btn-wrapper button.btn {
         text-transform: uppercase;
         padding: 10px 80px;
         margin-bottom: 36px;
         margin-top: 19px;
     }

     .product-detail-sec .product-list-img-wrapper ul li .product-list-wrapper {
         width: 173px;
         background: #fff;
         border: 1px solid #707070;
         text-align: center;
         padding: 11px 0px;
         box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
         margin: 0px 10px 0px 0px;
     }
 </style>
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
                     <div class="submit-revview-wrappper">
                         <div class="heading-wrapper">
                             <h2>Submit Your Reviews</h2>
                         </div>
                         <div class="profile-wrapper">
                             <div class="profile-img-wrapper">
                                 <figure>
                                     <img src="images/barry.png" class="img-fluid" alt="">
                                 </figure>
                             </div>
                             <div class="profile-content-wrapper">
                                 <h6>Barry Allen</h6>
                                 <p>Your review will be Posted on Web</p>
                             </div>
                         </div>
                         <div class="area-wrapper">
                             <textarea name="" class="form-control" placeholder="Submit Your review" id="" cols="30" rows="7"></textarea>
                         </div>
                         <div class="rating-wrapper">
                             <p>
                                 How much would you like to rate our product?
                             </p>
                             <ul>
                                 <li>
                                     <i class="fa fa-star"></i>
                                 </li>
                                 <li>
                                     <i class="fa fa-star"></i>
                                 </li>
                                 <li>
                                     <!-- <i class="fa fa-star-half"></i> -->
                                     <img src="images/star.png" class="img-fluid" style="height: 34px;
    margin: 0px 10px 0px 2px;" alt="">
                                 </li>
                                 <li>
                                     <i class="fa fa-star-o"></i>
                                 </li>
                                 <li>
                                     <i class="fa fa-star-o"></i>
                                 </li>
                             </ul>
                         </div>
                         <div class="btn-wrapper">
                             <button class="btn">submit</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- <div class="row">
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
                     <button class="load">LOAD MORE</button>
                 </div>
             </div>
         </div> -->
     </div>
 </section>
 <!-- product detail ends here -->

 <!-- easypack starts here -->
 <?php include 'inc/easypack.php' ?>
 <!-- easypack ends here -->

 <!-- Head include -->
 <?php include 'inc/footer.php'; ?>
 <!-- Head include -->