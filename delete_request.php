<?php
include 'connection.php';
session_start();
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
	$query = "delete from request where id = $_GET[cid]";
    echo $query;
	$query_run = mysqli_query($connection,$query);
    if (!$query_run) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
    }
    // header("Location:$_SESSION[department].php");
?>
<script type="text/javascript">
	alert("Request Deleted...");
	window.location.href = "view_request.php";
</script>