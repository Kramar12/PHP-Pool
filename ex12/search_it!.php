#!/usr/bin/php
<?PHP
$i = 2;
while ($argv[$i])
{
	$temp = explode(":", $argv[$i++]);
	if (!strcasecmp($temp[0], $argv[1]) && ($sw = true))
		$res = $temp[1];
}
if ($sw)
	echo $res."\n";
?>
