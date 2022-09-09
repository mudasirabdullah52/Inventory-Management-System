<?php
include 'connection.php';
session_start();
$name = $_SESSION['name'];
if (!$name) {
    header("Location:index.php");
    exit;
}
$department = $_SESSION['department'];
// if($_SESSION['department']!= "MCA"){
//     ?>
//     <script>
//     alert("You don't have a right to see the other department data.");
//     window.location.href = "dashboard.php";
//     </script>
//     <?php
      
//     exit;

// }
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
        .form-container{border: 1px solid;
            padding: 50px 60px;
            margin-top: 10vh;
            border-radius: 20px;
            -webkit-box-shadow: 1px 4px 20px 11px rgba(0,0,0,0.75);
            -moz-box-shadow: 1px 4px 20px 11px rgba(0,0,0,0.75);
            box-shadow: 1px 4px 20px 11px rgba(0,0,0,0.75);
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
                                <div class="card-body"><br> 
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
                            <!-- <div class="col-md-1"></div> -->
                            <div class="col-md-10">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                        <td colspan="9" style="color:yellow; background-color:green; text-align: center;"><?php echo $_SESSION['department']; ?> ALLOTMENT LIST</td>
                                        </tr>
                                        <tr>
                                            <!-- <th>P. Id</th> -->
                                            <th>Name</th>
                                            <th>Dept.</th>
                                            <th>Category</th>
                                            <th>Brand</th>
                                            
                                            <th colspan="2" style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        // $connection = mysqli_connect("localhost","root","");
                                        // $db = mysqli_select_db($connection,"inventory");
                                        $query = "select * from allotment_list where department = '$department'";
                                        $query_run = mysqli_query($connection,$query);
                                        while($row = mysqli_fetch_assoc($query_run)){
                                            ?>
                                            <tr>
                                                <!-- <td><?php echo $row['id'];?></td> -->
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['department'];?></td>
                                               
                                                <td><?php echo $row['catagory'];?></td>
                                                <td><?php echo $row['brand'];?></td>
                                               
                                                <td>
                                                    <button class="btn btn-success" name=""><a style="text-decoration: none; color: white;"  href="edit_allotment.php?cid=<?php echo $row['id'];?>">Edit</a></button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger" name=""><a style="text-decoration: none; color: white;" href="delete_allotmet.php?cid=<?php echo $row['id'];?>">Delete</a></button>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                </table>
                            </div>
                            <!-- <div class="col-md-1"></div> -->
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