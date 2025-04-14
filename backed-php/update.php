<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
<?php
   $conn= mysqli_connect('localhost','root','','ecw');
   $update_id=$_GET['update_id'];
   $query=mysqli_query($conn,"SELECT * FROM products WHERE product_id=$update_id");
   while($records= mysqli_fetch_array($query)){

   ?>
    <form class="border w-[70%] gap-[12px] mt-[4rem] p-5 flex flex-col rounded-lg mx-auto" action="./update_codes.php" method="POST">
        <h1 class="text-2xl text-orange-700">EditProduct</h1>
        <input class="border" type="text" name="id" value='<?php echo $records['product_id']?>' hidden>
        <input class="border" type="text" name="name" value='<?php echo $records['product_name']?>'>

        <input class="border" type="text" name="price" value='<?php echo $records['product_price']?>'>

        <input class="border" type="text" name="quantity" value='<?php echo $records['product_quantity']?>'>

        <input class="border" type="date" name="date" value='<?php echo $records['product_date']?>'>
        <button class="border hover:bg-orange-900 hover:text-white" type="submit">Save</button>

    </form>

    <?php }?>
</body>
</html>