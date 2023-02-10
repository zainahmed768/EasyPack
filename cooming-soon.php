 <!-- Header Include -->
 <?php include 'inc/head.php'; ?>
 <style>
     header,
     footer {
         display: none;
     }
 </style>
 <!-- Header Include -->

 <link rel="stylesheet" href="css/contact.css">

 <!-- contact form sec starts here -->
 <section class="contact-form py-5 my-0">
     <div class="container">
         <div class="cooming_soon">
             <div class="logo mb-4">
                 <figure class="text-center">
                     <img src="images/logo.png" alt="">
                 </figure>
             </div>
             <div class="middle text-center">
                 <div class="form-heading-wrapper">

                     <h1 class="mb-0">COMING SOON</h1>
                 </div>
                 <div class="d-flex justify-content-center align-items-center">
                     <h4 id="demo" style="font-size:30px"></h4>
                     <h4 id="demo" class=" ml-3" style="font-size:30px;">LEFT</h4>
                 </div>
             </div>
         </div>
         <div class="row mt-5">
             <div class="col-lg-6 mx-auto">
                 <div class="contact-form-wrapper">
                     <div class="form-heading-wrapper">
                         <h2>Contact Us</h2>
                     </div>
                     <form action="">
                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <input type="text" class="form-control" placeholder="FIRST NAME">
                             </div>
                             <div class="col-lg-6">
                                 <input type="text" class="form-control" placeholder="LAST NAME">
                             </div>
                         </div>
                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <input type="email" class="form-control" placeholder="EMAIL ADDRESS">
                             </div>
                             <div class="col-lg-6">
                                 <input type="number" class="form-control" placeholder="PHONE">
                             </div>
                         </div>
                         <div class="form-group">
                             <textarea name="" class="form-control" placeholder="ENTER YOU MESSAGE" id="" cols="30" rows="5"></textarea>
                         </div>
                         <div class="form-group mt-5">
                             <button type="submit" class="btn form-control">SUBMIT DETAILS</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- contact form sec starts here -->
 <!-- Head include -->
 <script>
     // Set the date we're counting down to
     var countDownDate = new Date("Feb 5, 2023 15:37:25").getTime();

     // Update the count down every 1 second
     var x = setInterval(function() {

         // Get todays date and time
         var now = new Date().getTime();

         // Find the distance between now an the count down date
         var distance = countDownDate - now;

         // Time calculations for days, hours, minutes and seconds
         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
         var seconds = Math.floor((distance % (1000 * 60)) / 1000);

         // Display the result in an element with id="demo"
         document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
             minutes + "m " + seconds + "s ";

         // If the count down is finished, write some text
         if (distance < 0) {
             clearInterval(x);
             document.getElementById("demo").innerHTML = "EXPIRED";
         }
     }, 1000);
 </script>
 <?php include 'inc/footer.php'; ?>
 <!-- Head include -->