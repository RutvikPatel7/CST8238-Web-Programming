<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>
<body>


<?php 
require "Header.php";
require "Menu.php";?>

<?php // NO key Array output?>
<h3> No Key Array - Output using var_dump </h3>

<?php $noKeyArray = array(10,20,30,40);
var_dump($noKeyArray);
?>
<br>

<h3> No Key Array - Output using foreach </h3>
<?php 
foreach($noKeyArray as $key => $value){
echo " Key:".$key." Value:".$value." Key data type:".gettype($key);
echo "<br>";
}
?>

<?php // String key Array output?>
<h3> String Key Array - Output using var_dump </h3>
<?php
$stringKeyArray = array("key1" => "item1","key2" =>"item2");

var_dump($stringKeyArray);
?>
<br>

<h3> String Key Array - Output using foreach </h3>
<?php 
foreach($stringKeyArray as $key => $value){
echo " Key:".$key." Value:".$value." Key data type:".gettype($key);
echo "<br>";
}
?>


<?php // Integer key Array output?>
<h3> Integer Key Array - Output using var_dump </h3>
<?php 
$intKeyArray = array(0 => "item1", 1 =>"item2", 2 =>"item3");
var_dump($intKeyArray);
?>

<br>

<h3> Integer Key Array - Output using foreach </h3>
<?php 
foreach($intKeyArray as $key => $value){
echo " Key:".$key." Value:".$value." Key data type:".gettype($key);
echo "<br>";
}
?>

<?php // Mixed key Array output?>
<h3> Mixed Key Array - Output using var_dump </h3>
<?php 
$mixedKeyArray = array("key1" => "item1", "key2" =>"item2", 2 =>"item8",4 =>"item4",5 =>"item5",3 =>"item6",1 =>"item7");
var_dump($mixedKeyArray);
?>
<br>

<h3> Mixed key Array - Output using foreach </h3>
<?php 
foreach($mixedKeyArray as $key => $value){
echo " Key:".$key." Value:".$value." Key data type:".gettype($key);
echo "<br>";
}
?>


<?php // Multi Dimensional Array output?>
<h3> Multi-Dimensional Key Array - Output using var_dump </h3>
<?php 
$multiDimensionArray = array(0 => array(0 => 10, 1 => 20), 1 => array(0 => 30, 1 => 40));
var_dump($multiDimensionArray);
?>
<br>

<h3> Multi-Dimensional Array - Output using foreach </h3>
<?php 
foreach($multiDimensionArray as $key => $array){
echo "Level: 1 key:".$key;
echo "<br>";
foreach($array as $key => $value){
	echo " Level: 2 key:".$key." Value:".$value." Key data Type:".gettype($key);
		echo "<br>";
		}
}
 	require "Footer.php";?>
</body>
<p></p>
<p></p>
<p></p>

</html>