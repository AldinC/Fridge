<?php
Session_start();
$new=$_POST['name'];
$_SESSION['a'] =$new;

?>
<html>
<head>
    <title>Smart Fridge</title>
	<link rel="stylesheet" type="text/CSS" href="mystyle.css">
</head>
<body>
<div class="main">
<?php
if (!empty($_POST["name"])&& !empty($_POST["age"])&& !empty($_POST["sex"])){
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
	//Check if the name is already in the database
		//$sql2="SELECT name FROM user WHERE name = '$_POST[name]'";
		//$myData2 = mysqli_query($conn, $sql2);
		//if (($myData2)){
	//inserting the name of the user profile
			$sql ="INSERT INTO user (name) VALUES('$_POST[name]')";
			$myData = mysqli_query($conn, $sql);
			echo("<h1>You have successfully added $new </h1>");
			echo("<a href='front2.php'><button type='button' class='submit'>Return to Main Menu</button></a>");
				if (empty($_POST["BMI"])||$_POST["BMI"]=="0"){
					echo("<br /><br /><br />You BMI is missing please calculate it <br />");
					echo("<a href='bmi.php'><button type='button' class='submit'>Calculate BMI</button></a>");
					}
				else{}
	
	//}
		//else{
			//echo("<h1>That user name already exist. Please try again </h1>");
			//echo("<a href='New User.php'><button type='button' class='submit'>Cancel and Return to Main Menu</button></a>");
			}}//}
else{
	echo("<h1>Addition of new profile was unsuccessful. Please ensure all the required fields are fill out</h1>");
	echo("<a href='New User.php'><button type='button' class='submit'>Cancel and Return to Main Menu</button></a>");
}
	?>
    
</div>	
</body>
</html>