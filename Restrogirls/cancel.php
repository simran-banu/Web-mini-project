<?php
//including the database connection file
$con = mysqli_connect("localhost","root","","restrogirls");

//getting id of the data from url
$bid = $_GET['bid'];

//deleting the row from table
$result = mysqli_query($con,"update check_status set status='Cancelled' where bid='$bid' ");

//redirecting to the display page (index.php in our case)
header("Location:view_customer.php");
?>

