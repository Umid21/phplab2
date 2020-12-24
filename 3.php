<?php
$usefulSites=array(
     array("http://www.yandex.com","http://www.google.com",
                       "http://www.altavista.com"),
     array("http://www.php.com","http://www.rusdoc.ru")
);
echo "List of usefulSites elements:"."<br>";
for ($i=0;$i<$size=sizeof($usefulSites);$i++){
	foreach($usefulSites[$i] as $val){
		echo $val." ";
	}
	echo "<br>";
}
?>