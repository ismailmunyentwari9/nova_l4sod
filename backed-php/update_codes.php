<?php
$conn= mysqli_connect('localhost','root','','ecw');
// receive data from form.....
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$qty=$_POST['quantity'];
$date=$_POST['date'];

// Add datas in the database...
$query=mysqli_query($conn,"UPDATE products SET product_name='$name',product_price='$price',product_quantity='$qty',product_date='$date' WHERE product_id=$id");
// check query.......
if($query){
header("location:./products.php");
}
else{
    echo"
    <script>
    alert('Failed to be inserted....')
    </script>
    ";
}

?>