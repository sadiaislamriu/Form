<?php

session_start();
header("location:index.html");

    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cnumber = $_POST['cnumber'];
	$country = $_POST['country'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$about = $_POST['about'];
if (!empty($fname) || !empty($lname) || !empty($email) || !empty($cnumber) || !empty($country) || !empty($address) || !empty($gender) !empty($about)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "opcodespace";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From ContactForm Where email = ? Limit 1";
     $INSERT = "INSERT Into ContactForm (fname, lname, email, cnumber, country, address, gender, about) values($fname, $lname, $email, $cnumber, $country, $address, $gender, $about)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssissss", $fname, $lname, $email, $cnumber, $country, $address, $gender, $about);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>