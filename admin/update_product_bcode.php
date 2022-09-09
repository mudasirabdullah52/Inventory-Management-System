<?php
include 'connection.php';
     session_start();
     $id = $_SESSION['id'];
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
    
    $department = $_POST['department'];
     
    $catagory = $_POST['catagory'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total = $_POST['total'];
    // echo  $_POST['name'];
    $query = "update add_product set department ='$department', catagory ='$catagory', brand = '$brand', price = '$price', quantity = '$quantity', total = '$total' where id = $id ";
    echo $query;
	$query_run = mysqli_query($connection,$query);
    header("Location:$department.php");
    
?>
<script type="text/javascript">
	alert("product has been updated successfully....")
	window.location.href = "edit_product.php";
</script>

  