#!/usr/bin/php
<?PHP

if ($argc != 2)
	exit ;
$p1 = preg_replace('/\s+/', ' ', $argv[1]);
$p1 = trim($p1);
echo "$p1\n";

?>
