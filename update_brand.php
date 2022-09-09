<?php
include 'connection.php';
    session_start();
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
    $id =  $_POST['id'];
    $brand = $_POST['brand'];
	$query = "update add_brand set brand = '$brand'  where id = '$id' ";
    echo $query;
	$query_run = mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
	alert("Brand has been Updated successfully....")
	window.location.href = "add_brand.php";
</script>