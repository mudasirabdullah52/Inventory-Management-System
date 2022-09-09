<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@100&display=swap" rel="stylesheet">
    <style>
        body{
			
			background-image: url(../img/bg1.jpg);
            max-width: 100%;
            height: auto;
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover;
            		}
                .form-container{border: 1px solid;
            padding: 50px 60px;
            margin-top: 10vh;
            border-radius: 20px;
            -webkit-box-shadow: 1px 4px 20px 11px rgba(0,0,0,0.75);
            -moz-box-shadow: 1px 4px 20px 11px rgba(0,0,0,0.75);
            box-shadow: 1px 4px 20px 11px rgba(0,0,0,0.75);
        }
        .form-img{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20PX;
        }
        .form-img img{
            width: 80px;
            height: 80px;
        }
    </style>
    <title>Document</title>
</head>
<body> 
     
    <div class="container-fluid " >
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                     
                   <h1 class="text-center"  style="font-family: 'Texturina', serif; color:gold"> <a href="#" class="alert-link" style="text-decoration: none;">Welcome to the Inventory Management System</a></h1>
                
            </div>
    
            <div class="col-md-2"></div>
        </div>
		<div class="row">
			
			<div class="col-md-4 col-xs-12"></div>
			<div class="col-md-4 col-xs-12">
				<form action="index.php" method="post" class="form-container"  >
					 
                    <div class="form-img">
                        <img src="../img/logo.png" alt="">
                        <h6 style="color:blue;">Admin login</h6>
                    </div>

                    <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Enter Name" style="background: transparent;  color: white; border: none; border-bottom: 2px solid rgb(227, 231, 236);" >
                            <label for="floatingInput" style="color: white;">Enter Email:</label>
                          </div>

                    <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" style="background: transparent;  color: white; border: none; border-bottom: 2px solid rgb(227, 231, 236);">
                            <label for="floatingPassword" style="color: white;">Password</label>
                          </div>
             
                  
                    <div class="d-grid gap-2" style="margin-top: 20px;">
                    <button class="btn btn-primary" type="submit" name="login" >Sign in</button>
                    <a class="btn btn-success" href="registration.php" role="button">sign up</a>
                  </div>
                   


                    <?php
                            session_start();
                            if(isset($_POST['login'])){
                                // $connection = mysqli_connect("localhost","root","");
                                // $db = mysqli_select_db($connection,"inventory");
                                $query = "select * from admin where email = '$_POST[email]'";
                                $query_run = mysqli_query($connection,$query);
                                while($row = mysqli_fetch_assoc($query_run)){
                                    if($row['email'] == $_POST['email']){
                                        if($row['password'] == $_POST['password']){
                                            $_SESSION['name'] = $row['name'];
                                            $_SESSION['email'] = $row['email'];
                                            $_SESSION['phone'] = $row['phone'];
                                            $_SESSION['id'] = $row['id'];
                                            $_SESSION['department'] = $row['department'];
                                            header("Location:admin_dashboard.php");
                                        }
                                        else{
                                            ?>
                                            <script>
                                                	alert("wrong passward")
                                            </script>
                                            <?php
                                        }
                                    }
                                    else{
                                        ?>
                                        <script>
                                                alert("wrong passward")
                                        </script>
                                        <?php
                                    }

                                }
                            }
                        ?>
                </form>	
		   </div>
		   <div class="col-md-4 col-xs-12"></div>
		    
		</div>
		
	</div>
<!-- js section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>