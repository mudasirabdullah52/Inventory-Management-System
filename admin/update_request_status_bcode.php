<?php
    include 'connection.php';
     session_start();
     $id = $_SESSION['id'];
	 
   
    $status = $_POST['status'];
     
    $query = "update request set status ='$status'  where id = $id ";
    echo $query;
	$query_run = mysqli_query($connection,$query);
    $data = "select department from request where id=$id";
    $query_run = mysqli_query($connection,$data);
     while($row = mysqli_fetch_assoc($query_run)){
         $dep = $row['department'];
        $department= strtolower($dep);
        
          
     }
     ?>
     <script type="text/javascript">
        alert("Request has been updated successfully....")
    </script>
<?php
   
      $department= $department."_request";
     
    header("Location:$department.php");
    
?>

  