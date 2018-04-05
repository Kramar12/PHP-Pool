#!/usr/bin/php
<?PHP

if ($argc < 2)
	return ;
$i = 1;
$c = 1;
while ($c < $argc)
{
	$j = 0;
	$p = preg_replace("/\s+/", " ", $argv[$c++]);
	$p = trim($p);
	$tab = explode(" ", $p);
	while ($j < count($tab))
		$arr[$i++] = $tab[$j++];
	$i += $j ? 0 : 1;
	$tab = NULL;
	$p = NULL;
}
if (!sort($arr))
	return (FALSE);
$c = count($arr);
$i = 0;
while ($i < $c)
	echo $arr[$i++]."\n";
?>
