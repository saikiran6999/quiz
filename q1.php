<?php
session_start();
if(isset($_POST['btn'])){
	$a=$_POST['virat_kohli'];
	if($a=="kohli"){
		header('Location:q2.php');
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
<h2>1.Who is captain of india?</h2>
<form action="" method="post">
  <p>Please Choose one answer:</p>
  <input type="radio" id="kohli" name="virat_kohli" value="kohli">
  <label for="kohli">Virat Kohli</label><br>
  <input type="radio" id="dhoni" name="virat_kohli" value="dhoni">
  <label for="dhoni">Dhoni</label><br>
  <input type="radio" id="rohit" name="virat_kohli" value="rohit">
  <label for="rohit">Rohit</label><br>
  <input type="radio" id="rahul" name="virat_kohli" value="rahul">
  <label for="rahul">Rahul</label><br>
  <button type="submit" name="btn">Check</button>
</form>

</body>
</html>
