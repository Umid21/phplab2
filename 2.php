<?php
$arr5=array(0=>"http://www.yandex.com", 
	1=>"http://www.google.com",
    "2"=>"http://www.altavista.com"); 
$arr6=array(2=>"http://www.yandex.com", 
	4=>"http://www.google.com",
    1=>"http://www.altavista.com");
echo "List of arr5 elements:"."<br>";
foreach($arr5 as $key=>$val){
	echo $key."=".$val."<br>";
}
echo "List of arr6 elements:"."<br>";
foreach($arr6 as $key=>$val){
	echo $key."=".$val."<br>";
} 
#List of arr6 elements  
echo "List of arr6 elements (without keys):"."<br>";
foreach($arr6 as $x){
	echo $x."<br>";
}
$arr7=array(2=>"Second", 
	4=>"Fourth",
	0=>"Zeroth",
	3=>"Third",
    1=>"First");
echo "List of arr7 elements (original for):"."<br>";
for ($i=0;$i<$size=sizeof($arr7);$i++){
	echo $i."=".$arr7[$i]."<br>";
}
echo "List of arr7 elements (foreach):"."<br>";
foreach($arr7 as $a=>$x){
	echo $a."=>".$x."<br>";

#echo "List of arr7 elements (foreach):"."<br>";
#foreach($arr7 as $a=>$x){
	#echo $a."=>".$x."<br>";
}
?>