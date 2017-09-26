<?php
	include 'smart.php';
	function grocery(){	// The idea here is to click a button on the phone which calls this function grocery which would return the list of finished items
		$servername = "localhost";
		$username = "root";
		$password = "";
		
		//Create connection with supermarket database. Once  the item is identified the information is updated in the fridge database
		$conn = new mysqli($servername, $username, $password, "smart");
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		// Find the information in the supermarket database 
		else {
		echo "<hr />Below are the items you used in the pass month<hr /><br />Bread<br />Orange Juice<br />Pepsi<br />";
			$sql = "SELECT name FROM XFridge";
			$myData = mysqli_query($conn, $sql);
			while ($record = mysqli_fetch_array($myData)) {
				echo $record['name'];
				echo '<br />';	}
				
		echo "<hr />Below are the items that expired. You might want to replace these in your fridge<hr /> <br />";
				get_expire();
		}}
	function groups(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		
		//Create connection with supermarket database. Once  the item is identified the information is updated in the fridge database
		$conn = new mysqli($servername, $username, $password, "smart");
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		// Find the information in the supermarket database 
		else {
	
	}}
	/*function remove(){// The idea here is when an item is remove the phone scan the item to be removed then the fidge database is updated along with xfridge 
	//xfridge will contain all the item that are used up
		$servername = "localhost";
		$username = "root";
		$password = "";
		//This need to change to receive a post variable
		$f_item="0";
				
		//Create connection
		$conn = new mysqli($servername, $username, $password, "smart");
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		// When an item is used up it should be removed 
		else {
			$sql = "DELETE FROM fridge WHERE number= '$f_item'";
			sql2 = "INSERT INTO xfridge (name) VALUES ($f_item)";
			$myData = mysqli_query($conn, $sql);
			$myData2 = mysqli_query($conn, $sql2);
			}}
*/
?>