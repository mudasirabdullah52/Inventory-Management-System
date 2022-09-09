<?php
 include 'connection.php';
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
	$query = "insert into admin values(null,'$_POST[name]','$_POST[phone]','$_POST[email]','$_POST[password]','$_POST[gender]','$_POST[department]','$_POST[address]','$_POST[zip]')";
	$query_run = mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "index.php";
</script>