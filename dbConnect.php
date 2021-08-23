<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "itecDB";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: ". $conn-> error);


