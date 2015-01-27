<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>practice1</title>
<style>
</style>
<!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<?php
$array =  array("red" => "R" , "bule" => "B" , "green" => "G" , "yellow" => "Y" , "pink" => "P");

foreach ($array as $name => $short)
{
	echo $name.':'.$short;
	echo "<br />";
}
?>	
</body>
</html>