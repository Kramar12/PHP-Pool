#!/usr/bin/php
<?PHP

function	ct($p)
{
	if (($ret = ord($p)) >= 48 && $ret <= 57)
		$ret += 1000;
	else if ($ret >= 65 && $ret <= 90)
		$ret += 32;
	else if	($ret >= 97 && $ret <= 122)
		$ret += 0;
	else
		$ret += 10000;
	return ($ret);
}

function	masort($p1, $p2)
{
	$l1 = strlen($p1);
	$l2 = strlen($p2);
	$i = 0;
	while ($i < $l1 && $i < $l2)
		if (ct($p1[$i]) > ct($p2[$i]))
			return 1; 
		else if ((ct($p1[$i]) < ct($p2[$i])) || !(++$i))
			return -1;
	return ($l1 == $l2) ? (0) : (($l2 == $i) ? 1 : -1);
}

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
usort($arr, "masort");
$i = 0;
$c = count($arr);
while ($i < $c)
	echo $arr[$i++]."\n";
?>
