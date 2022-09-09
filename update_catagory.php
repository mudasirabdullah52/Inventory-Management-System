<?php
	include 'connection.php';
    session_start();
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
    $id =  $_POST['id'];
    $catagory = $_POST['catagory'];
	$query = "update add_catagory set catagory = '$catagory'  where id = '$id' ";
    echo $query;
	$query_run = mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
	alert("Catagory has been updated successfully....")
	window.location.href = "add_catagory.php";
</script>