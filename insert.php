<?php
//include,require,it include the file
include'connect.php';
//get data from form
$n=$_POST['name'];
$a=$_POST['address'];
$p=$_POST['phone'];
//sql query to insert data
$sql="INSERT INTO student(name,address,phone)VALUES('$n','$a','$p')";
if(mysqli_query($conn,$sql)){  
}