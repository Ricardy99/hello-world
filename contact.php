<!DOCTYPE html>
<html>
<body background="images/background.jpg">

<h2>Contact us</h2>

<p>Now enter you information and we might get in touch</p>

<script>
function lettersOnly(input) {
    var ipt = /[^a-z ]/gi;
    input.value = input.value.replace(ipt, "");
}

function numbersOnly(input) {
    var ipt = /[^0-9, -]/g;
    input.value = input.value.replace(ipt, "");
}

function noSpecialChars(input) {
    var ipt = /[^a-z ^0-9 @.]/g;
    input.value = input.value.replace(ipt, "");
}
</script>


<form>
  <fieldset>
    <legend><b>Your Information:</b></legend>
    Name: <input type="text" input id="name" placeholder="first-name last-name" size="30" onkeyup="lettersOnly(this)"><br>
    Email: <input type="text" input id="email" placeholder="user@site.xx" size="30" onkeyup="noSpecialChars(this)"><br>
    Phone: <input type="text" input id="phone" placeholder="123-123-1234" size="30" onkeyup="numbersOnly(this)"><br>
    Date of birth: <input type="text" input id="birthdate"placeholder="dd-mm-yyyy" size="10" onkeyup="numbersOnly(this)">
  </fieldset>
</form>

<h4>How should we contact you</h4>
<select>
    <option value="email">Email</option>
    <option value="phone">Phone</option>
    <option value="other">Other</option>
  </select>

  <!--<a href="index.php"><button>Submit</button></a><br> -->
  
  <button onclick="myFunction()">Submit</button>

<script>
function myFunction() {
	alert("Thanks! ttyl");
	location.replace("index.php");
}
</script>
  

  <p3>...or you can go back to the <a href="index.php">home page</a> or the <a href="options.php">options</a> page</p3>

</body>
</html>