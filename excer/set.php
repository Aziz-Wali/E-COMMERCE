<?php 
function set($name){
  global $pagename;
  if($pagename==$name){
  	echo 'class="activ"';
  }

}




?>
<!DOCTYPE html>
<html>
 <head>
        <meta charset="UTF-8">
        <title ><?php if(isset($pagename)){ echo $pagename;}?></title>
        <style>
        	.activ{
        		color:red;
        		font-weight: bold;
        	}
        </style>
        
    </head>
    <body>

    	<ul>
    		<li><a <?php set('call') ?> href="call.php">call</a></li>
    		<li><a <?php set('servic') ?> href="servic.php">servic</a></li>
    		<li><a <?php set('about') ?> href="about.php">about</a></li>
    	</ul>
    </body>
    </html>