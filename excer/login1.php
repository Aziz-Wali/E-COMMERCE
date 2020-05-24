<?php

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ERSTE SCHRITTE MIT BRACKETS</title>
        <meta name="description" content="Ein interaktiver Wegweiser für die ersten Schritte mit Brackets.">
        <link rel="stylesheet" href="js/main.css">
        <style>
			html,body,*{
				margin: 0px;
				padding: 0px;
			}
			.register{
				
				width: 400px;
				height: 500px;
				display: block;
				border:1px solid #4cff00;
				text-align: center;
				margin-left: 430px;
				padding: 20px;
				margin-top: 14px;
				position: absolute;
				background-image: url(aziz/);
				background-color:lightgrey;
			
		
			}
			.div4{
				padding: 20px;
				color:#7489
			}
			.div1{
				padding: 10px;
			}
		
		</style>
        
    </head>
    <body>
        <?php echo 'hiiiiiiiiiiiiiiiiiiiiiiii';?>
		<form action="check.php" method= 'POST'>

	
		<div id="div" class="register">
		<div class="div4"> <h2>login</h2></div>
		<div class="div1">
			<input type="text" name=" username" value="" placeholder="please enter your user name">
			</div>
			
		<div class="div2"><input type="password" name="password" placeholder="password"></div>
		<div class="div3"><input type="submit"  name="submit"></div>
		
		</div>
		
			</form>
	</body>
</html>