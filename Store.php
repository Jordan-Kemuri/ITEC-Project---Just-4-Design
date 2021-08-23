<!DOCTYPE html>
<html style="height: 100%;width: 100%;">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Store</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="width: 100%;height: 100%;" onclick = "logoHome()">
    <img src="assets/img/Picture12.png" style="height: 156px;margin-left: 15px;margin-top: 10px;">
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
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="height: 10px;margin-left: 240px;margin-right: 10px;background-color: #696868;margin-top: -20px;"></div>
    
    <div id="products" class="row"
        style="margin-top: 80px;height: 420px;margin-right: 100px;margin-left: 100px;margin-bottom: 30px;">
        <div class="col-xl-4 offset-xl-0" style="height: 198px;width: 355px;">
            <h2>T-Shirts</h2>
            <a name ="Mens T-Shirts" onclick ="getimages(this.name)"><h3>Mens</h3></a>
            <a name ="Womens T-Shirts" onclick ="getimages(this.name)"><h3>Ladies</h3></a>
        </div>
        <div class="col-xl-4" style="height: 198px;padding-right: 15px;margin-right: 0px;">
            <h2>Hoodies</h2>
            <a name ="Mens Hoodies" onclick ="getimages(this.name)"><h3 >Mens</h3></a>
            <a name ="Womens Hoodies" onclick ="getimages(this.name)"><h3>Ladies</h3></a>
        </div>
        <div class="col-xl-4" style="height: 198px;">
        <a name ="Mugs" onclick ="getimages(this.name)"><h2>Mugs</h2></a>
        </div>
        <div class="col-xl-4">
        <a name ="Buffs" onclick ="getimages(this.name)"><h2>Buffs</h2></a>
        </div>
        <div class="col-xl-4">
        <a name ="Masks" onclick ="getimages(this.name)"><h2>Masks</h2></a>
        </div>
        <div class="col-xl-4">
        <a name ="Keychains" onclick ="getimages(this.name)"><h2>Keychains</h2></a>
        </div>
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