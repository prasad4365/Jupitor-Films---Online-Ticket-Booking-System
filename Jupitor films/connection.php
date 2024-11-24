<?php
  $servername="localhost";
  $username="root";
  

 //create connection 
  $conn= mysqli_connect($servername, $username);


  if(!$conn){
	 die("Connection failed :".mysqli_connect_error($conn));
	
  }else{
	echo"Connected successfully";
  }
?>
