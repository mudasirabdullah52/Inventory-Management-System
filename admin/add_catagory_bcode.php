<?php
  include 'connection.php';
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
	$query = "insert into add_catagory values(null,'$_POST[catagory]')";
	$query_run = mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
	alert("Catagory has been Added successfully....You may Add another.")
	window.location.href = "add_catagory.php";
</script>