<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>View Books</title>
</head>
<body>
   <table class="border mx-auto mt-5">
    <tr class="border">
        <th class="border">Book ID</th>
        <th class="border">Book Type</th>
        <th class="border">Book Title</th>
        <th class="border">Book Author</th>
    </tr>
    <?php
    $conn= mysqli_connect("localhost","root","","school-library");
    $sql=mysqli_query($conn,"SELECT * FROM books");
    while($row=mysqli_fetch_array($sql)){
    
    ?>
    <tr class="border">
        <td class="border"><?php echo $row['book_id']?></td>
        <td class="border"><?php echo $row['book_type']?></td>
        <td class="border"><?php echo $row['book_title']?></td>
        <td class="border"><?php echo $row['book_author']?></td>
    </tr>
    <?php }?>
   </table>
</body>
</html>