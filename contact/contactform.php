<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message=$_POST['message'];

		$to='nomanghazi112@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo"<script type='text/javascript'> 
       alert ('Your Message Send Successfuly Thank You!');
        window.log('index.html');
   </script>";
		}
		else{
			echo"<script type='text/javascript'> 
       alert ('Your Message can't Send Successfuly');
        window.log('index.html');
   </script>";
		}
	}
?>