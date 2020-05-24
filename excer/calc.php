 <form>
	<input id="id" type="text" name="num1">
	<input type="text" name="num2">
	<input type="submit">

<select name="operator">
	<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
</form>
<script type=>
	document.getElementById('id').style.color='red';
</script>



 <?php

	
     $a = $_GET['num1'];
     $b = $_GET['num2'];
     $operator=$_GET['operator'];
     if(isset($operator)){

     	switch ($operator) {
     		case '+':
     			echo $a+$b;
     			break;
     			case '-':
     			echo $a-$b;
     			break;

     		case '*':
     			echo $a*$b;
     			break;
     			case '/':
     			echo $a/$b;
     			break;
     		default:
     			echo $a*$b;
     			break;
     	}
     }
	



?>
