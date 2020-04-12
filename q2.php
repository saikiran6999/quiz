<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['rajamouli'];
	if($a=="rajamouli"){
		header('Location:q3.php');
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
<h2>2.who is the director of bahubali?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="vinayak" name="rajamouli" value="vinayak">
  <label for="vinayak">Vinayak</label><br>
  <input type="radio" id="trivikram" name="rajamouli" value="trivikram">
  <label for="trivikram">Trivikram</label><br>
  <input type="radio" id="rajamouli" name="rajamouli" value="rajamouli">
  <label for="rajamouli">Rajamouli</label><br>
  <input type="radio" id="sukumar" name="rajamouli" value="sukumar">
  <label for="sukumar">Sukumar</label><br>
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>
