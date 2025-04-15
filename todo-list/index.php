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
         <form class="flex flex-col items-center gap-4" action="./addList.php" method="POST">
            <h1 class="text-white text-7xl">Create Your Todo-List</h1>
            <!-- input And Button container  -->
           <div class="flex gap-3 justify-between  w-[80%]">
            <input name="task_name" class="text-white font-bold w-[90%] text-2xl p-2 rounded-xl border border-white " type="text" placeholder="What Are Your Tasks Today?">
            <button class="text-white border-2 border-white text-4xl p-3 py-2 rounded-2xl">Add</button>
           </div>
         </form>
         <!-- Taks Container -->
          <div class="taks-container gap-3 mt-[10rem]  flex flex-col items-center w-full">
           

           <?php
           $conn= mysqli_connect('localhost','root','','todo-list');
           $query= mysqli_query($conn,"SELECT * FROM tasks");
           while($record=mysqli_fetch_array($query)){
           
           
           ?>
            <!-- Single task -->
            <div class="task border-3 justify-between w-[80%] rounded-2xl border-orange-500 flex p-4">
                <p class="text-white text-3xl font-bold "><?php echo $record['task_name']?></p>
                <p class="flex gap-10">

                <!------------ Update Button-------------->

                    <a href="./update.php?edit_id=<?php echo $record['task_id']?>"><button class="text-green-400 text-3xl font-bold cursor-pointer">Edit</button></a>

                
                    <span class="text-orange-500 text-3xl font-bold "><?php echo $record['task_status']?></span>


                    <!------------ Delete button---------- -->
                    <a href="./delete.php?delete_id=<?php echo $record['task_id']?>"><button class="cursor-pointer text-red-500 text-3xl font-bold ">Delete</button></a>
                </p>

            </div>



<?php }?>
            
          </div>

    </section>
</body>
</html>