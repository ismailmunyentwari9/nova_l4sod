<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Add Book</title>
</head>
<body>
    <form action="./addbook.php" method="POST" class="flex flex-col border w-[70%] mx-auto mt-[13%] gap-4 p-2 rounded">
        <h1 class="font-bold text-orange-300 text-3xl">Add Book</h1>
        <input class="border w-[95%] rounded-lg" type="text"  name="type" placeholder="Book Type" required>
        <input class="border w-[95%] rounded-lg" type="text"  name="title" placeholder="Book Title" required>
        <input class="border w-[95%] rounded-lg" type="text"  name="author" placeholder="Book Author" required>
        <button class="border border-orange-500 hover:bg-orange-400 hover:text-white" type="submit">Save Book</button>
    </form>
</body>
</html>