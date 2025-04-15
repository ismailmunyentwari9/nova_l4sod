<?php
$conn= mysqli_connect('localhost','root','','todo-list');
$task_id=$_POST['task_id'];
$task_name=$_POST['task_name'];
$task_status=$_POST['task_status'];
$query= mysqli_query($conn,"UPDATE tasks SET task_name='$task_name',task_status='$task_status' WHERE task_id='$task_id'");
if($query){
    header("location:./index.php");
}
else{
    echo"Failed To Insert Task, Please try again..";
}


?>