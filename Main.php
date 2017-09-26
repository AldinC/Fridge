<html>
<head>
    <title>Smart Fridge</title>
	<link rel="stylesheet" type="text/CSS" href="mystyle.css">
</head>
<body>
<div class="main">
<?php 
$user= $_POST['user_name']

?>
<h1>Welcome <?php echo $user;?> 
<br />
<p>These are the list of items available in the fridge </p> 
<?php 
include 'new.php';
items();
?>
<br />
<p>Here are some options available. Please select one of these options:</p>
  <button onclick="document.write('<?php get_expire() ?>');" >Check for expired items in the Fridge </button> 
  <button onclick="document.write('<?php grocery() ?>');" >View A suggested grocery list </button>
  <button>View Suggested meals </button>  
  <a href="front2.php"><button>Leave </button></a> 
</div>
</body>
</html>