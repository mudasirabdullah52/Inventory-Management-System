<?php
	
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"blood_bank");
	$name = "";
	$blood = "";
	$address = "";
	$mobile = "";
	$email = "";

	$query = "select * from ngo_reg";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  	 
</head>
<body>
<br><br>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">

        <div class="alert alert-info " role="alert" style="text-align: center">
               <h2>  LIST OF NGO </h2>
        </div> 
		<form>
			<table class=" table table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Name:</th>
					<th>Blood Group:</th>
					<th>Address:</th>
					<th>Email:</th>
					<th>Mobile:</th>
				</tr> 

                <select>
    <option disabled selected>-- Select City --</option>
                               
                             
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
                        echo "<option value='". $row['name'] ."'>" .$row['name'] ."</option>";
						// $name = $row['name'];
						// $blood = $row['blood'];
						// $address = $row['address'];
						// $email = $row['email'];
						// $mobile = $row['mobile'];
                    }
				?>
			   <label for="floatingSelect" style="color: red; font-size: 20px;">Product Category</label>

						<!-- <tr>
							<td><?php echo $name;?></td>
							<td><?php echo $blood;?></td>
							<td><?php echo $address;?></td>
							<td><?php echo $email;?></td>
							<td><?php echo $mobile;?></td>
								</tr> -->
                                 
                              
                             
<!-- 
						<?php
					
				?> -->
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
	
</body>
</html>