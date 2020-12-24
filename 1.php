<?php
$arr1 = array();
$arr2= array("http://www.yandex.com", 
		"http://www.google.com",
        "http://www.altavista.com");
$arr3=array("yandex"=>"http://www.yandex.com", 
		"google"=>"http://www.google.com",
        "bing"=>"http://www.altavista.com");
		
#echo $arr1;
#echo $arr2;
#echo $arr3;
echo "arr1 length = ".sizeof($arr1)."<br>";
echo "arr2 length = ".sizeof($arr2)."<br>";
echo "arr3 length = ".sizeof($arr3)."<br>";
echo "List of arr1 elements:"."<br>";
for ($i=0;$i<$size=sizeof($arr1);$i++){
	echo $i."=".$arr1[$i]."<br>";
}
echo "List of arr2 elements:"."<br>";
for ($i=0;$i<$size=sizeof($arr2);$i++){
	echo $i."=".$arr2[$i]."<br>";
}
echo "arr1 var_dump:"."<br>";
var_dump($arr1);
echo "<br>";
echo "arr1 print_r:"."<br>";
print_r($arr1);
echo "<br>";
print_r($arr1);
echo "<br>";
echo "arr2 var_dump:"."<br>";
var_dump($arr2);
echo "<br>";
echo "arr2 print_r:"."<br>";
print_r($arr2);
echo "<br>";
echo "arr3 var_dump:"."<br>";
var_dump($arr3);
echo "<br>";
echo "arr3 print_r:"."<br>";
print_r($arr3);
echo "<br>";
$arr4 = array(1,"asd",array(2,3));
#echo $arr4;
echo "arr3 var_dump:"."<br>";
var_dump($arr4);
echo "<br>";
echo "arr3 print_r:"."<br>";
print_r($arr4);
echo "<br>";
$var1=23;
echo "var1 var_dump:"."<br>";
var_dump($var1);
echo "<br>";
echo "var1 print_r:"."<br>";
print_r($var1);

echo "arr3 var_dump:"."<br>";
var_dump($arr4);
echo "<br>";
echo "arr3 print_r:"."<br>";
print_r($arr4);
echo "<br>";
$var1=23;
echo "var1 var_dump:"."<br>";
var_dump($var1);
echo "<br>";
echo "var1 print_r:"."<br>";
print_r($var1);
?>