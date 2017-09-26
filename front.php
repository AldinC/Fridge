<html>
<head>
    <title>Smart Fridge</title>
</head>
<body>
    <H1>Welcome to your Smart Fridge</H1>
    <br />
    <br />
    <p>Please select your name from the list.</p>
<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	
	//Create connection
	$conn = new mysqli($servername, $username, $password, "smart");
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else {
	//Get name of the user profiles
		$sql = "SELECT name FROM user";
		$myData = mysqli_query($conn, $sql);
		while ($record = mysqli_fetch_array($myData))echo '<br />';
        echo '<div>' .$record['name'].'</div>';	
	}	
	?>
    
    <br />
    <p>If your name is not present please create a new profile</p>
    
    
</body>
</html>