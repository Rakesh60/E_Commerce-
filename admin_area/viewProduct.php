

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    
<table id="myTable" class="display">
  
    <thead>
        <tr>
            <th>Product Id</th>
            <th>Product title</th>
            <th>Product Description</th>
            <th>Product Price</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include './includes/connect.php';
          
        $select_query = "SELECT * FROM `products`";
        $result_query = mysqli_query($conn, $select_query);
        
        while ($row = mysqli_fetch_assoc($result_query)) {
              $product_id = $row['product_id'];
              $product_title = $row['product_title'];
              $product_description = $row['product_description'];
              $product_price = $row['product_price'];
         echo"
         
         <tr>
         <td>$product_id</td>
         <td>$product_title</td>
         <td> $product_description</td>
         <td>&#8377; $product_price</td>
     </tr>
     
         ";
          
        }
        
        
        ?>
        </tbody>
      
    </table>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
   <script>
   $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
    
</body>
</html>