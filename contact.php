<?php 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $message=$_POST['message'];
 $con=mysqli_connect("mysql12.000webhost.com","a2999477_baka","KVB@22101996","a2999477_baka");
 $sql="insert into contact(Name,Email,Message) values('$name','$email','$message')";
 $result=mysqli_query($con,$sql);
 if($result) 
 {
 	$send=array("status"=>"111");
 	echo json_encode($send);
 }
 else
 {
 	$send=array("status"=>"000");
 	echo json_encode($send);
 }
 ?>