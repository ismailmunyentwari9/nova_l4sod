<?php
$conn= mysqli_connect('localhost','root','','todo-list');
$task_name=$_POST['task_name'];
$query= mysqli_query($conn,"INSERT INTO tasks(task_name) VALUES('$task_name')");
if($query){
    header("location:./index.php");
}
else{
    echo"Failed To Insert Task, Please try again..";
}


?>