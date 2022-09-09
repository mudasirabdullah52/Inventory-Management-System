<?php
    include 'connection.php';
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
	$query = "insert into allotment_list values(null,'$_POST[name]','$_POST[department]','$_POST[catagory]','$_POST[brand]')";
	$query_run = mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
	alert("Product has been alloted successfully.... ")
	window.location.href = "product_allotment_form.php";
</script>