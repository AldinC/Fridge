<?php
	function items(){ // The idea here is to click on some button on the phone to get the contents of the fridge. This function is then call and the results posted back to the fridge
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
	//Get name of the items in the fridge
		$sql = "SELECT name FROM fridge";
		$myData = mysqli_query($conn, $sql);
		while ($record = mysqli_fetch_array($myData)) {
		echo $record['name'];
		echo '<br/>';
	}	}
	}
	function get_expire(){// The idea here is to click some button on the phone to get the expired items once the button is clicked this function is call. The result is then posted back to the phone
		$servername = "localhost";
		$username = "root";
		$password = "";
		
		//Create connection
		$conn = new mysqli($servername, $username, $password, "smart");
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		//The idea here is to get the items that expired. Not completed
		else {
		
			//This tells the format of the date
			$sql = "SELECT * FROM fridge WHERE Expiry  > now()";
			$myData = mysqli_query($conn, $sql);
			while ($record = mysqli_fetch_array($myData)) {
			echo $record['name']." ";
			echo $record['Expiry'];
			echo '<br/>';
			}}
	}

	function remove(){// The idea here is when an item is remove the phone scan the item to be removed then the fidge database is updated
		$servername = "localhost";
		$username = "root";
		$password = "";
		//This need to change to receive a post variable
		$f_item="";
				
		//Create connection
		$conn = new mysqli($servername, $username, $password, "smart");
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		// When an item is used up it should be removed 
		else {
			$sql = "DELETE FROM fridge WHERE number= $f_item";
			$myData = mysqli_query($conn, $sql);
			}}
			
	function adding(){// The idea here is when an item is added the phone scan the item then the fidge database is updated
		$servername = "localhost";
		$username = "root";
		$password = "";
		//This needs to change to receive a post variable
		$n_item = "1876";
		
		//Create connection with supermarket database. Once  the item is identified the information is updated in the fridge database
		$conn = new mysqli($servername, $username, $password, "smart");
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		// Find the information in the supermarket database 
		else {
			$sql = "SELECT * FROM supermarket WHERE number= $n_item";
			$myData = mysqli_query($conn, $sql);
			mysql_close($conn);
			
		//COnnect to Fridge database
			$servername = "localhost";
			$username = "root";
			$password = "";
	
		//Create new connection with Fridge database to update its contents
			$conn2 = new mysqli($servername, $username, $password, "smart");
		
		// Check connection
			if ($conns->connect_error) {
				die("Connection failed: " . $conn2->connect_error);
		} 
		// Update the Fridge database 
			else {
				//$sql = "INSERT INTO fridge (Name, Number) VALUES($myData[Item name], $myData[Product Code])";
				//$myData2 = mysqli_query($conn, $sql);
			}}}
		/*
		Some testing code I use
		if (isset($_POST['f_item'])){
			remove();
		}
		else{
			adding();
		}*/
?>
