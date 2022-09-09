<?php
include 'connection.php';
session_start();
$name = $_SESSION['name'];
if (!$name) {
    header("Location:index.php");
    exit;
}
 
	// $connection = mysqli_connect("localhost","root","");
	// $db = mysqli_select_db($connection,"inventory");
	$query = "select * from  registration where id = '$_SESSION[id]' ";
	$query_run = mysqli_query($connection,$query);
    if (!$query_run) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
    }
    else{	
        while($row =  mysqli_fetch_array($query_run)){
         $name = $row['name'];
         $phone = $row['phone'];
         $email = $row['email'];
         $password = $row['password'];
         $gender = $row['gender'];
         $department = $row['department'];
         $address = $row['address'];
         $zip = $row['zip'];
        }
    }
     
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
        .nav{
            color: black;
            

        }
        .nav a{
            padding: 5px;
            margin:10px;
            background-color: pink;
        }
        .nav a:hover{ 
            color: red;
            background-color: green;
        }
        /* .dropdown-item{ 
            background-color: yellow;
        } */
        .clock{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translateX(-50%) translateY(-50%);
			color: blue;
            font-family: Orbitron;
            
			font-size: 60px;
			/* border: 1px solid #ccc; */
			padding: 0px 5px 0px 5px;
		}
        
    </style>
    <title>dashboard</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                        <div class="alert alert-primary" role="alert">
                            <h1 class="text-center"> <a href="#" class="alert-link" style="text-decoration: none;">Welcome to the Inventory Management System</a></h1>
                        
                        </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                <div class="row">
                         <div class="col-md-12">
                             <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                          <img style="height:80px; width: 80px; border-radious:50px; justify-item: center;" src="img/logo.png" alt="">
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>

                                    <h3 class="text-center" style="font-family: 'Texturina', serif; color:gold">welcome</h3>

                                    <h2 class="text-center "  style="font-family: 'Texturina', serif; color:red; font-size:20px"><?php echo $_SESSION['name'];?></h2>

                                   <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            My Profile
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="view_profile.php">view Profile</a></li>
                                            <li><a class="dropdown-item" href="update_profile.php">update profile</a></li>
                                            <li><a class="dropdown-item" href="change_password.php">change password</a></li>
                                        </ul>
                                        <a class="btn btn-light" style="float:right;" href="logout.php" role="button">logout</a>
                                    </div>
                                   
                                </div>

                             </div>
                         </div>
                     </div>
                    <div class="card-body">
                        <nav class="nav flex-column">
                            <a class="nav-link" href="dashboard.php">Home</a>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dapartment
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="mca.php">MCA</a></li>
                                <li><a class="dropdown-item" href="mba.php">MBA</a></li>
                                <li><a class="dropdown-item" href="mtech.php">MTECH</a></li>
                                <li><a class="dropdown-item" href="btech.php">Btech</a></li>
                                <li><a class="dropdown-item" href="bpharma.php">Bpharma</a></li>
                                <li><a class="dropdown-item" href="bsc.php">BSC</a></li>
                                 
                            </ul>
                             
                         </nav>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="card">
                                <div class="card-body"><br><br>
                                <div id="MyClockDisplay" class="clock"></div>
                                        <script type="text/javascript">

                                            function showTime(){
                                                var date = new Date();
                                                var h = date.getHours(); // 0 - 23
                                                var m = date.getMinutes(); // 0 - 59
                                                var s = date.getSeconds(); // 0 - 59
                                                var session = "AM";
                                                
                                                if(h >= 12){
                                                    h = h - 12;
                                                    session = "PM";
                                                }

                                                if(h == 0){
                                                    h = 12;
                                                }

                                                h = (h < 10) ? "0" + h : h;
                                                m = (m < 10) ? "0" + m : m;
                                                s = (s < 10) ? "0" + s : s;

                                                var time = h + ":" + m + ":" + s + " " + session;
                                                document.getElementById("MyClockDisplay").innerText = time;
                                                document.getElementById("MyClockDisplay").textContent = time;

                                                setTimeout(showTime, 1000);
                                            }

                                            showTime();

                                        </script>
                                </div>

                             </div>
                         </div>
                     </div>
                    <div class="card-body" style="margin:10px; padding:10px;">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10  form-container">

                                <form class="row" action="" method="POST">

                                
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="name" class="form-control text-success" id="floatingInput"value="<?php echo $name;?>" placeholder="name@example.com" style="background: transparent;  border: none; border-bottom: 2px solid rgb(227, 231, 236);" >
                                            <label for="floatingInput" style="color: red; font-size: 20px;">Enter Name</label>
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="phone" class="form-control text-success" id="floatingPassword" value="<?php echo $phone;?>" placeholder="Enter Phone Number" style="background: transparent; border: none; border-bottom: 2px solid rgb(227, 231, 236);">
                                            <label for="floatingPassword" style="color: red; font-size: 20px;">Phone No.</label>
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" name="email" class="form-control text-success" id="floatingInput" value="<?php echo $email;?>" placeholder="Enter Name" style="background: transparent;  border: none; border-bottom: 2px solid rgb(227, 231, 236);" >
                                            <label for="floatingInput" style="color: red; font-size: 20px;">Enter Email:</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control text-success" id="floatingPassword" value="<?php echo $password;?>" placeholder="Password" style="background: transparent; border: none; border-bottom: 2px solid rgb(227, 231, 236);">
                                            <label for="floatingPassword" style="color: red; font-size: 20px;">Password</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select text-success" name="gender" id="floatingSelect"  aria-label="Floating label select example"  style="background: transparent; border: none; border-bottom: 2px solid rgb(227, 231, 236);">
                                            <option selected><?php echo $gender;?></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                            </select>
                                            <label for="floatingSelect" style="color: red; font-size: 20px;">Select Gender</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select text-success" name="department" id="floatingSelect" value="<?php echo $department;?>" aria-label="Floating label select example"  style="background: transparent; border: none; border-bottom: 2px solid rgb(227, 231, 236);">
                                            <option selected><?php echo $department;?></option>
                                            <option>MCA</option>
                                            <option>MBA</option>
                                            <option>BTach</option>
                                            </select>
                                            <label for="floatingSelect" style="color: red; font-size: 20px;">Select Dapartment</label>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="address" class="form-control text-success" id="floatingInput" value="<?php echo $address;?>" placeholder="Enter Address" style="background: transparent;  border: none; border-bottom: 2px solid rgb(227, 231, 236);" >
                                            <label for="floatingInput" style="color: red; font-size: 20px;">Address</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="zip" class="form-control text-success" id="floatingInput" value="<?php echo $zip;?>" placeholder="Enter Zip Code" style="background: transparent;  border: none; border-bottom: 2px solid rgb(227, 231, 236);" >
                                            <label for="floatingInput" style="color: red; font-size: 20px;">Zip</label>
                                        </div>
                                    </div>
                                    
                                    
                                </form>

                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                        <div class="alert alert-primary" role="alert">
                            <h6 class="text-center" style="text-decoration: none; font-family: Orbitron;"> copyright &copy; All rights are reserved</h6>
                        
                        </div>
            </div>
    </div>

    

<!-- js section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>