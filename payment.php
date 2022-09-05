 <!-- Header Include -->
 <?php include 'inc/head.php';?>
 <!-- Header Include -->

 <link rel="stylesheet" href="css/payment.css">

 <!-- **********************Banner section*********************** -->
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
         <div class="carousel-item active">
             <img class="d-block w-100 img-fluid" src="images/profile-ban.png" alt="First slide">

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
 <!-- <div class="profile-car-caption-flex">
     <div class="profile-car-caption">
         <div class="car-img">
             <img class="img-fluid" src="images/man.png" alt="">
         </div>
         <div class="car-text">
             <h3>Username / Edit Profile</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
         </div>

     </div>
 </div> -->
 <!-- ************************End of bannersection*************************** -->
 <section class="pay-line-sec">
     <div class="container">
         <div class="pay-div">
             <h4>Order Detail</h4>
             <h4> Checkout </h4>
             <h4><span>Payment</span></h4>
         </div>
     </div>
 </section>

 <!-- ************payment section************* -->
 <section class="pay-sec">
     <div class="container">

         <div class="row">
             <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                 <div class="pay-head">
                     <h3>Payment Options</h3>
                     <div class="form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1">Debit / Credit Card</label>
                     </div>
                     <div class="pay-img">
                         <a href="#"><img class="img-fluid" src="images/pay-img.png" alt=""></a>
                     </div>
                 </div>

                 <form class="form1" action="">
                     <div class="form-group">
                         <label for="exampleInputEmail1">Card Number</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                             placeholder="1234 4567 4586 4789">

                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Expiration Date</label>
                         <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                             placeholder="DD / MM / YYYY">

                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Security Code</label>
                         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                             placeholder="221">

                     </div>
                 </form>


                 <form class="form2" action="">
                     <div class="form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1">Paypal / Other</label>
                     </div>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Email address</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                             placeholder="abcnmdoi@customer.com">

                     </div>
                     <div class="form-group ">
                         <label for="inputPassword2">Password</label>
                         <input type="password" class="form-control" id="inputPassword2" placeholder="*********">
                     </div>
                     <div class="form-btn">
                         <button type="submit" class="btn btn-primary">Place Order</button>
                     </div>
                 </form>


             </div>


             <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                 <div class="pay-head">
                     <h3>ORDER OVERVIEW</h3>
                 </div>
                 <div class="pay-table">

                 </div>

                 <table class="table table-image">
                     <thead>
                         <tr>
                             <!-- <th scope="col">Day</th> -->
                             <th scope="col">Product</th>
                             <th scope="col">Product Name</th>
                             <th scope="col">Unit Price</th>
                             <th scope="col">Qty</th>
                             <th scope="col">Subtotal</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <!-- <th scope="row">1</th> -->
                             <td class="w-25">
                                 <img src="images/pay-case.png" class="img-fluid img-thumbnail" alt="Sheep">
                             </td>
                             <td>Kenneth Cole Reaction Out Of Bounds Luggage Collection Lightweight Durable Hardside
                                 4-Wheel Spinner Travel Suitcase.</td>
                             <td>$90.37</td>
                             <td>1</td>
                             <td>$90.37</td>
                         </tr>

                     </tbody>
                 </table>

                 <div class="edit-cart-table">
                     <h4>Edit Cart</h4>
                     <h5>Subtotal: $90.37</h5>
                     <h5>Discount: $0/h5>
                         <h5>Shipping Charges: $0</h5>

                         <div class="edit-head">
                             <h3>Grand Total <span>: $90.37 </span> </h3>
                         </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12">
                         <div class="table-images">
                             <img class="img-fluid" src="images/norton.png" alt="">
                             <img class="img-fluid" src="images/secure.png" alt="">
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     </div>

 </section>
 <!-- *************End of payment section********** -->

 <!-- Head include -->
 <?php include 'inc/footer.php';?>
 <!-- Head include -->