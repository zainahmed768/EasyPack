<?php include('inc/head.php'); ?>

<!-- Stylesheet -->
<link rel="stylesheet" href="css/signin.css">
<!-- Stylesheet -->

<!-- Signin Section Start Here -->
<section class="signin">
    <div class="container">
        <div class="logoDv">
            <figure><a href="index.php"><img src="img/logo-1.png" alt=""></a></figure>
        </div>
        <div class="SigninBox">
            <div class="head">
                <h4>Welcome Back to Fcadue</h4>
                <h4><strong>Where we provide Best Products</strong></h4>
            </div>
            <div class="actionBtn">
                <p>Not a Member ?<a href="signup.php">Sign Up</a></p>
            </div>
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <button onclick="location.href='profile.php';" type="button">Submit</button>
            </form>
            <div class="actionBtn2">
                <p>By Creating Account you are agree to our <a href="#">Terms & conditions</a></p>
            </div>
        </div>
    </div>
</section>
<!-- Signin Section End Here -->
<!-- Head include -->
<?php include 'inc/footer.php';?>
 <!-- Head include -->