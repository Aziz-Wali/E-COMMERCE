<?php 
$user ="root";
$host="";
$password ="";
$db="mysql:host=localhost;dbname=shop";
$options=array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');
try{
$connection =new PDO($db,$user,$password,$options);
$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo '<h2>connected</h2>';
}
catch(PDOException $e){
echo 'not connect'.$e->getMessage();

}


if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST['file'])):
 $image_name =$_FILES['file']['name'];
 $image_type =$_FILES['file']['type'];
 $image_size =$_FILES['file']['size'];
 $image_tmp =$_FILES['file']['tmp_name'];
 $image_error =$_FILES['file']['error'];
 $n=".";

 $extensions = array("gif","jfif","jpg","png","webp","jpeg");
 $all_images =[];
 $errors =[];

var_dump($image_name );
$count = count($image_name);

if($image_error[0]===4){
	echo'<h2> sorry no file choosen </h2>';
	
}else{
for($i=0;$i<$count; $i++){
	

	if(empty($image_name[$i])){
		$errors[]= 'Sorry File Cannot Be empty '. $image_name[$i];
	}
	if($image_size[$i]>49000){
		$errors[]= 'sorry Too Big size '. $image_name[$i];
	}
	$image_extension[$i] = end(explode(".", $image_name[$i]));
    
   
	if(! in_array($image_extension[$i], $extensions)){
		$errors[]= 'sorry extension not allwoed '. $image_name[$i];
	}
if(empty($errors)){
	$image_rand[$i]= rand(0,99999999999).$image_name[$i];
move_uploaded_file( $image_tmp[$i], 'upload/'.$image_rand[$i]);
$all_images[]= $image_rand[$i];


$images_str= implode(',',$all_images);

var_dump($images_str);


}else{
	foreach($errors as $error ){
		echo '<div>'.$error.'</div>';
	}
}
}

}


$q ="INSERT INTO test(test) VALUE(:test)";
$data=$connection->prepare($q);
$data->execute([':test'=>$images_str]);
if($data){
	echo '<h2> Image inserted </h2>';
	
}
header('refresh:1;'.$_SERVER['PHP_SELF']);
endif;

}
$output =$connection->prepare("SELECT * FROM test");
$output->execute();
$infos =$output->fetchAll();

foreach($infos as $info){
	$n= explode(',',$info['test']);
	for($i=0;$i<count($n);$i++){
		echo'<img src="upload/'. $n[$i].'"><br>';
	
	}
}

















echo " helloxxx"."<br>";
$a = "aziz";
$qq = "waliiii";
echo $a ." ". $qq;


function ticket ($name, $age){
	$a = rand(4545,9808);
	if ($age>= 25){
	$hi = "hello " . $name ." your age is " .$age;
	$hi .= "you can get a ticket ";
	$hi .= " your ticket ID is " . $a ;}
else{
	$hi = "hello" .$name . " your age is " .$age ." you cannot get aticket";
}
return $hi ;
}
echo ticket('aziz','20');
$array = array ("aziz" , "wali", "abd ", " aab");
echo "<pre>";
print_r($array);
echo " </pre>";
$rand = array_rand($array,3);

echo $array[$rand[0]] ."<br>";
echo $array[$rand[1]]."<br>";
echo $array[$rand[2]]."<br>";
echo "<------------------>" ."<br>";
//print_r($array);

$lg =array_fill(1,6,array("aziz","wali","abd"));
echo "<br>";
echo "<pre>";
print_r($lg);
echo "</pre>";
$lg1 =array_fill(1,6,array_fill(2,7,"aziz"));
echo "<br>";
echo "<pre>";

print_r($lg1);
echo "</pre>";
$n = "aziz wali <br />";
$n= str_repeat($n,14);
echo $n;
$x= strlen($n);echo $x;
$m = "hello i learn php since 12.12 ";
$p = str_split($m,1);echo "<pre>";
print_r($p);echo "</pre>";
$k = "green,red,red,blue";
$s= explode(",",$k);
echo "<pre>";
print_r($s);echo "</pre>";


$mainColor = '#fff';
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['color'])):
	$mainColor =$_POST['color'];
	setcookie('background',$mainColor,time()+86400,"/");

if(isset($_COOKIE['background'])){
	$body = $_COOKIE['background'];

}else{
	$body=$mainColor;
	
}
endif;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Aziz</title>

</head>
<body style="background-color:<?php echo $body; ?>">

<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
<input type="file" name="file[]" multiple="multiple">
<div>
<input type="submit" value= "Send">
</div>
</form>

	<form action="<?php  $_SERVER['PHP_SELF'] ?>"  method= 'POST'>
		<input type="color" name="color">
		<input type="submit" name="submit">
	</form>
	<select name="year">
<?php
 for($year=1920; $year<=2020 ;$year++){
	echo "<option value='$year'>" . $year . "</option>";
}
?>
</select>
</body></html>
