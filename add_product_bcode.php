<?php
	include 'connection.php';
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
	$query = "insert into add_product values(null,'$_POST[department]','$_POST[catagory]','$_POST[brand]','$_POST[price]' ,'$_POST[quantity]' ,'$_POST[total]')";
	$query_run = mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
	alert("Product has been added successfully....You may add the another.")
	window.location.href = "add_product.php";
</script>