<?php

    $con = mysqli_connect('localhost' , 'root', '' ,'gym_form');
	$name =$_POST['name'];
	$email =$_POST['email'];
	$number =$_POST['number'];
	$date =$_POST['date'];
	$address =$_POST['address'];
	$gender =$_POST['gender'];
	
	
    $sql = "INSERT INTO `registration` (`name`, `email`,`number`, `date`,  `address`, `gender`) VALUES ('$name', '$email','$number', '$date', '$address','$gender')";
	
    $rs = mysqli_query($con, $sql);
	
	
	if($rs)
	{
		echo "Contact Recpord Sucessfully";
	}
	
   else{
	   echo"Eroor";
   }
   
		  
	 



   ?>