<?php
$pageTitle = 'Login - MOSHION.';
include 'header.php';
?>

</div>

<!-- top bar -->
<div class="top-bar">
    <h1>LOGIN</h1>
</div>
<!-- end top bar -->

<!-- main-container -->
<div class="container main-container">
    <div class="col-md-6 col-md-offset-3 align-center">
        <div class="row">
            <h3 class="text-center" style="padding-bottom:15px;">Login Now</h3>
            <form class="user" action="verify_login.php" method="POST">
                <div class="col-md-12">
                    <div class="input-contact">
                        <input type="text" class="input-contact" name="username" required>
                        <span>Username</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-contact">
                        <input id="password-field" type="password" class="input-contact" name="password1" required>
                        <span>Password</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" name="submit" id="submit" class="btn btn-box">Submit</button>
                </div>
            </form>
            <p class="text-center">Register? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</div>
<!-- end main-container -->
<?php include 'footer.php' ?>