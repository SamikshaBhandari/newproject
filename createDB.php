<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if($conn){
        die("Connection Failed:".mysqli_connect_error());
}
else{
    echo"connection data";
}
$sql="CREATE DATABASE newInfo";
if(mysqli_query($conn,$sql)){
    echo"Database created successfully";
}
else{
     echo"Error creating database:".mysqli_connect_error();
}
mysqli_close($conn);
?>
