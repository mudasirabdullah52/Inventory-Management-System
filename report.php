<?php
 
require('vendor/autoload.php');
$html.='<h3 style=" text-align:center; color: red; background-color:grey;" >Meerut Institute of Engineering and Technology</h3>';
 $html.="<a> The Chairman</a><br><br>";
 $html.="<a> MIET Meerut</a><br><br>";
 $date= date("Y.m.d");
 $html.="<i>$date</i><br><br><br>";
 $html.="<a> Sub:</a>";
 $html.="<a> Application for new Stock.</a><br><br>";
 $con=mysqli_connect('localhost','root','','inventory');
 $id = $_GET['cid'];
 $res=mysqli_query($con,"select * from request where id= $id");
 while($row=mysqli_fetch_assoc($res)){
      $hod_name = $row['hod_name'];
      $department = $row['department'];
      $category = $row['catagory'];
      $brand = $row['brand'];
      $quantity =$row['quantity'];   
}
 $html.="<div>
            <a>Sir,</a><br><br>
            <a>We have the honor to draw your kind attention to word the fact that
             the $department Department of your college have an urgent need of this stock. </a>
         </div>";
		 $res=mysqli_query($con,"select * from request where department = '$department'");
if(mysqli_num_rows($res)>0){
	$html.= '<table style="border:2px; Width: 700px;">';
    
		$html.='<tr>
                <td><b>Catagory</b></td>
                <td><b>Brand</b></td>
                <td><b>Quantity</b></td>
            </tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr>
                    <td>'.$row['catagory'].'</td>
                    <td>'.$row['brand'].'</td>
                    <td>'.$row['quantity'].'</td>
               </tr>';
		}
	$html.='</table>';
   
}else{
	$html="Data not found";
}
$html.="<div>
 <br>
<a>I HOD of $department Departemnt hope  that you will take prompt action in this regard. waiting  for your response</a><br><br>
<a><b> Name:</b> $hod_name</a><br>
<a><b> Designation:</b> Head of the Department</a><br>
<a><b>Department: </b> $department</a><br>
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