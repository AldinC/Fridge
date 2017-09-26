<html>
<head>
    <title>Smart Fridge</title>
	<link rel="stylesheet" type="text/CSS" href="mystyle.css">
</head>
<body>
<div class="main">
    <H1>Welcome to your Smart Fridge</H1>
    <br />
    <br />
    <p>Please select your name from the drop down menu.</p>
    <form action="Main.php" method="post">
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
		//Put the drop down menu into a form. This will allow for easier transition from web pages
        echo '<select name="user_name"required>';
		while ($record = mysqli_fetch_array($myData)){echo '<option value="'. $record['name'].'">'. $record['name'].'</option>';
	}
    echo '<option selected="selected" disabled="disabled" value="false">No User Selected</option>';  
    echo '</select>';}
	?>

    <br />
    <input type="submit"><input type="reset">
	</form>
    <p>If your name is not present please create a new profile</p>
    <a href="New User.php"><button type="button" class="submit">Create new user</button></a>
	<br />
	<br />
	<p>Do you wish to remove items from your fridge or cupboard</p>
	<form>
	<?php
	//Get name of the items to remove from fridge 
		$sql = "SELECT name FROM fridge";
		$myData = mysqli_query($conn, $sql);
		//Put the drop down menu into a form. This will allow for easier transition from web pages
        echo '<select name="delete>';
		while ($record = mysqli_fetch_array($myData)){echo '<option value="'. $record['name'].'">'. $record['name'].'</option>';
	}
    echo '<option selected="selected" disabled="disabled" value="false">Remove Item</option>';  
    echo '</select>';
	?>
	<br />
	<input type="submit"><input type="reset">
	</form>
	<a href="email.php"><button type="button" class="submit">email</button></a>
</div>
</body>
</html>