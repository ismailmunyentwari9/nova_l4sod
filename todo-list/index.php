<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Todo-List</title>
</head>
<body class="bg-white">
<form class="flex flex-col items-center gap-4" action="./addList.php" method="POST">
            <h1 class="text-white text-7xl">Create Your Todo-List</h1>
            <!-- input And Button container  -->
           <div class="flex gap-3 justify-between  w-[80%]">
            <input name="task_name" class="text-white font-bold w-[90%] text-2xl p-2 rounded-xl border border-white " type="text" placeholder="What Are Your Tasks Today?">
            <button class="text-white border-2 border-white text-4xl p-3 py-2 rounded-2xl">Add</button>
           </div>
         </form>
            
          </div>

    </section>
</body>
</html>