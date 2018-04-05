#!/usr/bin/php
<?PHP

$i = 0;
while ($i++ < $argc)
{
	print($argv[$i]);
	if ($i < $argc)
		echo "\n";
}
?>
