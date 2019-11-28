<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sex = $_POST['gender'];
$birthdate = $_POST['birthdate'];

//Things to log in
$username = 'php';
$password = 'password';
$servername = 'localhost';
$dbname = 'info';

$conn = mysqli_connect($servername, $username, $password, $dbname);



if(isset($_POST['submit'])){
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['birthdate']))
    {
	echo "FILL ALL FIELDS!!";
    }
    else
    {
	if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error());}

if (mysqli_query($conn, $sql)) { 
    echo "New record created successfully";} 
else {
    echo "Error: " . $sql . "<br>" .mysqli_error($conn);}

$sql = "INSERT INTO contact (name, email, phone, sex, birth) VALUES ('$name', '$email', '$phone', '$sex', '$birthdate')";
if (mysqli_query($conn, $sql)) { 
    echo "New record created successfully";}
else {
    echo "Error: " . $sql . "<br>" .mysqli_error($conn);}
    
    
/*	$sql = "INSERT INTO contact (name, email, phone, sex, birth) VALUES ('$name', '$name', '$phone', 'M', '$birthdate');"

if (mysqli_query($conn, $sql)) { 
    echo "record created success";}				*/
    
    
	    //header("Location: http://www.google.ca"); /* Redirect browser */
	    //echo "thanks";
	    echo "<script>alert('There are no fields to generate a report');</script>";
	    header("Location: index.php");
	exit();
    }
}
//Dont really need this since all we have is php but well
?>
