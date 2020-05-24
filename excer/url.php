
<?php 
function set($name){
  global $pagename;
  if ($pagename==$name){
  	echo 'class= "activ"';
  }

}


?>
<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="UTF-8">
        <title ><?php if(isset($pagename)){ echo $pagename;}?></title>
        <style>
        	.activ{
        		color:red;
        		font-weight: bold;
        		width:40px;
        		height: 20px;
        		background-color:red;
        		border: 1px solid #765;
        	}
        </style>
        
    </head>
    <body>

    	
    		<div <a<?php set('call')?> href="call.php"> call</div>
    		<div><a <?php set('servic')?> href="servic.php">servic</a></div>
    		<div><a <?php set('about')?> href="about.php">about</a></div>
    		
    		

    	
    </body>
    </html>