
<?php
include "extraPhp.php";

$username = $_SESSION['user'];
$sql = "SELECT * FROM customer WHERE customerEmail='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$AddressLine1 = $row['customerAddressLine1'];
$AddressLine2 = $row['customerAddressLine2'];
$Province = $row['customerProvince'];
$Postal = $row['customerPostalCode'];

if (isset($_POST['buttonPlaceorder'])) {
    $username = $_SESSION['user'];
    $Total =$_SESSION['Total'];
    
        
        $sql2 = "INSERT INTO cart (customerEmail, orderTotal)
          VALUES ('$username', '$Total')";
                $result2= mysqli_query($conn, $sql2); 

                $sql4 = " SELECT * FROM cart WHERE orderNumber =(SELECT max(orderNumber) FROM cart)";
                $result4= mysqli_query($conn, $sql4); 
                $row4 = mysqli_fetch_array($result4);
                $orderNum = $row4['orderNumber'];

                $cartdetails=$_SESSION['CartDetails'] ;
                $cart=$_SESSION['Cart'] ;
                $cartsize = sizeof($cart);

                for ($x = 0; $x <= $cartsize; $x++) {
                    $cartTemp = $cart[$x];
                    $detailsTemp = $cartdetails[$x];
                    $sql5 = "INSERT INTO cartDetails (orderNumber, productName, details)
                    VALUES ('$orderNum', '$cartTemp', '$detailsTemp')";
                    $result5 = mysqli_query($conn, $sql5);
                  }

                echo "<script type='text/javascript'>alert('Your order was placed, order number: $orderNum'); 
                window.location.href = 'index.php';
                </script>";

      session_unset();
}
     
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cart</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="width: 100%;height: 100%;"><img src="assets/img/Picture12.png" style="height: 152px;margin-left: 15px;margin-top: 10px;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="height: 60px;margin-left: 200px;margin-top: -100px;background-color: rgba(255,255,255,0);">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-top: -50px;">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="C:\xampp\htdocs\ITEC Deliverable 2\cart.html">Cart</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Menu</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="C:\xampp\htdocs\ITEC Deliverable 2\index.html">Store</a>
                            <a class="dropdown-item" role="presentation" href="C:\xampp\htdocs\ITEC Deliverable 2\contactUs.html">Contact Us</a>
                            <a class="dropdown-item" role="presentation" href="C:\xampp\htdocs\ITEC Deliverable 2\aboutUs.html">About Us</a>
                        </div>
                    </li>
                </ul><span class="navbar-text actions"> <a class="login" href="#">Log In</a><a class="btn action-button" role="button" href="#" style="background-color: rgba(255,0,199,0.49);">Sign Up</a></span></div>
        </div>
    </nav>
    <div style="height: 10px;margin-left: 240px;margin-right: 10px;background-color: #696868;margin-top: -20px;"></div>
    <div class="contact-clean" style="background-color: rgba(241,247,252,0);height: 649px;margin-top: 40px;">
        <h2 class="text-left" style="margin-left: 450px;">Your Cart</h2>
        <p style="margin-left: 450px;width: 400px;height: 350px;">
        <?php 
        $Total= 0;
        $cart=$_SESSION['Cart'] ;
        
            foreach (($cart) as $key=>$productName) {
                $sql3 = "SELECT * FROM product WHERE productName ='$productName'";
                $result3 = mysqli_query($conn, $sql3);
                $row3 = mysqli_fetch_array($result3);
                $productValue = $row3['productValue'];
                
                $Total= $Total +$productValue;
                $_SESSION['Total'] =$Total;
              
             echo " {$productName} R{$productValue}";
             echo "<br/>";} 
    
        ?>
        </p>
        <h1 style="margin-left: 50px">Total: R<?php echo $Total; ?></h1>
        <form method = "post" style="margin-top: -490px;margin-left: 40px;width: 350px;background-color: #dddddd;padding-top: 18px;">
            <h5>Contact Details</h5>
            <input class="form-control" type="text" style="margin-bottom: 10px;" value="<?php echo $username; ?>" inputmode="email">
            <h5>Billing Address</h5><input class="form-control" type="text" style="margin-bottom: 10px;" value="<?php echo $AddressLine1; ?>">
            <input class="form-control" type="text" style="margin-bottom: 10px;" value="<?php echo $AddressLine2; ?>">
            <input class="form-control" type="text"style="margin-bottom: 10px;" value="<?php echo $Province; ?>">
                <input class="form-control" type="text" value="<?php echo $Postal; ?>" style="width: 150px;margin-bottom: 15px;">
                <button name ="buttonPlaceorder" class="btn" type="submit" style="background-color: rgba(255,0,199,0.46);color: rgb(255,255,255);">Place Order</button></form>
    </div>
    <div class="footer-basic" style="background-color: rgb(237,237,237);">
        <footer>
            <ul class="list-inline text-center">
                <li class="list-inline-item"><a href="C:\xampp\htdocs\ITEC Deliverable 2\index.html">Home</a></li>
                <li class="list-inline-item"><a href="C:\xampp\htdocs\ITEC Deliverable 2\contactUs.html">Contact</a></li>
                <li class="list-inline-item"><a href="C:\xampp\htdocs\ITEC Deliverable 2\aboutUs.html">About</a></li>
            </ul>
            <p class="text-center copyright">Just4Design © 2020</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>