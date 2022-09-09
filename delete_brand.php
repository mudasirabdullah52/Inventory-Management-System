<?php
include 'connection.php';
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
	$query = "delete from add_brand where id = $_GET[cid]";
    echo $query;
	$query_run = mysqli_query($connection,$query);
    if (!$query_run) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
    }
?>
<script type="text/javascript">
	alert("brand Deleted...");
	window.location.href = "add_brand.php";
</script>