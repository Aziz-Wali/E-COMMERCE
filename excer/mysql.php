<?php
$host= 'localhost';
$db = 'user';
$username='root';
$password='';
$c=mysqli_connect($host,$username,$password);
echo 'h';
if(!$c){

	die('bdhhd'.mysqli_error());
}

?>