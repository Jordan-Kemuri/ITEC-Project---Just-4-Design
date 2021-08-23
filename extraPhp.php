<?php
include "dbConnect.php";
session_start();

echo '<script src="script.js">> </script>';
if (isset($_POST['register'])) {
  if (isset($_POST['laCheckbox'])) {
    $username = $_POST['username'];
    $AddressLine1 = $_POST['adLine1'];
    $AddressLine2 = $_POST['adLine2'];
    $Province = $_POST['province'];
    $Postal = $_POST['postalCode'];
    $Password = $_POST['password'];
    $Password2 = $_POST['password-repeat'];
    $sql2 = "SELECT customerEmail FROM customer WHERE customerEmail ='$username '";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $temp = $row2['customerEmail'];
    if ($username == $temp)
    {
      echo "<script type='text/javascript'>alert('That email is already in use!'); 
      window.location.href = 'index.php';
      </script>";
    }
    else {
      if ($Password == $Password2) {
      $sql = "INSERT INTO customer ( customerEmail, customerAddressLine1, customerAddressLine2, customerProvince, customerPostalCode, customerPassword)
        VALUES ('$username','$AddressLine1','$AddressLine2','$Province','$Postal','$Password')";
      $result = mysqli_query($conn, $sql);
       if ($result)
        {
      echo "<script type='text/javascript'>alert('You have been registered sussecfully'); 
      window.location.href = 'index.php';
      </script>";
        }
        else
        {
    
      echo "<script type='text/javascript'>alert('ERROR!'); 
      window.location.href = 'index.php';
      </script>";
        }
        
     } else {

      echo '<script type="text/JavaScript"> alert("Your passwords do not match");     window.location.href = "index.php";</script>';
      echo '<script type="text/JavaScript"> showSignup() </script>';
     }
    }
  }
     else {
    echo '<script type="text/JavaScript"> alert("You need to accept the aggreement");     window.location.href = "index.php";</script>';
    echo '<script type="text/JavaScript">showSignup() </script>';
     }
  }
 
echo '<script src="script.js">> </script>';
if (isset($_POST['login'])) {
    $username = $_POST['email'];
    $Password = $_POST['password'];
     $sql = "SELECT customerEmail,customerPassword FROM customer Where customerEmail ='$username' AND customerPassword='$Password' "; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $row_num= $result->num_rows;

     if ($row_num ==1) {
       
        $_SESSION['LoggedIn'] = True;
        $_SESSION['user']= $username ;
        header('Location: Store.php');
    
    }

    else{
        echo '<script> alert("Your Username/Password is incorrect");    
         window.location.href = "index.php";
         showLogin();
        </script>';
    }
}

if (isset($_REQUEST['contact'])) {
    echo 'isWorking';
    $Email= $_REQUEST['email'];
    $Name = $_REQUEST['name'];
    $Message = $_REQUEST['message'];

     $sql = "INSERT INTO contact_us (contactName,contactEmail,contactMessage)
        VALUES ('$Email','$Name','$Message')";
        
      $result = mysqli_query($conn, $sql);
      echo '<script> alert("Your Message was received.")</script>';
      header('Location: index.php');
         /* info@just4design.co.za*/
    }
     
    if (isset($_POST['buttonCart'])) {

      $select1 =$_POST['colour1'];
      $select2 =$_POST['colour2'];
      $select3 =$_POST['size'];
     
      $productDetails=  $select1.", ". $select2. ", ".$select3;
    
     
      $productID= $_SESSION['productName'];
   
      array_push( $_SESSION['Cart'], $productID);
      array_push( $_SESSION['CartDetails'], $productDetails);
     
     
  
  
  
  header('Location: Store.php');
  }
    
  
?>