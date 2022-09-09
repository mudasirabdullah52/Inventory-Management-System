<?php
	include 'connection.php';
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
	$query = "insert into request values(null,'$_POST[department]','$_POST[hod_name]','$_POST[email]','$_POST[phone]','$_POST[catagory]','$_POST[brand]','$_POST[quantity]', 'unread')";
	$query_run = mysqli_query($connection,$query);
    echo $query;
?>
<script type="text/javascript">
	alert("Product has been added successfully....You may add the another.")
	window.location.href = "request.php";
</script>