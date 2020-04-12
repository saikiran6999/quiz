<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['narendar_modi'];
	if($a=="narendar_modi"){
		header('Location:q4.php');
	}else{
		echo '<script>alert("You Lost!")</script>';
		//header('Location:q1.php');
	}
}
?>

<html>
<head>
</head>
<body>
<h2>3.who is prime minister of india?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="modi" name="narendar_modi" value="narendar_modi">
  <label for="modi">Narendar Modi</label><br>
  
  <input type="radio" id="rahul" name="narendar_modi" value="rahul">
  <label for="rahul">Rahul</label><br>
  
  <input type="radio" id="manmohansingh" name="narendar_modi" value="manmohansingh">
  <label for="manmohansingh">Manmohansingh</label><br>
  
  <input type="radio" id="narsimha" name="narendar_modi" value="narsimha">
  <label for="narsimha">Narsimha</label><br>
  
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>
