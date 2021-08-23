<?php
include "extraPhp.php";
$productName= $_GET['name'];
    $_SESSION['productName']= $productName;
    $Login = $_SESSION['LoggedIn'];
    $sql ="SELECT productDescription, productValue From product WHERE  productName='$productName' ";
    $result =mysqli_query($conn,$sql);
    $row  =  mysqli_fetch_array($result);
      $Description =$row['productDescription'];
      $productValue=$row['productValue'];

      switch ($productName){
        case "Mens T-Shirts" : 
            $imgSrc= 'assets\img\Mens T-Shirt Front.jpg';
            $imgSrc2 = 'assets\img\Mens T-Shirt Back.jpg';
         break;
    
         case "Womens T-Shirts" : 
            $imgSrc=  'assets\img\Womens T-Shirt Front.PNG';
            $imgSrc2 = 'assets\img\Womens T-Shirt Back.PNG';
         break;
    
         case "Mens Hoodies" : 
            $imgSrc=  'assets\img\Mens Hoodie Front.PNG';
            $imgSrc2 = 'assets\img\Mens Hoodie Back.PNG';
         break;
    
         case "Womens Hoodies" : 
            $imgSrc= 'assets\img\Womens Hoodie Front.jpg';
            $imgSrc2 = 'assets\img\Womens Hoodie Back.jpg';
         break;
    
         case "Buffs" : 
            $imgSrc= 'assets\img\Buff 1.jpg';
            $imgSrc2 = 'assets\img\Buff 2.jpg';
         break;
    
         case "Masks" : 
            $imgSrc=  'assets\img\Mask 1.jpg';
            $imgSrc2 = 'assets\img\Mask 2.jpg';
         break;
    
         case "Keychains" : 
            $imgSrc=  'assets\img\Keychain 1.jpg';
            $imgSrc2 = 'assets\img\Keychain 2.jpg';
         break;
    
         case "Mugs" : 
            $imgSrc= 'assets\img\Mug 1.PNG';
            $imgSrc2 = 'assets\img\Mug 2.jpg';
         break;
   
       }
      ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo  $productName; ?></title>
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
    <h1 style="margin-left: 50px;margin-top: 58px;"><?php echo  $productName; ?></h1>
    
    <div class="contact-clean" style="background-color: rgba(241,247,252,0);height: 750px;padding-top: 25px;">
        <p style="width: 600px;margin-top: 30px;margin-left: 400px;height: 150px;">
         Price: R<?php echo  $productValue; ?><br/><?php echo  $Description; ?></p>
        <form method = "post" style="margin-left: 50px;margin-top: -200px;height: 575px;width: 302px;padding-top: 20px;background-color: #dddddd;">
        <div class="carousel slide" data-ride="carousel" id="carousel-1" style="margin-right: 10px;margin-left: 10px;margin-bottom: 10px">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block" src="<?php echo $imgSrc?>" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="<?php echo $imgSrc2?>" alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
    </div>
            <select
                class="form-control" name = "colour1" style="margin-bottom: 10px;">
                <optgroup label="Choose your primary colour">
                    <option value="Black" selected="">Black</option>
                    <option value="Blue">Blue</option>
                    <option value="Red">Red</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Green">Green</option>
                </optgroup>
            </select>

            <select
                class="form-control" name = "colour2" style="margin-bottom: 10px;">
                <optgroup label="Choose your secondary colour">
                <option value="Black" selected="">Black</option>
                    <option value="Blue">Blue</option>
                    <option value="Red">Red</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Green">Green</option>
                </optgroup>
            </select>

            <select class="form-control" name="size"style="margin-bottom: 10px;">
                <optgroup label="Choose your size">
                <option value="SS" selected="">SS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXXL">XXXL</option>
                </optgroup>
            </select>
                    <h5>Upload Design</h5><input type="file" style="margin-bottom: 15px;">
                    <button name = "buttonCart" class="btn border rounded-0" type="submit" style="background-color: rgba(255,0,199,0.51);color: rgb(255,255,255);">Add to cart</button>
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