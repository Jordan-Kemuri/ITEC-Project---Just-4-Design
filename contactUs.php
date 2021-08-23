<?php
include 'extraPhp.php';

echo '<script src="script.js">> </script>';
    if (isset($_POST['send'])) {
        $Email = $_POST['email'];
        $Name = $_POST['name'];
        $Message = $_POST['message'];

        $sql = "INSERT INTO Contact_Us (contactName, contactEmail, contactMessage)
        VALUES ('$Name','$Email','$Message')";

        $result = mysqli_query($conn, $sql);
        if ($result)
        {
        echo "<script type='text/javascript'>alert('Message Recieved'); window.location.href = 'contactUs.php';</script>";
        }
        else
        {
        echo "<script type='text/javascript'>alert('ERROR!'); window.location.href = 'contactUs.php';</script>";
        }
    }
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="width: 100%;height: 100%;"><img src="assets/img/Picture12.png" style="height: 152px;margin-left: 15px;margin-top: 10px;">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button"
        style="height: 60px;margin-left: 200px;margin-top: -100px;background-color: rgba(255,255,255,0);">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span
                    class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-top: -50px;">
                <ul class="nav navbar-nav mr-auto">
                <li class="nav-item" role="presentation"><a class="nav-link"
                            href="cart.php">Cart</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                            aria-expanded="false" href="#">Menu</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation"
                                href="Store.php">Store</a>
                            <a class="dropdown-item" role="presentation"
                                href="contactUs.php">Contact Us</a>
                            <a class="dropdown-item" role="presentation"
                                href="aboutUs.php">About Us</a>
                    </li>
                </ul><span class="navbar-text actions"> <a class="login" href="#">Log In</a><a class="btn action-button" role="button" href="#" style="background-color: rgba(255,0,199,0.49);">Sign Up</a></span></div>
        </div>
    </nav>
    <div style="height: 10px;margin-left: 240px;margin-right: 10px;background-color: #696868;margin-top: -20px;"></div>
    
    <div class="contact-clean" style="background-color: rgba(241,247,252,0);">
        <form method="post" style="background-color: #dddddd;">
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
            <div class="form-group"><button name = "send" class="btn" type="submit" style="background-color: rgba(255,0,199,0.56);color: rgb(255,255,255);">send </button></div>
        </form>
    </div>
    <div class="footer-basic" style="background-color: rgb(237,237,237);">
        <footer>
            <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="Store.php">Home</a></li>
                <li class="list-inline-item"><a href="contactUs.php">Contact</a>
                </li>
                <li class="list-inline-item"><a href="aboutUs.php">About</a></li>
            </ul>
            <p class="text-center copyright">Just4Design © 2020</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>