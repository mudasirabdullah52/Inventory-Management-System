<?php
include 'connection.php';
	session_start();
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
	$password = "";
	
	$query = "select * from registration where id = '$_SESSION[id]'";
	// $query = "select * from registration where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['old_password']){
		$query = "update registration set password = '$_POST[new_password]' where id = '$_SESSION[id]'";
		$query_run = mysqli_query($connection,$query);
	}
    else{
        ?>
                <script type="text/javascript">
            alert("INCORRECT OLD PASSWORD...");
            window.location.href = "change_password.php";
        </script>
<?php
    }
	?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "dashboard.php";
</script>
