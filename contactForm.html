<?php
require "require/connect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['submit']))
	{
		if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['text']))
		{
			if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['text']))
			{
				$query = $pdo->prepare("INSERT INTO guests (first_name, last_name, email, phone, question) VALUES (:firstName, :lastName, :email, :phone, :text)");
				
				$query->bindParam(':firstName',$firstName);
				$query->bindParam(':lastName',$lastName);
				$query->bindParam(':email',$email);
				$query->bindParam(':phone',$phone);
				$query->bindParam(':text',$text);
				
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$text = $_POST['text'];
				
				if($query->execute()){
					echo '<script language="javascript">';
					echo 'alert("Thank you for contacting me. I will respond in shortest time possible"); location.href="contact.php"';
					echo '</script>';
				}else{
					echo '<script language="javascript">';
					echo 'alert("Something went wrong. Please try again or contact me directly"); location.href="contact.php"';
					echo '</script>';
				}
			}
		}
	}
}