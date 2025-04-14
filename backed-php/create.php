<?php
$conn= mysqli_connect('localhost','root','','ecw');
// receive data from form.....

$name=$_POST['name'];
$price=$_POST['price'];
$qty=$_POST['quantity'];
$date=$_POST['date'];

// Add datas in the database...
$query=mysqli_query($conn,"INSERT INTO products VALUES(Null,'$name','$price','$qty','$date')");
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