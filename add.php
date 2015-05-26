<?php

$customer_number = $_POST['customer_number'];
$customer_name = $_POST['customer_name'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$address_line2 = $_POST['address_line2'];
$city = $_POST['city'];
$state = $_POST['state'];
$postal_c = $_POST['postal_c'];
$country = $_POST['country'];
$emp_num = $_POST['emp_num'];
$limit = $_POST['limit'];
 

$host = "localhost";       
$db = new mysqli("localhost", "root", "", "classicmodels");

if (!mysqli_connect_errno()) {
$db ->select_db("classicmodels");

$query = "INSERT INTO `customers`(`customerNumber`,`customerName`, `contactLastName`,`contactFirstName` ,`phone`, `addressLine1`, `addressLine2`, `city`,`state`,`postalCode`, `country`, `salesRepEmployeeNumber`, `creditLimit`) VALUES('$customer_number','$customer_name' , '$first_name', '$last_name','$phone','$address','$address_line2','$city','$state','$postal_c', '$country','$emp_num','$limit')";
$r = $db->query("SET FOREIGN_KEY_CHECKS=0;");

if($res = $db->query("$query")){
   echo "Данные добавлены!";
 }  
  else {
      echo mysqli_error($db);
  }
$db->close();  
}
else {
echo '<p>Fail!</p>';
    }
?> 
    

