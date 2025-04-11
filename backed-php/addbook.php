<?php
$conn= mysqli_connect("localhost","root","","school-library");

// Grap values from form ..........
$type=$_POST['type'];
$title=$_POST['title'];
$author=$_POST['author'];

$sql=mysqli_query($conn,"INSERT INTO books VALUE  (NULL,'$type','$title','$author')");

if($sql){
 header("location:./viewbooks.php");
}
else{
    echo "<script> alert('data failed to be inserted')</script>";
}


?>