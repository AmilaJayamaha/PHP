<?php
     # print_r($_POST);#
	 $username=$_POST["username"];
	 $password=$_POST["password"];
	 if($username=="amila" && $password=="pass"){
		 echo "login success";
	 }else{
		 echo "invalid username or password";
	 } 
?>