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
   
    <title>Document</title>
</head>
<body>
<?php
 $con=mysqli_connect('localhost','root','','inventory');
 $res=mysqli_query($con,"select * from request where id= 1");
 while($row=mysqli_fetch_assoc($res)){
      $hod_name = $row['hod_name'];
      $department = $row['department'];
      $category = $row['catagory'];
      $brand = $row['brand'];
      $quantity =$row['quantity'];
      
}
require('vendor/autoload.php');
$html.='<h3 style=" text-align:center; color: red; background-color:grey;" >Meetur Institute of Engineering and Technology</h3>';
 $date= date("Y.m.d");
 $html.="<i>$date</i><br><br>";
 $html.="<a> The Chairman</a><br><br>";
 $html.="<a> MIET Meerut</a><br><br><br>";
 $html.="<a> Sub:</a>";
 $html.="<a> Application for new Stock.</a><br><br>";
 
 $html.="<div>
            <a>Sir,</a><br><br>
            <a>We have the honor to draw your kind attention to word the fact that
             the $department Department of your college have an urgent need of this stock. </a>
             
                

         </div>";
// $con=mysqli_connect('localhost','root','','youtube');
$res=mysqli_query($con,"select * from add_product where department = '$department'");
if(mysqli_num_rows($res)>0){
	$html.= '<table style="border:2px; Width: 700px;">';
    
		$html.='<tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
            </tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr>
                    <td>'.$row['hod_name'].'</td>
                    <td>'.$row['department'].'</td>
                    <td>'.$row['email'].'</td>
               </tr>';
		}
	$html.='</table>';
   
}else{
	$html="Data not found";
}
$html.="<div>
 <br>
<a>I HOD of $department Departemnt hope  that you will take prompt action in this regard. waiting  for your response</a><br><br>
<a> Name: $hod_name</a><br>
<a> Designation: Head of the Department</a><br>
<a> Department:  $department</a><br>
</div>";
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>
</body>
</html>
