<?php
include './includes/connect.php';
if (isset($_POST['insert_state'])) {
    $state_title = $_POST['state_title'];

//select data from databse

    $select_query = "SELECT * FROM `state` WHERE state_title='$state_title'";
    $result_select = mysqli_query($conn, $select_query);
    $number = mysqli_num_rows($result_select); //Error a raha hai

    if ($number > 0) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Brand $state_title Already Exist!</strong> Cannot Insert
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>";

    } else {
        $insert_query = "INSERT INTO `state` (state_title) VALUES ('$state_title')";
        $result = mysqli_query($conn, $insert_query);
        if ($result) {
            echo "<script>alert('$state_title State Inserted Successfully')</script>";
        }
    }
}



?>

<div class="row">
    <div class="conatiner col-8">
<h2 class="text-center">Insert State</h2>

<form action=" " method="post">
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-primary" id="basic-addon1">
            <i class="fa fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" placeholder="Insert your brand name" required=required name="state_title">
    </div>
    <div class="input-group w-10 mb-3">

        <!-- <input type="submit" class="form-control bg-primary"  name="insert_cat"
            value="Insert categories" > -->
        <button class="bg-primary p-3 border-0 my-3 " type="submit" name="insert_state">Insert State</button>
    </div>
</form>


</div>
<div class="container col-4">
       
<table id="myTable" class="display">
  
  <thead>
      <tr>
         
          <th class="">State/Brand</th>
          
      </tr>
  </thead>
  <tbody>
      <?php 
      include './includes/connect.php';
        
      $select_query = "SELECT * FROM `state`";
      $result_query = mysqli_query($conn, $select_query);
      
      while ($row = mysqli_fetch_assoc($result_query)) {
        
            $state_title = $row['state_title'];
         
       echo"
       
       <tr>
       
       <td>$state_title</td>
       </tr> ";
        
      }
      
      
      
      ?>
      </tbody>
    
  </table>
  

</div>
</div>