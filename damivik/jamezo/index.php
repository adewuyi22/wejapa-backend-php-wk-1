<!DOCTYPE html>
<html>
	<head>
		<title>Form fill</title>
		<link rel ="stylesheet" href="stylesheet/style.css">
	</head>

	<body>
<div>
		<form action="index.php" method="GET">
		Name: <br> <input type="text" name="name"> </br> <br/>
		Email: <br> <input type="text" name="email"> </br> <br/>
		Your Track: <br> <input type="text" name="track" placeholder="e.g Node, PHP, Java"> </br> <br/>
		<input type="submit" value="submit">
		</form>

</div>


	</body>

</html>

<?php    


	if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['track'])) {

		$email = $_GET['email'];		$name = $_GET['name'];

		$track = $_GET['track'];

		if (!empty($name) && !empty($email) && !empty($track)) {
			$welcome = "<br/>Hello $name, Welcome to Wejapainternships. <br/> Your form filled details are: <br/> <br/>";

			$info = "<b>Name: $name </b><br/> 
					<b>Email: $email </b><br/> 
					<b>Track: $track </b>";

			echo $welcome;			
			echo $info;

		}


	} else {

		$error = "Kindly fill in all fields.";
		//echo $error;
	}



?>