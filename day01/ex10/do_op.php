#!/usr/bin/php
<?PHP
if ($argc != 4 && (print("Incorrect Parameters\n")))
        return (FALSE);
$fp = preg_replace('/\s+/', " ", trim($argv[1]));
$sp = preg_replace('/\s+/', " ", trim($argv[3]));
$top = preg_replace('/\s+/', " ", trim($argv[2]));
$op = ord($top);
if ($op == 43)
	$fp = $fp + $sp;
else if ($op == 45)
	$fp = $fp - $sp;
else if ($op == 42)
	$fp = $fp * $sp;
else if ($op == 47)
	$fp = $fp / $sp;
else if ($op == 37)
	$fp = $fp % $sp;
else if (print("Incorrect Parameters\n"))
	return (FALSE);
echo $fp."\n";
?>
