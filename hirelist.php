<!DOCTYPE html>
<html>
<head>
<title>Hire Details</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>
<div class="container">
	<header>
		<h1><span>Sai Anudeep Itha</span>Following People Are Interested To Working With You</h1>
	</header>       
     <!-- start header here-->
	<header>
<div id="fdw-pricing-table">
	<?php
		$host="localhost";
		$user="root";
		$pwd="";
		$db="personal";
		// connect to the server
		$conn = new mysqli($host, $user, $pwd, $db);
		//mysql_select_db($db);
		
		if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);} 
		
		$sql = "SELECT name, contactnumber, email, tow, workdesc, budget FROM hirelist";
		$result = $conn->query($sql);

		if (mysqli_num_rows($result) > 0) {
		// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo '<div class="plan plan4">';
					echo '<div class="header">'.$row["name"].'</div>';
					echo '<div class="price">₹'.$row["budget"].'</div>'; 
					echo '<div class="monthly">'.$row["tow"].'</div>';    
					echo '<ul>';
					echo '	<li>'.$row["contactnumber"].'</li>';
					echo '	<li>'.$row["email"].'</li>';
					echo '	<li>'.$row["workdesc"].'</li>';	
					echo '</ul>';
					echo '<a class="signup" href="#">Deliver</a>';    
				echo '</div>';				
			}
		} else {
			echo "<p>Enjoy your Holiday!!!!!!</p>";
			echo '<p>You have no Works</p>';
		}		
	?>
</div>
	</header>
    
</div>
</body>
</html>
