
    <?php 
        include "extraPhp.php";

        $_SESSION['Cart']=array();
        $_SESSION['CartDetails']=array();
        $_SESSION['LoggedIn']= FALSE;
  
   ?>
<!DOCTYPE html>
<html style="height: 100%;width: 100%;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body onload="hideElements()" style="width: 100%;height: 100%;" onclick = "logoHome()">
    <img src="assets/img/Picture12.png" style="height: 156px;margin-left: 15px;margin-top: 10px;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button"
        style="height: 60px;margin-left: 200px;margin-top: -100px;background-color: rgba(255,255,255,0);">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span
                    class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-top: -50px;">
                <ul class="nav navbar-nav mr-auto">
                    
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                            aria-expanded="false" href="#">Menu</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation"

                                href="contactUs.php">Contact Us</a>
                            <a class="dropdown-item" role="presentation"
                                href="aboutUs.php">About Us</a>
                        </div>
                    </li>
                </ul><span class="navbar-text actions">
                    <a> <button class="btn" role="button" onclick="showLogin()"
                        style="background-color: rgba(255,0,199,0.49);">Log In</button> </a>
                    <a> <button class="btn" role="button" onclick="showSignUp()"
                        style="background-color: rgba(255,0,199,0.49);">Sign Up</button> </a>
                </span>
            </div>
        </div>
    </nav>
    <div style="height: 10px;margin-left: 240px;margin-right: 10px;background-color: #696868;margin-top: -20px;"></div>
    <div id="login" class="login-clean" style="background-color: rgba(241,247,252,0);">
        <form method="post" style="background-color: rgb(221,221,221);">
            <h3 class="text-center" style="margin-bottom: 15px;">Log In</h3>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group"><button name = "login" class="btn btn-block" type="submit"
                    style="background-color: rgba(255,0,199,0.49);color: rgb(255,255,255);">Log In</button></div><a
                class="forgot" href="#">Forgot your email or password?</a>
        </form>
    </div>
    <div id="register" class="register-photo" style="background-color: rgba(241,247,252,0);">
        <div class="form-container">
            <form method="post" style="background-color: #dddddd;">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <input name ="adLine1" class="form-control" type="text" placeholder="Address Line 1" style="margin-bottom: 15px;">
                <input name ="adLine2" class="form-control" type="text" placeholder="Address Line 2" style="margin-bottom: 15px;">
                <input name ="province" class="form-control" type="text" placeholder="Province" style="margin-bottom: 15px;">
                <input name ="postalCode" class="form-control" type="text" style="width: 50%;margin-bottom: 10px;" value="Postal Code">
                <div  class="form-group"><input name = "username" class="form-control" type="email" name="email" placeholder="Email"></div>
                <div  class="form-group"><input class="form-control" type="password" name="password"
                        placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat"
                        placeholder="Password (repeat)"></div>
                <div class="form-group">
                    <div  class="form-check"><label class="form-check-label"><input name = "laCheckbox" class="form-check-input"
                                type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button name= "register" class="btn btn-block" type="submit"
                        style="background-color: rgba(255,0,199,0.49);color: rgb(255,255,255);">Sign Up</button></div><a
                    class="already" href="#">You already have an account? Login here.</a>
            </form>
        </div>
    </div>

    <div class="footer-basic" style="background-color: rgb(237,237,237);">
        <footer>
            <ul class="list-inline text-center">
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