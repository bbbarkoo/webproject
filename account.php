<?php
$host="51.105.242.112"; // Host name 
$username="bbbarkoo"; // Mysql username 
$password="password"; // Mysql password 
$db_name="arabamcom"; // Database name 
// Connect to server and select databse. 
$dbconn = mysqli_connect($host, $username, $password)or die("cannot connect"); 
mysqli_select_db($dbconn, $db_name)or die("cannot select DB");


if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];
        $password = $_POST['password'];
    
        $sql = "INSERT INTO `Customers` (`customerName`, `customerLastName`, 'phonenumber', 'email', 'birthdate','customerAddress','password') 
        VALUES ('$name', '$lastname', '$phone', '$email', '$birthdate' , '$address', '$password')";
    $query = mysqli_query($db_conn, $sql);

    if ($query) {
      echo 'New data inserted successfully. <a href="./index.html">Go Back</a>';
  } else {
      echo "Failed to insert new data.";
  }
}


/**
* This message occurs when a user tries to access Insert.php without -
* the required method and credentials.
*/
echo '404 Page Not Found. <a href="./index.html">Go Home</a>';
?>