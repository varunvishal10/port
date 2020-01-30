
<?php

$Use_Name=$_POST['name'];
$Use_Email=$_POST['email'];
$Use_Mob=$_POST['phone'];
$Use_Mess=$_POST['message'];
		
		$to_team = "varunvishal10@gmail.com";
		$subject_team = "$Use_Name via varunvishal.dsc.com";
		$header_team = "From: $Use_Email";
		$Use_Message = " $Use_Mess $Use_Mob via varunvishal.dsc.com"


		mail($to_team,$subject_team,$Use_Message,$header_team);


		header("location:www.varunvishal.ml");

		?>