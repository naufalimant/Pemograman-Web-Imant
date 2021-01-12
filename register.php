<?php
session_start();

include 'TUTOR/Tutor_PWeb-main/conn.php';

if (isset($_POST['submit'])) {
    //var_dump($_POST);
    // return;
    if ($_POST['password1'] != $_POST['password2']) {
        // header('Location: register.php');
        echo "<script>
        if (confirm('Password don\'t match!')) {
            window.location.href='register.php';
            }</script>";
        return;
    }

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password1'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (`username`, `email`, `password`)
          VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        if (confirm('Your account has been created')) {
        window.location.href='login.php';
        }</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);

$pageTitle = 'Register - MOSHION.';
include 'header.php';
?>


<!-- top bar -->
<div class="top-bar">
    <h1>REGISTER</h1>
</div>
<!-- end top bar -->

<!-- main-container -->
<div class="container main-container">
    <div class="col-md-6 col-md-offset-3 align-center">
        <form class="user" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-contact">
                        <input id="username" class="input-contact" name="username" type="text" data-validation-required-message="Please enter your name." required>
                        <span>Username</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-contact">
                        <input id="email" class="input-contact" name="email" type="email" data-validation-required-message="Please enter your email address." required>
                        <span>Email</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-contact">
                        <input type="password" class="input-contact" id="password1" name="password1" onkeyup='check();' required>
                        <span>Password</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-contact">
                        <input type="password" class="input-contact" id="password2" name="password2" onkeyup='check();' required>
                        <span>Confirm Password</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="success"></div>
                    <button type="submit" name="submit" id="submit" class="btn btn-box">Submit</button>
                </div>
            </div>
        </form>
        <p class="text-center">Already have an account? <a href="login.php">Log In</a></p>
    </div>
</div>
<!-- end main-container -->
<?php include 'footer.php' ?>