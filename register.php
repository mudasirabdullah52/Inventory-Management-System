<?php
	include 'connection.php';
 
	$query = "insert into registration values(null,'$_POST[name]','$_POST[phone]','$_POST[email]','$_POST[password]','$_POST[gender]','$_POST[department]','$_POST[address]','$_POST[zip]')";
	$query_run = mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
	alert("Registration successfully....You may login now.")
	window.location.href = "index.php";
</script>