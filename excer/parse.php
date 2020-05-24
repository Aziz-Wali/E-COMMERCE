<?php 
$a= 'name=aziz&age=28&&hobby=xcjc';
parse_str($a);
echo $name."<br>";
echo $age;
echo $hobby;
$link ="https://www.youtube.com/watch?v=GUsEJxOochU&list=PLF8OvnCBlEY1bFcTW9JKKO7WJn_Bf9LZ1";
$pp=parse_url($link,PHP_URL_QUERY);
parse_str($pp,$bb);
echo "<pre>";
print_r($bb);
echo "</pre>";
echo '<ifram src="https://www.youtube.com/embed/' .$bb['v']. '"></ifram>';