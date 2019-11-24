<?php
	include_once_ 'external/dhb.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	$sql = "SELECT title FROM books;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['title'];
		}
	}
		

</body>
</html>
