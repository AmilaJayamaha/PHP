<?php 
  $connection = mysqli_connect("localhost","root","","userdb");
  if(mysqli_connect_errno()){
	  die("connection failed".mysqli_connect_errno());
  }else{
	  echo "connection successful";
  }  
?>