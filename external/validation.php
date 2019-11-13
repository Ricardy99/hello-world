<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['birthdate']))
{
    echo "Fill all fields!";
}
else
{
	//header("Location: http://www.google.ca"); /* Redirect browser */
	//echo "thanks";
	echo "<script>alert('There are no fields to generate a report');</script>";
	header("Location: index.php");
    exit();
}
?>
