<?php
include 'connection.php';
     session_start();
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
    $id =  $_SESSION['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
     
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    // echo  $_POST['name'];
    $query = "update registration set name ='$name', phone = '$phone', email = '$email', gender = '$gender', department ='$department', address = '$address', zip = '$zip' where id = $id ";
    echo $query;
	$query_run = mysqli_query($connection,$query);
    
?>
<script type="text/javascript">
	alert("profile has been updated successfully....")
	window.location.href = "update_profile.php";
</script>