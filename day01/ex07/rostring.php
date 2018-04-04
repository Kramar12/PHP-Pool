#!/usr/bin/php
<?PHP

if ($argc < 2)
	exit ;
$p = preg_replace("/\s+/", " ", $argv[1]);
$arr = explode(" ", $p);
$i = 1;
while ($i < count($arr))
	echo $arr[$i++]." ";
echo $arr[0]."\n";

?>
