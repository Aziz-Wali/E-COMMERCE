<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$user =$_POST['username'];
	echo $user."<br />";
   $fr = implode(',',$_POST['fruit']);
$de= explode(',',$fr);
foreach($de as $sy){
	echo  $sy ."</a><br>";
}}
   ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method= 'POST'>
		<input type="text" name="username"/><br>
		<input type="checkbox" name="fruit[]" value="apple"/>apple</br>
		<input type="checkbox" name="fruit[]" value="banana" />banana</br>
        <input type="checkbox" name="fruit[]" value="orang"/>orang</br>
		<input type="checkbox" name="fruit[]" value="kiwi" />kiwi</br>
		<input type="submit" value="add"></br>
</form>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
	$imag= $_FILES['up'];
	print_r($imag);}
	$imagename = $_FILES['up']['name'];
$imagetype = $_FILES['up']['type'];
$imagesiz = $_FILES['up']['size'];
$imagetem = $_FILES['up']['tmp_name'];
echo $imagetype;
echo $imagename;
echo $imagesiz;
echo $imagetem;
move_uploaded_file($imagetem, "C:\Users\Win10\Desktop\web1\\".$imagename);
?>
<form action="" method= 'POST' enctype="multipart/form-data">
		<input type="file" name="up"/><br>
		<input type="submit" name="" value="upload"></br>
		
</form>