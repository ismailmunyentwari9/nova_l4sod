<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
  <table class="border mt-[3rem] mx-auto">
    <!-- table  header row -->
    <tr class="border">
        <th class="border">ID</th>
        <th class="border">Product Name</th>
        <th class="border">Product Price</th>
        <th class="border">Product Quantity</th>
        <th class="border">Imported Date</th>
        <th class="border" colspan=2>Options</th>
    </tr>
    <!-- table data row -->
    
   <?php
   $conn= mysqli_connect('localhost','root','','ecw');
   $query=mysqli_query($conn,"SELECT * FROM products");
   while($records= mysqli_fetch_array($query)){

   ?>
   <tr > 
        <td class="border"><?php echo $records['product_id']?></td>
        <td class="border"><?php echo $records['product_name']?></td>
        <td class="border"><?php echo $records['product_price']?></td> 
        <td class="border"><?php echo $records['product_quantity']?></td>
        <td class="border"><?php echo $records['product_date']?></td>
        <td class="border"><a href="./delete.php?delete_id=<?php echo $records['product_id']?>"><button>DELETE 🗑</button></a></td>
        <td class="border"><a href="./update.php?update_id=<?php echo $records['product_id']?>"><button>UPDATE ✏</button></a></td>
        
    </tr>

    <?php  }?>
    
  </table>  
</body>
</html>