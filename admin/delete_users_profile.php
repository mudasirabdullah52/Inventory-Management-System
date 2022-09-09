<?php
include 'connection.php';
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
	$query = "delete from registration where id = $_GET[cid]";
    echo $query;
	$query_run = mysqli_query($connection,$query);
    if (!$query_run) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
    }
?>
<script type="text/javascript">
	alert("User Deleted...");
	window.location.href = "manage_users.php";
</script>