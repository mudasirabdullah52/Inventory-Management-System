<?php
    include 'connection.php';
     session_start();
     $id = $_SESSION['id'];
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
    
    $department = $_POST['department'];
    $hod_name = $_POST['hod_name'];
    $email = $_POST['email'];
     
    $phone = $_POST['phone'];
    $catagory = $_POST['catagory'];
    $brand = $_POST['brand'];
    $quantity = $_POST['quantity'];
    // echo  $_POST['name'];
    $query = "update request set department ='$department', hod_name = '$hod_name', email = '$email', phone = '$phone', catagory ='$catagory', brand = '$brand', quantity = '$quantity' where id = $id ";
    echo $query;
	$query_run = mysqli_query($connection,$query);
    // header("Location:$_SESSION[department].php");
    
?>
<script type="text/javascript">
	alert("Request has been updated successfully....")
	window.location.href = "manage_request.php";
</script>

  