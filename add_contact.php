<?php include 'external/validation.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Add contact</title>
<script src="external/scripting.js"></script>
</head>
<body background="images/background.jpg">
<h2>Contact us</h2>    
    

    
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


    if(empty($_POST['email'])){
 
        // Adds name to array
        $data_missing[] = 'Email';

    } else {

        // Trim white space from the name and store the name
        $email = trim($_POST['email']);

    }


    if(empty($_POST['phone'])){

        // Adds name to array
        $data_missing[] = 'Phone Number';

    } else {

        // Trim white space from the name and store the name
        $phone = trim($_POST['phone']);

    }
    
    if(empty($_POST['gender'])){

        // Adds name to array
        $data_missing[] = 'Gender';

    } else {

        // Trim white space from the name and store the name
        $b_date = trim($_POST['gender']);

    }

    if(empty($_POST['birthdate'])){

        // Adds name to array
        $data_missing[] = 'Birth Date';

    } else {

        // Trim white space from the name and store the name
        $b_date = trim($_POST['birthdate']);

    }


    if(empty($data_missing)){

        require_once('../mysqli_connect.php');

        $query = "INSERT INTO contact (name, email, phone, gender, birthdate) VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $query);

        i Integers
        d Doubles
        b Blobs
        s Everything Else

        mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $phone, 
                                $gender, $b_date);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if($affected_rows == 1){

            echo 'Student Entered';

            mysqli_stmt_close($stmt);

            mysqli_close($conn);

        } else {

            echo 'Error Occurred<br />';
            echo mysqli_error();

            mysqli_stmt_close($stmt);

            mysqli_close($conn);

        }

    } else {

        echo 'You need to enter the following data<br />';

        foreach($data_missing as $missing){

            echo "$missing<br />";

        }

    }

}

?>

<form name="contactform" method="post" action="add_contact.php">
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
