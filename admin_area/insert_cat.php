<?php 
include('./includes/connect.php');
if(isset($_POST['insert_cat'])){
$category_title=$_POST['cat_title'];


//select data from databse


$select_query="SELECT * FROM `categories` WHERE category_title='$category_title'";
$result_select=mysqli_query($conn,$select_query);
$number=mysqli_num_rows($result_select); //Error a raha hai

if($number>0){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Category $category_title Already Exist!</strong> Cannot Insert
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
    </button>
</div>";

}

else{
$insert_query="INSERT INTO `categories` (category_title) VALUES ('$category_title')";
$result=mysqli_query($conn,$insert_query);
if($result){
    echo "<script>alert('$category_title State Inserted Successfully')</script>";    }
    }
}





?>



<div class="row">
<div class="container col-12">
<form action=" " method="post" >
<span><h2 class="text-center">Insert Categories</h2></span>
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-primary" id="basic-addon1">
            <i class="fa fa-solid fa-receipt"></i>
        </span>
        <input Required type="text"  class="form-control" placeholder="Insert categories" name="cat_title">
    </div>
    <div class="input-group w-10 mb-3">

        <!-- <input type="submit" class="form-control bg-primary"  name="insert_cat"
            value="Insert categories" > -->
            <button class="bg-primary p-3 border-0 my-3" name="insert_cat" >Insert Categories</button>
    </div>
</form>



</div>

<div class="container col">
    
 
   
<table id="myTable" class="display">
  
    <thead>
        <tr>
           
            <th class="">Categories</th>
            
        </tr>
    </thead>
    <tbody>
        <?php 
        include './includes/connect.php';
          
        $select_query = "SELECT * FROM `categories`";
        $result_query = mysqli_query($conn, $select_query);
        
        while ($row = mysqli_fetch_assoc($result_query)) {
          
              $category_title = $row['category_title'];
           
         echo"
         
         <tr>
         
         <td>$category_title</td>
         </tr> ";
          
        }
        
        
        ?>
        </tbody>
      
    </table>



</div>

</div>