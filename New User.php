<html>
<head>
    <title>Smart Fridge</title>
	<link rel="stylesheet" type="text/CSS" href="mystyle.css">
</head>
<body>
<div class="main">
    <H1>Here you can add a new user</H1>
    <br />
    <br />
    <p>Please ensure that each individual has there own user account. This will allow the  fridge to better able to make suggestions that are specific and beneficial to that individual </p><br />
    <p>Feel free to voice your queries and suggestions</p>
    <form action="confirm.php" method="post">
        Name:<br />
        <input type="text" name="name"><br />
        Email:<br />
        <input type="text" name="Contact"><br />
        Age: <br />
		<input type="text" name="age"><br />
		Sex: <br />
		<input type="radio" name="sex" value="male">Male<br />
		<input type="radio" name="sex" value="female">Female<br />
        To better suggest meals for you. We need your Body Mass Index. We can calculate it for you on the next page or you can enter your BMI below if you know what it is <br />
		BMI<input type="text" name="BMI"><br /><br />
    <input type="reset" value="Reset" />
	<input type="submit" value="Submit" />
	</form>
<a href="Main.php"><button type="button" class="submit">Cancel and Return to Main Menu</button></a>
</div>
</body>
</html>