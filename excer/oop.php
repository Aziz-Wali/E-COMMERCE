<?php //PHP OOP
class Home {
	public $door ='red';
	public $kitchen ='big';
	public $room = 'small';

	const MAX = 5;
	public function sayHi($a){
		$this->door =$a;
		if(strlen($a )< self :: MAX){
			echo 'too small';
		}else{
		echo 'this door is '.$a .'<br>';}
	}
}

$x = new Home();
$x->door;
$x->sayHi('green');
echo '<pre>';
var_dump($x);
echo '</pre>';
class bath extends Home {

}
$y= new bath();
$y->sayHi('closed');
//__________-----------_______________________
abstract class bmw {
	private $v ='waw';
abstract function sayBye($v);
}
class samsung extends bmw{
	public $q ='AZIZ';
	private $pass ='';
	public function password($n){
		$this->pass = $n;
echo sha1($n);
	}
public function sayBye($s){
	echo 'good Bye '.$s.'<br>';
	
}
}
$hh= new samsung ();
$hh->sayBye('sami');
echo $hh ->q .'<br>';
$hh-> password('123345');
//--------------------------
trait vw {
	public $speed ='140 kmh';
	public function welcome(){
		echo ' welcome from vw <br>';
	}
}
trait mercedes {
	public $color ='white';
	public function welcome(){
		echo ' welcome from mercedes <br>';
	}
}
class car {
	use vw,mercedes{
	mercedes::welcome insteadof vw ;}// becuase the two methods have the sme name ;
}

$wali = new car();
$wali->welcome();
echo $wali->speed;
echo __FILE__ .'<br>';
echo __DIR__ .'<br>';
echo realpath(dirname(__FILE__)).'<br>';
define('PATH', realpath(dirname(__FILE__)));
echo PATH.'<br>';
echo DIRECTORY_SEPARATOR.'<br>';
echo $_SERVER['REQUEST_URI'].'<br>';
echo parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);