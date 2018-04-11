<html>
	<head>
		<title>Contact</title>
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
			
			$name = $_POST['Name'];
			$email = $_POST['Email'];
			$message = $_POST['Message'];
			
			$sql = "INSERT INTO contact VALUES('$name','$email','$message')";
			$result = $conn->query($sql);

			if ($result == TRUE) {
				echo "Thank You for your interest.";
				echo "<p>We'll contact you shortly</p>";
			} else {
				echo "Failed";
			}
			
		?>
		
		<!--<script language="javascript" type="text/javascript">
			 window.setTimeout('window.open("index.html","newsite")',4500);
		</script>-->
	</body>

</html>