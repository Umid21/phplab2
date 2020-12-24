<?php
$arr7["yandex"]="http://www.yandex.com"; 
    $arr7["google"]="http://www.google.com";
    $arr7["altavista"]="http://www.altavista.com"; 
echo "List of arr7 elements (with each iterator):"."<br>";	
while($x=each($arr7)){
	print_r($x);
	echo "<br>";
}
echo "List of arr7 elements(with each iterator and list construction):"."<br>";
reset($arr7);
while(list($key,$val)=each($arr7)){
	echo $key."=".$val."<br>";
}
echo "<br>";
echo "List of _SERVER elements(with each iterator and list construction):"."<br>";
while(list($key,$val)=each($_SERVER)){
	echo $key."=".$val."<br>";
}
?>