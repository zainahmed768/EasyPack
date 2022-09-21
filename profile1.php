 <!-- Header Include --> <?php include 'inc/head.php'; ?>
 <!-- Header Include -->
 <link rel="stylesheet" href="css/profile1.css">
 <!-- **********************Profile section Start  Here *********************** -->
 <section class="profile_section">
     <div class="container">
         <div class="complete_profile">
             <div class="row">
                 <div class="col-md-3">
                     <div class="profile_tab_controller pr-4">
                         <div class="top_heading">
                             <h4>My Account</h4>
                         </div>
                         <div class="tab_btns">
                             <ul class=" nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item">
                                     <a class=" active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My profile</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Address</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Orders</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="" id="friend-tab" data-toggle="tab" href="#friend" role="tab" aria-controls="friend" aria-selected="false">Tell a Friend</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="logout" onclick="window.location.href='signin.php'">Logout</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-9 for_low_padding">
                     <div class="profile_tab_data">
                         <div class="tab-content" id="myTabContent">
                             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                 <div class="shadowed_box">
                                     <div class="my_profile_tab_start">
                                         <div class="my_profile">
                                             <div class="top_heading">
                                                 <h4 class="main_heading">My profile</h4>
                                             </div>
                                             <div class="img_plus_option">
                                                 <div class="left_side">
                                                     <figure>
                                                         <img src="images/profile.png" alt="">
                                                         <span>
                                                             <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 32 32">
                                                                 <circle id="Ellipse_29" data-name="Ellipse 29" cx="16" cy="16" r="16" fill="#d29f45" />
                                                                 <path id="Icon_awesome-camera" data-name="Icon awesome-camera" d="M17.975,6.182V16.293a1.686,1.686,0,0,1-1.685,1.685H1.685A1.686,1.686,0,0,1,0,16.293V6.182A1.686,1.686,0,0,1,1.685,4.5H4.775l.432-1.155A1.683,1.683,0,0,1,6.783,2.25h4.406a1.683,1.683,0,0,1,1.576,1.092L13.2,4.5h3.089A1.686,1.686,0,0,1,17.975,6.182ZM13.2,11.237A4.213,4.213,0,1,0,8.987,15.45,4.216,4.216,0,0,0,13.2,11.237Zm-1.123,0A3.089,3.089,0,1,1,8.987,8.148,3.094,3.094,0,0,1,12.077,11.237Z" transform="translate(6.729 6.263)" />
                                                             </svg>
                                                         </span>
                                                     </figure>
                                                     <div class="text">
                                                         <h5>John Doe</h5>
                                                         <span>Customer</span>
                                                     </div>
                                                 </div>
                                                 <div class="right_side">
                                                     <button class="btn">Upload Image</button>
                                                     <button class="btn transparet">Remove Image</button>
                                                 </div>
                                             </div>
                                             <div class="profile_information pt-5">
                                                 <div class="heading_plus_edit">
                                                     <h6>Personal Information</h6>
                                                     <span class="edit_profile_option">Edit</span>
                                                 </div>
                                                 <div class="detail_information mt-2">
                                                     <div class="the_row">
                                                         <span class="question">First Name:</span>
                                                         <span class="answer">John</span>
                                                     </div>
                                                     <div class="the_row">
                                                         <span class="question">Last Name:</span>
                                                         <span class="answer">Doe</span>
                                                     </div>
                                                     <div class="the_row">
                                                         <span class="question">Email:</span>
                                                         <span class="answer">Johndoe@gmail.com</span>
                                                     </div>
                                                     <div class="the_row">
                                                         <span class="question">Contact Number:</span>
                                                         <span class="answer">+1-202-555-0196</span>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="profile_information pt-4">
                                                 <div class="heading_plus_edit">
                                                     <h6>Password</h6>
                                                     <span class="edit_password_option">Edit</span>
                                                 </div>
                                                 <div class="detail_information mt-2">
                                                     <div class="the_row">
                                                         <span class="question">Password:</span>
                                                         <span class="answer">**********</span>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="edit_profile_start hide">
                                             <div class="top_heading">
                                                 <h4 class="main_heading">Edit Personal Information</h4>
                                             </div>
                                             <div class="edit_form">
                                                 <form method="post">
                                                     <div class="form_start">
                                                         <div class="row">
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="text" name="" placeholder="John" id="">
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="text" name="" placeholder="Doe" id="">
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="text" name="" placeholder="JOhndoe@gmail.com" id="">
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="text" name="" placeholder="+92-345-559-1027" id="">
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <button class="btn" type="submit">Save CHanges</button>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                         <div class="edit_password_start hide">
                                             <div class="top_heading">
                                                 <h4 class="main_heading">Change Password</h4>
                                             </div>
                                             <div class="edit_form">
                                                 <form method="post">
                                                     <div class="form_start">
                                                         <div class="row">
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="text" name="" placeholder="Enter current password" id="">
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="text" name="" placeholder="Enter New password" id="">
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="text" name="" placeholder="Confirm password" id="">
                                                             </div>
                                                             <div class="col-md-6"></div>
                                                             <div class="col-md-6 mt-3">
                                                                 <button class="btn" type="submit">Save CHanges</button>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                 <div class="shadowed_box">
                                     <div class="address_complete_section">
                                         <div class="current_addresses">
                                             <div class="top_heading">
                                                 <h4 class="main_heading">My Address</h4>
                                                 <h6>Saved Address</h6>
                                             </div>
                                             <div class="all_adresses">
                                                 <div class="single_address">
                                                     <input type="radio" id="address1" class="cutom_radio_btn" checked name="address_select">
                                                     <label for="address1">
                                                         <div class="address_start">
                                                             <div class="detail_information_information">
                                                                 <div class="the_row">
                                                                     <span class="question">Country:</span>
                                                                     <span class="answer">United States</span>
                                                                 </div>
                                                                 <div class="the_row">
                                                                     <span class="question">Address:</span>
                                                                     <span class="answer">10515 Fox Ave Fairdale, Kentucky(KY), 40118</span>
                                                                 </div>
                                                                 <div class="the_row">
                                                                     <span class="question">Phone:</span>
                                                                     <span class="answer">+44-123-456-789</span>
                                                                 </div>
                                                                 <div class="the_row">
                                                                     <span class="question">State:</span>
                                                                     <span class="answer">Texas</span>
                                                                 </div>
                                                                 <div class="custom_check_box">
                                                                     <div class="for_the_label"><span>Use as default</span><span class="custom_radio"></span></div>
                                                                 </div>
                                                                 <div class="edit_plus_delete">
                                                                     <span class="edit_this_address">
                                                                         <svg id="Icon_feather-edit" data-name="Icon feather-edit" xmlns="http://www.w3.org/2000/svg" width="12.213" height="12.213" viewBox="0 0 15.213 15.213">
                                                                             <path id="Path_213" data-name="Path 213" d="M13.191,18.254H3.563A2.066,2.066,0,0,1,1.5,16.191V6.563A2.066,2.066,0,0,1,3.563,4.5H8.377a.688.688,0,0,1,0,1.375H3.563a.689.689,0,0,0-.688.688v9.628a.689.689,0,0,0,.688.688h9.628a.689.689,0,0,0,.688-.688V11.377a.688.688,0,1,1,1.375,0v4.814A2.066,2.066,0,0,1,13.191,18.254Z" transform="translate(-1.5 -3.041)" />
                                                                             <path id="Path_214" data-name="Path 214" d="M19.44,1.318a2.147,2.147,0,0,1,1.518,3.664l-6.533,6.533a.688.688,0,0,1-.319.181l-2.751.688a.688.688,0,0,1-.834-.834L11.208,8.8a.688.688,0,0,1,.181-.319l6.533-6.533A2.133,2.133,0,0,1,19.44,1.318Zm-5.853,9.091,6.4-6.4A.771.771,0,0,0,18.9,2.919l-6.4,6.4-.364,1.454Z" transform="translate(-6.374 -1.318)" />
                                                                         </svg>
                                                                     </span>
                                                                     <span>
                                                                         <svg xmlns="http://www.w3.org/2000/svg" width="11.443" height="13.545" viewBox="0 0 13.443 16.545">
                                                                             <path id="Icon_metro-bin" data-name="Icon metro-bin" d="M5.533,7.1V17.439a1.037,1.037,0,0,0,1.034,1.034h9.307a1.037,1.037,0,0,0,1.034-1.034V7.1H5.533Zm3.1,9.307H7.6V9.167H8.635Zm2.068,0H9.669V9.167H10.7Zm2.068,0H11.737V9.167h1.034Zm2.068,0H13.805V9.167h1.034ZM17.166,4H13.805V2.7a.778.778,0,0,0-.776-.776H9.411a.778.778,0,0,0-.776.776V4H5.274a.778.778,0,0,0-.776.776V6.064H17.942V4.772A.778.778,0,0,0,17.166,4ZM12.771,4h-3.1V2.975h3.1V4Z" transform="translate(-4.499 -1.928)" />
                                                                         </svg>
                                                                     </span>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </label>
                                                 </div>
                                                 <div class="single_address">
                                                     <input type="radio" id="address2" class="cutom_radio_btn" name="address_select">
                                                     <label for="address2">
                                                         <div class="address_start">
                                                             <div class="detail_information_information">
                                                                 <div class="the_row">
                                                                     <span class="question">Country:</span>
                                                                     <span class="answer">United States</span>
                                                                 </div>
                                                                 <div class="the_row">
                                                                     <span class="question">Address:</span>
                                                                     <span class="answer">10515 Fox Ave Fairdale, Kentucky(KY), 40118</span>
                                                                 </div>
                                                                 <div class="the_row">
                                                                     <span class="question">Phone:</span>
                                                                     <span class="answer">+44-123-456-789</span>
                                                                 </div>
                                                                 <div class="the_row">
                                                                     <span class="question">State:</span>
                                                                     <span class="answer">Texas</span>
                                                                 </div>
                                                                 <div class="custom_check_box">
                                                                     <div class="for_the_label"><span>Use as default</span><span class="custom_radio"></span></div>
                                                                 </div>
                                                                 <div class="edit_plus_delete">
                                                                     <span class="edit_this_address">
                                                                         <svg id="Icon_feather-edit" data-name="Icon feather-edit" xmlns="http://www.w3.org/2000/svg" width="12.213" height="12.213" viewBox="0 0 15.213 15.213">
                                                                             <path id="Path_213" data-name="Path 213" d="M13.191,18.254H3.563A2.066,2.066,0,0,1,1.5,16.191V6.563A2.066,2.066,0,0,1,3.563,4.5H8.377a.688.688,0,0,1,0,1.375H3.563a.689.689,0,0,0-.688.688v9.628a.689.689,0,0,0,.688.688h9.628a.689.689,0,0,0,.688-.688V11.377a.688.688,0,1,1,1.375,0v4.814A2.066,2.066,0,0,1,13.191,18.254Z" transform="translate(-1.5 -3.041)" />
                                                                             <path id="Path_214" data-name="Path 214" d="M19.44,1.318a2.147,2.147,0,0,1,1.518,3.664l-6.533,6.533a.688.688,0,0,1-.319.181l-2.751.688a.688.688,0,0,1-.834-.834L11.208,8.8a.688.688,0,0,1,.181-.319l6.533-6.533A2.133,2.133,0,0,1,19.44,1.318Zm-5.853,9.091,6.4-6.4A.771.771,0,0,0,18.9,2.919l-6.4,6.4-.364,1.454Z" transform="translate(-6.374 -1.318)" />
                                                                         </svg>
                                                                     </span>
                                                                     <span>
                                                                         <svg xmlns="http://www.w3.org/2000/svg" width="11.443" height="13.545" viewBox="0 0 13.443 16.545">
                                                                             <path id="Icon_metro-bin" data-name="Icon metro-bin" d="M5.533,7.1V17.439a1.037,1.037,0,0,0,1.034,1.034h9.307a1.037,1.037,0,0,0,1.034-1.034V7.1H5.533Zm3.1,9.307H7.6V9.167H8.635Zm2.068,0H9.669V9.167H10.7Zm2.068,0H11.737V9.167h1.034Zm2.068,0H13.805V9.167h1.034ZM17.166,4H13.805V2.7a.778.778,0,0,0-.776-.776H9.411a.778.778,0,0,0-.776.776V4H5.274a.778.778,0,0,0-.776.776V6.064H17.942V4.772A.778.778,0,0,0,17.166,4ZM12.771,4h-3.1V2.975h3.1V4Z" transform="translate(-4.499 -1.928)" />
                                                                         </svg>
                                                                     </span>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </label>
                                                 </div>
                                                 <div class="add_new_address">
                                                     <button class="btn add_address_btn">ADD NEW ADDRESS</button>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="new_address_section hide">
                                             <div class="top_heading">
                                                 <h4 class="main_heading">Edit Personal Information</h4>
                                             </div>
                                             <div class="edit_form">
                                                 <form method="post">
                                                     <div class="form_start">
                                                         <div class="row">
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="text" name="" placeholder="First Name" id="">
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="text" name="" placeholder="Last NAme" id="">
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="text" name="" placeholder="Email" id="">
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <input type="tel" name="" placeholder="Phone Number" id="">
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <select name="" id="">
                                                                     <option value="Select Country">Select Country</option>
                                                                 </select>
                                                                 <select name="" id="" class="mt-3">
                                                                     <option value="State">State</option>
                                                                 </select>
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <textarea name="" id="" placeholder="Enter Your Address"></textarea>
                                                             </div>
                                                             <div class="col-md-6 mt-3">
                                                                 <button class="btn" type="submit">Save CHanges</button>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                 <div class="the_orders_table">
                                     <div class="orders_start_here">
                                         <div class="shadowed_box">
                                             <div class="complete_orders_start">
                                                 <div class="top_heading">
                                                     <h4 class="main_heading">Orders</h4>
                                                 </div>
                                                 <div class="order_table_start_here">
                                                     <table class="table">
                                                         <thead>
                                                             <tr>
                                                                 <th class="no_1">OrderNo</th>
                                                                 <th class="no_2">Order Date</th>
                                                                 <th class="no_3">Status</th>
                                                                 <th class="no_4">Payment Status</th>
                                                                 <th class="no_5">Total</th>
                                                                 <th class="no_6">Detail</th>
                                                             </tr>
                                                         </thead>
                                                         <tbody>
                                                             <tr>
                                                                 <td>#1084598423154</td>
                                                                 <td>04-12-21</td>
                                                                 <td><span>Completed</span></td>
                                                                 <td><span class="payment">Paid</span></td>
                                                                 <td>$590.00</td>
                                                                 <td><span class="details see_order_details">view Details</span></td>
                                                             </tr>
                                                             <tr>
                                                                 <td>#1084598423154</td>
                                                                 <td>04-12-21</td>
                                                                 <td>Confirm</td>
                                                                 <td><span class="payment">Paid</span></td>
                                                                 <td>$590.00</td>
                                                                 <td><span class="details see_order_details">view Details</span></td>
                                                             </tr>
                                                             <tr>
                                                                 <td>#1084598423154</td>
                                                                 <td>04-12-21</td>
                                                                 <td>Confirm</td>
                                                                 <td><span class="payment">Paid</span></td>
                                                                 <td>$590.00</td>
                                                                 <td><span class="details see_order_details">view Details</span></td>
                                                             </tr>
                                                             <tr>
                                                                 <td>#1084598423154</td>
                                                                 <td>04-12-21</td>
                                                                 <td>Confirm</td>
                                                                 <td><span class="payment">Paid</span></td>
                                                                 <td>$590.00</td>
                                                                 <td><span class="details see_order_details">view Details</span></td>
                                                             </tr>
                                                             <tr>
                                                                 <td>#1084598423154</td>
                                                                 <td>04-12-21</td>
                                                                 <td>Confirm</td>
                                                                 <td><span class="payment">Paid</span></td>
                                                                 <td>$590.00</td>
                                                                 <td><span class="details see_order_details">view Details</span></td>
                                                             </tr>
                                                         </tbody>
                                                     </table>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="the_pagination">
                                             <nav aria-label="Page navigation example">
                                                 <ul class="pagination">
                                                     <li class="page-item disabled move_toward">
                                                         <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-angle-left"></i></a>
                                                     </li>
                                                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                     <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                     <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                     <li class="page-item move_toward">
                                                         <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                                     </li>
                                                 </ul>
                                             </nav>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="orders_details_start_here">
                                     <div class="shadowed_box">
                                         <div class="complete_orders_start">
                                             <div class="top_heading">
                                                 <h4 class="main_heading">Orders</h4>
                                             </div>
                                             <div class="order_details  pb-5">
                                                 <div class="row">
                                                     <div class="col-md-7">
                                                         <div class="total_products">
                                                             <div class="heading">
                                                                 <h6>Product Detail</h6>
                                                             </div>
                                                             <div class="orders_list mt-4">
                                                                 <div class="single_order">
                                                                     <figure>
                                                                         <img src="images/small_bag.png" class="img-fluid" alt="">
                                                                     </figure>
                                                                     <div class="about_product">
                                                                         <span class="order_name">DELSEY Paris Helium</span>
                                                                         <span class="order_number">Quantity: 1</span>
                                                                     </div>
                                                                     <div class="product_price">
                                                                         <span>$158.07</span>
                                                                     </div>
                                                                 </div>
                                                                 <div class="single_order">
                                                                     <figure>
                                                                         <img src="images/small_bag.png" class="img-fluid" alt="">
                                                                     </figure>
                                                                     <div class="about_product">
                                                                         <span class="order_name">DELSEY Paris Helium</span>
                                                                         <span class="order_number">Quantity: 1</span>
                                                                     </div>
                                                                     <div class="product_price">
                                                                         <span>$158.07</span>
                                                                     </div>
                                                                 </div>
                                                                 <div class="single_order">
                                                                     <figure>
                                                                         <img src="images/small_bag.png" class="img-fluid" alt="">
                                                                     </figure>
                                                                     <div class="about_product">
                                                                         <span class="order_name">DELSEY Paris Helium</span>
                                                                         <span class="order_number">Quantity: 1</span>
                                                                     </div>
                                                                     <div class="product_price">
                                                                         <span>$158.07</span>
                                                                     </div>
                                                                 </div>
                                                                 <div class="single_order">
                                                                     <figure>
                                                                         <img src="images/small_bag.png" class="img-fluid" alt="">
                                                                     </figure>
                                                                     <div class="about_product">
                                                                         <span class="order_name">DELSEY Paris Helium</span>
                                                                         <span class="order_number">Quantity: 1</span>
                                                                     </div>
                                                                     <div class="product_price">
                                                                         <span>$158.07</span>
                                                                     </div>
                                                                 </div>
                                                                 <div class="single_order">
                                                                     <figure>
                                                                         <img src="images/small_bag.png" class="img-fluid" alt="">
                                                                     </figure>
                                                                     <div class="about_product">
                                                                         <span class="order_name">DELSEY Paris Helium</span>
                                                                         <span class="order_number">Quantity: 1</span>
                                                                     </div>
                                                                     <div class="product_price">
                                                                         <span>$158.07</span>
                                                                     </div>
                                                                 </div>
                                                                 <div class="single_order">
                                                                     <figure>
                                                                         <img src="images/small_bag.png" class="img-fluid" alt="">
                                                                     </figure>
                                                                     <div class="about_product">
                                                                         <span class="order_name">DELSEY Paris Helium</span>
                                                                         <span class="order_number">Quantity: 1</span>
                                                                     </div>
                                                                     <div class="product_price">
                                                                         <span>$158.07</span>
                                                                     </div>
                                                                 </div>
                                                                 <div class="single_order">
                                                                     <figure>
                                                                         <img src="images/small_bag.png" class="img-fluid" alt="">
                                                                     </figure>
                                                                     <div class="about_product">
                                                                         <span class="order_name">DELSEY Paris Helium</span>
                                                                         <span class="order_number">Quantity: 1</span>
                                                                     </div>
                                                                     <div class="product_price">
                                                                         <span>$158.07</span>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-5 responsive-pedding">
                                                         <div class="single_order_detail">
                                                             <div class="heading">
                                                                 <h6>Order Details</h6>
                                                             </div>
                                                             <div class="sngle_details_start mt-4">
                                                                 <div class="detail_information ">
                                                                     <div class="the_row">
                                                                         <span class="question">Date :</span>
                                                                         <span class="answer">#10005165551651</span>
                                                                     </div>
                                                                     <div class="the_row">
                                                                         <span class="question">Subtotal :</span>
                                                                         <span class="answer">$785.00</span>
                                                                     </div>
                                                                     <div class="the_row">
                                                                         <span class="question">Tax fee :</span>
                                                                         <span class="answer">$80.00</span>
                                                                     </div>
                                                                     <div class="the_row">
                                                                         <span class="question">Shipping Fee :</span>
                                                                         <span class="answer">$5.00</span>
                                                                     </div>
                                                                     <div class="the_row">
                                                                         <span class="question">Coupon Discount :</span>
                                                                         <span class="answer">$50.00</span>
                                                                     </div>
                                                                     <div class="the_row">
                                                                         <span class="question">Estimated Arrival:</span>
                                                                         <span class="answer">29 September</span>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="the_pagination">
                                         <nav aria-label="Page navigation example">
                                             <ul class="pagination">
                                                 <li class="page-item disabled move_toward">
                                                     <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-angle-left"></i></a>
                                                 </li>
                                                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                 <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                 <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                 <li class="page-item move_toward">
                                                     <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                                 </li>
                                             </ul>
                                         </nav>
                                     </div>
                                 </div>
                             </div>
                             <div class="tab-pane fade" id="friend" role="tabpanel" aria-labelledby="friend-tab">Friend
                                 Us</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section class="unique_feature">
     <div class="container">
         <div class="unique_feature_start text-center">
             <div class="top_heading">
                 <h1>Our EasyPack Unique Feature</h1>
             </div>
             <div class="row">
                 <div class="col-md-4">
                     <figure>
                         <img src="images/uni1.png" class="img-fluid" alt="">
                     </figure>
                 </div>
                 <div class="col-md-4">
                     <figure>
                         <img src="images/uni1.png" class="img-fluid" alt="">
                     </figure>
                 </div>
                 <div class="col-md-4">
                     <figure>
                         <img src="images/uni1.png" class="img-fluid" alt="">
                     </figure>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- **********************Profile section End  Here *********************** -->
 <!-- Head include --> <?php include 'inc/footer.php'; ?>
 <!-- Head include -->