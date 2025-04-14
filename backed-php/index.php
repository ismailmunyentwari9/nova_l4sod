<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <form class="border w-[70%] gap-[12px] mt-[4rem] p-5 flex flex-col rounded-lg mx-auto" action="./create.php" method="POST">
        <h1 class="text-2xl text-orange-700">Add Product</h1>
        <input class="border" type="text" name="name" placeholder="Product Name">

        <input class="border" type="text" name="price" placeholder="Product Price">

        <input class="border" type="text" name="quantity" placeholder="Product Quantity">

        <input class="border" type="date" name="date" placeholder="Product Date">
        <button class="border hover:bg-orange-900 hover:text-white" type="submit">Save</button>

    </form>
</body>
</html>