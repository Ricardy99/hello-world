<html>
<head>
<title>Add Student</title>
</head>
<body>
<?php
 
if(isset($_POST['submit'])){
     
    $data_missing = array();
     
    if(empty($_POST['name'])){
 
        // Adds name to array
        $data_missing[] = 'Name';
 
    } else {
 
        // Trim white space from the name and store the name
        $f_name = trim($_POST['name']);
 
    }
 
    if(empty($_POST['gender'])){
 
        // Adds name to array
        $data_missing[] = 'gender';
 
    } else{
 
        // Trim white space from the name and store the name
        $l_name = trim($_POST['gender']);

    }
 
    if(empty($_POST['birth'])){
 
        // Adds name to array
        $data_missing[] = 'Birth';
 
    } else {
 
        // Trim white space from the name and store the name
        $lunch = trim($_POST['birth']);
 
    }
     
    if(empty($data_missing)){
         
        require_once('../mysqli_connect.php');
         
        $query = "INSERT INTO contact (name, sex, birth) VALUES (?, ?, ?)";
         
        $stmt = mysqli_prepare($dbc, $query);
         
        i Integers
        d Doubles
        b Blobs
        s Everything Else
        
        mysqli_stmt_bind_param($stmt, "ssd", $name,
                               $sex, $b_date);
         
        mysqli_stmt_execute($stmt);
         
        $affected_rows = mysqli_stmt_affected_rows($stmt);
         
        if($affected_rows == 1){
             
            echo 'Info Entered';
             
            mysqli_stmt_close($stmt);
             
            mysqli_close($dbc);
             
        } else {
             
            echo 'Error Occurred<br />';
            echo mysqli_error();
             
            mysqli_stmt_close($stmt);
             
            mysqli_close($dbc);
             
        }
         
    } else {
         
        echo 'You need to enter the following data<br />';
         
        foreach($data_missing as $missing){
             
            echo "$missing<br />";
             
        }
         
    }
     
}
 
?>
 
<form name="contactform" method="post" action="contact.php">
  <fieldset>
    <legend><b>Your Information:</b></legend>
    Name: <input type="text" input id="name" name="name" placeholder="first-name last-name" size="30" onkeyup="lettersOnly(this)"><br>
    Email: <input type="text" input id="email" name="email" placeholder="user@site.xx" size="30" onkeyup="noSpecialChars(this)"><br>
    Phone: <input type="text" input id="phone" name="phone" placeholder="123-123-1234" size="30" onkeyup="numbersOnly(this)"><br>
	Gender: <input type="text" input id="gender" name="gender" placeholder="M or F" size="10" maxlength="1" onkeyup="lettersOnly(this)"><br>
    Date of birth: <input type="text" input id="birthdate" name="birthdate" placeholder="yyyy-mm-dd" size="10" maxlength="10" onkeyup="numbersOnly(this)">
  </fieldset>
  <input type="submit" name="submit" value="Send">
</form>

</body>
</html>
