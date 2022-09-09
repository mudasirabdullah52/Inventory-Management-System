
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
			
			background-image: url(../img/loginbg1.jpg);
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
<div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                     
                   <h1 class="text-center"  style="font-family: 'Texturina', serif; color:gold"> <a href="#" class="alert-link" style="text-decoration: none;">Welcome to the Inventory Management System</a></h1>
                
            </div>
    
            <div class="col-md-2"></div>
    </div>
    <div class="container-fluid " >
		<div class="row">
            <div class="col-md-2 col-xs-12"></div> 
            <div class="col-md-8 col-xs-12 form-container">

                <form class="row" action="register.php" method="POST">

                   
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control " id="floatingInput" placeholder="name@example.com" style="background: transparent;  border: none; border-bottom: 2px solid rgb(227, 231, 236);" >
                            <label for="floatingInput" style="color: red; font-size: 20px;">Enter Name</label>
                          </div>
                      </div>

                      
                      <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="phone" class="form-control " id="floatingPassword" placeholder="Enter Phone Number" style="background: transparent; border: none; border-bottom: 2px solid rgb(227, 231, 236);">
                            <label for="floatingPassword" style="color: red; font-size: 20px;">Phone No.</label>
                          </div>
                      </div>

                    
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control  " id="floatingInput" placeholder="Enter Name" style="background: transparent;  border: none; border-bottom: 2px solid rgb(227, 231, 236);" >
                            <label for="floatingInput" style="color: red; font-size: 20px;">Enter Email:</label>
                          </div>
    
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control  " id="floatingPassword" placeholder="Password" style="background: transparent; border: none; border-bottom: 2px solid rgb(227, 231, 236);">
                            <label for="floatingPassword" style="color: red; font-size: 20px;">Password</label>
                          </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select " name="gender" id="floatingSelect" aria-label="Floating label select example"  style="background: transparent; border: none; border-bottom: 2px solid rgb(227, 231, 236);">
                              <option selected>Open this select menu</option>
                              <option>Male</option>
                              <option>Female</option>
                              <option>Other</option>
                            </select>
                            <label for="floatingSelect" style="color: red; font-size: 20px;">Select Gender</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select  " name="department" id="floatingSelect" aria-label="Floating label select example"  style="background: transparent; border: none; border-bottom: 2px solid rgb(227, 231, 236);">
                              <option selected>Open this select menu</option>
                              <option>MCA</option>
                              <option>MBA</option>
                              <option>MTECH</option>
                              <option>BTECH</option>
                              <option>BSC</option>
                              <option>Bpharma</option>
                            </select>
                            <label for="floatingSelect" style="color: red; font-size: 20px;">Select Department</label>
                          </div>
                      </div>

                      <div class="col-md-8">
                        <div class="form-floating mb-3">
                            <input type="text" name="address" class="form-control " id="floatingInput" placeholder="Enter Address" style="background: transparent;  border: none; border-bottom: 2px solid rgb(227, 231, 236);" >
                            <label for="floatingInput" style="color: red; font-size: 20px;">Address</label>
                          </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="text" name="zip" class="form-control " id="floatingInput" placeholder="Enter Zip Code" style="background: transparent;  border: none; border-bottom: 2px solid rgb(227, 231, 236);" >
                            <label for="floatingInput" style="color: red; font-size: 20px;">Zip</label>
                          </div>
                      </div>
                       
                      <div class="col-12" style="align-items: center;">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      </div>
                </form>

            </div>
            <div class="col-md-2 col-xs-12"></div>
		 
			 
		    
		</div>
		
	</div> 


    
<!-- js section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>