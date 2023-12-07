<?php  
include 'admin_area\includes\connect.php';
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo "<script>window.location.href='http://localhost/ecommerce/'</script>"; //to redirect back to "index.php" after logging out

?>