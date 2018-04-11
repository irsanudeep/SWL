<html>
	<head>
		<title>Login</title>
	</head>

	<body>
		<?php

			$host="localhost";
			$user="root";
			$pwd="";
			$db="personal";	
			
			// connect to the server
			$conn = new mysqli($host, $user, $pwd, $db);
			//mysql_select_db($db);
			
			if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 
			
			$name = $_POST['name'];
			$contactnumber = $_POST['contactnumber'];
			$email = $_POST['email'];
			$tow = $_POST['tow'];
			$workdesc = $_POST['workdesc'];
			$budget = $_POST['budget'];
			
			$sql = "INSERT INTO hirelist VALUES('$name','$contactnumber','$email','$tow','$workdesc','$budget')";
			$result = $conn->query($sql);

			if ($result == TRUE) {
				echo "Thank You for Your Interest";
				echo '<p>I will get back to you shortly.</p>';
			} else {
				echo "Failed!!!";
			}
			
		?>
	</body>

</html>