<?php
Session_start(); 
$new=$_SESSION['a'];
?>
<html>
<head>
    <title>Smart Fridge</title>
	<link rel="stylesheet" type="text/CSS" href="mystyle.css">
	<script language="JavaScript">
<!--
function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){	
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you are overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}
//-->
</script>
</head>
<body>
<div class="main">

    <H1><?php echo $new?> let us calculate your BMI</H1>
    <form name="bmiForm">
Your Weight(kg): <input type="text" name="weight" size="10"><br />
Your Height(cm): <input type="text" name="height" size="10"><br />
<input type="button" value="Calculate BMI" onClick="calculateBmi()"><br />
Your BMI: <input type="text" name="bmi" size="10"><br />
This Means: <input type="text" name="meaning" size="25"><br />
<input type="reset" value="Reset" />
</form>
<a href="front2.php"><button>Return to log in page</button></a>
</div>
</body>
</html>