#!/usr/bin/php
<?PHP
if ($argc != 2 && print("Incorrect Parameters\n"))
	return (FALSE);
if (!preg_match('/^ *(-?[0-9]+) *([\+\-\*\/\%]) *(-?[0-9]+) *$/', $argv[1], $tab))
{
	print("Syntax Error\n");
	return (FALSE);
}
$fp = $tab[1];
$sp = $tab[3];
$op = ord($tab[2]);
if (!is_numeric($fp) || !is_numeric($sp))
{
	print("Syntax sError\n");
	return (FALSE);
}
if ($op == 43)
        $fp = $fp + $sp;
else if ($op == 45)
        $fp = $fp - $sp;
else if ($op == 42)
        $fp = $fp * $sp;
else if ($op == 47)
{
	if ($sp != 0)
		$fp = $fp / $sp;
	else if (print("Division by zero\n"))
		return (FALSE);	
}
else if ($op == 37)
{
	if ($sp != 0)
		$fp = $fp % $sp;
	else if (print("Division by zero\n"))
		return (FALSE);	
}
else if (print("Syntax Error\n"))
        return (FALSE);
echo $fp."\n";
