

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
            <th>UserId</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include './includes/connect.php';
          
        $select_query = "SELECT * FROM `userinfo`";
        $result_query = mysqli_query($conn, $select_query);
        
        while ($row = mysqli_fetch_assoc($result_query)) {
              $id = $row['ID'];
              $Firstname = $row['Firstname'];
              $Lastname= $row['Lastname'];
              $Email= $row['Email'];
         echo"
         
         <tr>
         <td>$id</td>
         <td>$Firstname</td>
         <td>$Lastname</td>
         <td>$Email</td>
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