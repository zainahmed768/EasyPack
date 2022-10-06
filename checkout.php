 <!-- Header Include --> <?php include 'inc/head.php'; ?>
 <!-- Header Include -->
 <link rel="stylesheet" href="css/checkout.css">
 <!-- **********************Profile section Start  Here *********************** -->
 <section class="checkout_section">
     <div class="container">
         <div class="checkout_start">
             <div class="page_heading">
                 <h2>Checkout</h2>
             </div>
             <div class="row pb-5">
                 <div class="col-md-6">
                     <div class="right_side">
                         <div class="top_headings">
                             <span>Total Amount</span>
                             <span>Already Have an account? <a href="">Log in</a></span>
                         </div>
                         <div class="address_side">
                             <span class="old_address">Use Saved Addresses</span>
                             <div class="address_box">
                                 <div class="single_address">
                                     <input type="radio" id="address1" class="adress_radio" name="for_address" hidden checked>
                                     <label for="address1">
                                         <div class="address_flex">
                                             <div class="address_text">
                                                 <div class="radio_btn">
                                                     <span></span>
                                                 </div>
                                                 <div class="address_detail">
                                                     <div class="single_line">
                                                         <span class="the_light_text">Address Name:</span>
                                                         <span class="default pl-2">Home</span>
                                                         <small>This is Your default</small>
                                                     </div>
                                                     <div class="single_line">
                                                         <span class="default">10515 Fox Ave Fairdale, Kentucky(KY),
                                                             40118</span>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="edit_btn">
                                                 <button class="edit">Edit</button>
                                             </div>
                                         </div>
                                     </label>
                                 </div>
                                 <div class="single_address">
                                     <input type="radio" id="address2" name="for_address" class="adress_radio" hidden checked>
                                     <label for="address2">
                                         <div class="address_flex">
                                             <div class="address_text">
                                                 <div class="radio_btn">
                                                     <span></span>
                                                 </div>
                                                 <div class="address_detail">
                                                     <div class="single_line">
                                                         <span class="the_light_text">Address Name:</span>
                                                         <span class="default pl-2">Home</span>
                                                     </div>
                                                     <div class="single_line">
                                                         <span class="default">10515 Fox Ave Fairdale, Kentucky(KY),
                                                             40118</span>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="edit_btn">
                                                 <button class="edit">Edit</button>
                                             </div>
                                         </div>
                                     </label>
                                 </div>
                                 <div class="add_new">
                                     <button class="btn" data-toggle="modal" data-target="#adress_modal">ADD
                                         NEW</button>
                                 </div>
                             </div>
                         </div>
                         <div class="shipment_method pt-4 mt-2">
                             <h6 class="small_heading mb-3">Shipment Method</h6>
                             <div class="form_start">
                                 <select name="" id="">
                                     <option value="Select Shipment method">Select Shipment method</option>
                                 </select>
                             </div>
                         </div>
                         <div class="personal_details pt-4 mt-2">
                             <h6 class="small_heading">Personal Details</h6>
                             <div class="form_start">
                                 <div class="form_row">
                                     <div class="single_input">
                                         <label for="">First Name</label>
                                         <input type="text" name="" id="">
                                     </div>
                                     <div class="single_input">
                                         <label for="">Last Name</label>
                                         <input type="text" name="" id="">
                                     </div>
                                 </div>
                                 <div class="form_row">
                                     <div class="single_input">
                                         <label for="">Phone</label>
                                         <input type="text" name="" id="">
                                     </div>
                                     <div class="single_input">
                                         <label for="">Email</label>
                                         <input type="text" name="" id="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="save_details">
                             <label class="custom_check_box">Save Shipping Details <input type="checkbox" checked="checked">
                                 <span class="checkmark"></span>
                             </label>
                         </div>
                         <div class="payment_details">
                             <div class="top_heading">
                                 <h6 class="small_heading">Payment Details</h6>
                                 <div class="add_new">
                                     <button class="btn" data-toggle="modal" data-target="#add_card_modal">ADD
                                         NEW</button>
                                 </div>
                             </div>
                             <div class="saved_payemtns">
                                 <div class="single_payment">
                                     <div class="payment-details">
                                         <div class="saved-payment-method">
                                             <!-- Saved payments Method -->
                                             <label class="container">
                                                 <input type="radio" checked="checked" name="payment-radio">
                                                 <span class="checkmark">
                                                     <div class="card-details">
                                                         <div class="visa-card">
                                                             <div class="img-box">
                                                                 <figure><img src="images/visa.png" alt="No Image Found">
                                                                 </figure>
                                                             </div>
                                                             <div class="input-box">
                                                                 <label for="card-number">My Personal Card</label>
                                                                 <input id="card-number" value="**********1239" type="text" readonly="">
                                                             </div>
                                                         </div>
                                                         <div class="extra-btn">
                                                             <button class="btn default disabled">Default</button>
                                                         </div>
                                                         <div class="radio-btn">
                                                             <span></span>
                                                         </div>
                                                     </div>
                                                 </span>
                                             </label>
                                             <label class="container second-card">
                                                 <input type="radio" name="payment-radio">
                                                 <span class="checkmark">
                                                     <div class="card-details">
                                                         <div class="visa-card">
                                                             <div class="img-box">
                                                                 <figure><img src="images/visa.png" alt="No Image Found">
                                                                 </figure>
                                                             </div>
                                                             <div class="input-box">
                                                                 <label for="card-number">My Personal Card</label>
                                                                 <input id="card-number" value="**********1239" type="text" readonly="">
                                                             </div>
                                                         </div>
                                                         <div class="extra-btn">
                                                             <button class="btn default disabled">Default</button>
                                                         </div>
                                                         <div class="radio-btn">
                                                             <span></span>
                                                         </div>
                                                     </div>
                                                 </span>
                                             </label>
                                             <!-- Saved payments Method -->
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="left_side">
                         <div class="top_headings">
                             <span>Order Summary</span>
                         </div>
                         <div class="for_promo_code">
                             <div class="form_start">
                                 <div class="input_text">
                                     <input type="text" name="" placeholder="Enter Promo Code" id="">
                                 </div>
                                 <div class="button_btn">
                                     <button class="btn">APPLY</button>
                                 </div>
                             </div>
                         </div>
                         <div class="profuct_details_box">
                             <div class="top_heading">
                                 <h6 class="small_heading">Products Details</h6>
                                 <a href="">Edit Cart</a>
                             </div>
                             <div class="product_list">
                                 <div class="single_product">
                                     <div class="product_det">
                                         <figure><img src="images/checkout.png" alt=""></figure>
                                         <span class="name">Triax Engine Oil EOS-4.5</span>
                                     </div>
                                     <span class="product_price">$158.07</span>
                                 </div>
                                 <div class="single_product">
                                     <div class="product_det">
                                         <figure><img src="images/checkout.png" alt=""></figure>
                                         <span class="name">Triax Engine Oil EOS-4.5</span>
                                     </div>
                                     <span class="product_price">$158.07</span>
                                 </div>
                                 <div class="single_product">
                                     <div class="product_det">
                                         <figure><img src="images/checkout.png" alt=""></figure>
                                         <span class="name">Triax Engine Oil EOS-4.5</span>
                                     </div>
                                     <span class="product_price">$158.07</span>
                                 </div>
                                 <div class="single_product">
                                     <div class="product_det">
                                         <figure><img src="images/checkout.png" alt=""></figure>
                                         <span class="name">Triax Engine Oil EOS-4.5</span>
                                     </div>
                                     <span class="product_price">$158.07</span>
                                 </div>
                             </div>
                             <div class="price_totals">
                                 <div class="subtotal_totals">
                                     <div class="detail_information">
                                         <div class="the_row">
                                             <span class="question">Item Total :</span>
                                             <span class="answer">$50</span>
                                         </div>
                                         <div class="the_row">
                                             <span class="question">Tax:</span>
                                             <span class="answer">$0</span>
                                         </div>
                                         <div class="the_row">
                                             <span class="question">Credit Used;</span>
                                             <span class="answer">$-20</span>
                                         </div>
                                         <div class="the_row">
                                             <span class="question">Shipping:</span>
                                             <span class="answer">Free</span>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="grand_totaols">
                                     <div class="gran_price">
                                         <div class="the_row">
                                             <span class="question">Order Total</span>
                                             <span class="answer">$45</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="credit_earned text-center">
                                 <span>Credit Earned For this order. $15.00</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="the_confir_order">
                 <div class="save_details">
                     <label class="custom_check_box">Proident, sunt in culpa qui officia deserunt mollit anim id est
                         laborum. <input type="checkbox" checked="checked">
                         <span class="checkmark"></span>
                     </label>
                 </div>
                 <button class="btn" data-toggle="modal" data-target="#thankyou_modal">Confirm Order</button>
             </div>
             <div class="add_new_adress_form">
                 <div class="modal fade" id="adress_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-body">
                                 <div class="new_address_start">
                                     <div class="top_heading text-center">
                                         <h6 class="small_heading">Enter Your New Address</h6>
                                     </div>
                                     <form action="">
                                         <div class="form_start">
                                             <div class="form_row">
                                                 <div class="input_box">
                                                     <label for="">Address</label>
                                                     <input type="text" name="" class="d-block w-100" id="">
                                                 </div>
                                             </div>
                                             <div class="form_row">
                                                 <div class="input_box">
                                                     <label for="">Suite, Apartment, etc</label>
                                                     <input type="text" name="" class="d-block w-100" id="">
                                                 </div>
                                             </div>
                                             <div class="form_row">
                                                 <div class="input_box">
                                                     <label for="">City</label>
                                                     <input type="text" name="" class="d-block w-100" id="">
                                                 </div>
                                             </div>
                                             <div class="form_row">
                                                 <div class="theree_inputs">
                                                     <label for="">Country/Region</label>
                                                     <input type="text" name="" class="d-block w-100" id="">
                                                 </div>
                                                 <div class="theree_inputs">
                                                     <label for="">State</label>
                                                     <input type="text" name="" class="d-block w-100" id="">
                                                 </div>
                                                 <div class="theree_inputs">
                                                     <label for="">Zip Code</label>
                                                     <input type="text" name="" class="d-block w-100" id="">
                                                 </div>
                                             </div>
                                             <div class="form_row">
                                                 <button class="btn d-block w-100" type="submit">Add Address</button>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="add_new_adress_form add_card_modal">
                 <div class="modal fade" id="add_card_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-body">
                                 <div class="new_address_start">
                                     <div class="top_heading text-center">
                                         <h6 class="small_heading">Enter Your New Card</h6>
                                     </div>
                                     <form action="">
                                         <div class="form_start">
                                             <div class="form_row">
                                                 <div class="input_box">
                                                     <label for="">Name On the Card</label>
                                                     <input type="text" name="" class="d-block w-100" id="">
                                                 </div>
                                             </div>
                                             <div class="form_row">
                                                 <div class="input_box">
                                                     <label for="">Card Number</label>
                                                     <input type="text" name="" class="d-block w-100" id="">
                                                 </div>
                                             </div>
                                             <div class="form_row">
                                                 <div class="single_input">
                                                     <div class="input_box">
                                                         <label for="">Expiry Date</label>
                                                         <input type="text" name="" class="d-block w-100" id="">
                                                     </div>
                                                 </div>
                                                 <div class="single_input">
                                                     <div class="input_box">
                                                         <label for="">CVV</label>
                                                         <input type="text" name="" class="d-block w-100" id="">
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card_list">
                                                 <div class="single_card">
                                                     <input type="radio" class="select_card" id="card1" hidden name="use_card">
                                                     <label for="card1">
                                                         <img src="images/card1.png" alt="">
                                                     </label>
                                                 </div>
                                                 <div class="single_card">
                                                     <input type="radio" class="select_card" id="card2" hidden name="use_card">
                                                     <label for="card2">
                                                         <img src="images/card2.png" alt="">
                                                     </label>
                                                 </div>
                                                 <div class="single_card">
                                                     <input type="radio" class="select_card" id="card3" hidden name="use_card">
                                                     <label for="card3">
                                                         <img src="images/card3.png" alt="">
                                                     </label>
                                                 </div>
                                                 <div class="single_card">
                                                     <input type="radio" class="select_card" id="card4" hidden name="use_card">
                                                     <label for="card4">
                                                         <img src="images/card4.png" alt="">
                                                     </label>
                                                 </div>
                                                 <div class="single_card">
                                                     <input type="radio" class="select_card" id="card5" hidden name="use_card">
                                                     <label for="card5">
                                                         <img src="images/card5.png" alt="">
                                                     </label>
                                                 </div>
                                             </div>
                                             <div class="form_row">
                                                 <button class="btn d-block w-100" type="submit">Add Card</button>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="add_new_adress_form thankyou_modal">
                 <div class="modal fade" id="thankyou_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-body">
                                 <div class="thankyou_modal">
                                     <h2>Thank You</h2>
                                     <h5>For Shoping</h5>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                         incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                         nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                     </p>
                                     <a href="./index.php" class="btn">CONTINUE SHOPPING</a>
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