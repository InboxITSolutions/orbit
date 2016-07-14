<?php
if($_POST['submitquote']){
if(isset($_POST["submitquote"])) {
	if($_POST['name']!=""&&$_POST['email']!=""&&$_POST['company']!=""&&$_POST['phone']!=""&&$_POST['zip']!=""&&$_POST['interested']!=""&&$_POST['address']!=""){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$company = $_POST['company'];
		$zip = $_POST['zip'];
		$comments = $_POST['comments'];
		$email = $_POST['email'];
		$interest = $_POST['interested'];
		$address = $_POST['address'];
		$recipient = "govinda.aryal10@gmail.com";
		$subject = "Quote Request";
		$mailBody="Name: $name\nPhone No. : $phone\nEmail: $email\nCompany: $company\nZip Code: $zip\nAddress: $address\nInterested In: $interest\nComments: $comments";
		mail($recipient, $subject, $mailBody, "From: $name <$email>");

		echo "Mail sent";
		header('Refresh:0.5,index.php');
	}
}
}
?>