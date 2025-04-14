<?php
$conn= mysqli_connect('localhost','root','','ecw');
$delete_id=$_GET['delete_id'];
$query=mysqli_query($conn,"DELETE FROM products WHERE product_id=$delete_id");
if($query){
    header("location:./products.php");
}

else{
    echo"
    <script> alert('Failed To delete')</script>
    ";
}    ?>