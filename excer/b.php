<?php
$operator = $_POST['operator'];
?>

<DOCTYPE html>
	<html>
<head><link rel="stylesheet" href= <?php if(isset($operator)){switch ($operator) {
	case 'red':
		echo '"red.css"';
		break;
	case 'green':
	echo "'green.css'";
	case 'blue':
	echo "'blue.css'";
	
}}?>></head>
<body style="">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= 'POST'>
		<input type="color" name="color">


			<select name="operator">
			<option style="background-color:">red</option>
			<option style="background-color: " >green</option>
			<option style=>blue</option>
		</select>
		<input type="submit" name="">
   
	
	</form>
	
	<h2 > helloooooooo </h2>
</body></html>