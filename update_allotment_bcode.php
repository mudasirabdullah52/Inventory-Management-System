<?php
    include 'connection.php';
     session_start();
     $id = $_SESSION['id'];
     echo $id;
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
    $name = $_POST['name'];
    $department = $_POST['department'];
     
    $catagory = $_POST['catagory'];
    $brand = $_POST['brand'];
   
    
    // echo  $_POST['name'];
    $query = "update allotment_list set  name ='$name', department ='$department', catagory ='$catagory', brand = '$brand' where id = $id ";
    echo $query;
	$query_run = mysqli_query($connection,$query);
    // header("Location:$_SESSION[department].php");
    
?>
<script type="text/javascript">
	alert("Allotment List  has been updated successfully....")
	window.location.href = "manage_allotment.php";
</script>

  