<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Todo-List</title>
</head>
<body class="bg-white">
    <section class="py-[8rem] border border-white bg-green-900 w-[70%] mx-auto mt-4 rounded-xl">

        <!-- Form with header -->
        <?php
           $conn= mysqli_connect('localhost','root','','todo-list');
           $edit_id=$_GET['edit_id'];
           $query= mysqli_query($conn,"SELECT * FROM tasks WHERE task_id=$edit_id");
           while($record=mysqli_fetch_array($query)){
           
           
           ?>
         <form class="flex flex-col items-center gap-4" action="./edit.php" method="POST">
            <h1 class="text-white text-7xl">Edit Your Todo-List</h1>
            <!-- input And Button container  -->
           <div class="flex flex-col gap-3 items-between  w-[80%]">
           <input hidden name="task_id" class="text-white font-bold w-[90%] text-2xl p-2 rounded-xl border border-white " type="text" value='<?php echo $record['task_id']?>'>

            <input name="task_name" class="text-white font-bold w-[90%] text-2xl p-2 rounded-xl border border-white " type="text" value='<?php echo $record['task_name']?>'>

            
            <select name="task_status" class="text-white font-bold w-[90%] text-2xl p-2 rounded-xl border border-white " type="text">
                <option value="PENDING..."> PENDING...</option>
                <option value="COMPLITED.." class="hover:bg-orange-400">COMPLITED</option>
            </select>
            <button class="text-white border-2 border-white text-4xl p-3 py-2 rounded-2xl w-[50%] bg-orange-400">Add</button>
           </div>
         </form>

         <?php }?>
       

    </section>
</body>
</html>