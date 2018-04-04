#!/usr/bin/php
<?PHP

while (7)
{
	echo "Enter a number: ";
	if ($num = fgets(STDIN)) 
	{
		$num = trim($num);
		if (is_numeric($num))
		{
			if ($num % 2)
				echo "The number $num is even";
			else
				echo "The number $num is odd";
		}
		else
			echo "'$num' is not a number";
		echo "\n";
	}
	else
	{
		echo "\n";
		break ;
	}
}
?>
