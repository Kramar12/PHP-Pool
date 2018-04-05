<?PHP
function ft_split($p1)
{
	if ($p1)
	{
		$p1 = preg_replace("/\s+/", " ", $p1);
		$tab = explode(" ", $p1);
		$i = 0;
		$j = 0;
		while ($i < count($tab))
		{
			if (($tab[$i] = trim($tab[$i])))
				$arr[$j] = $tab[$i];
			$i++;
			$j++;
		}
		if ($arr)
			sort($arr);
		else
			return (NULL);
		return ($arr);
	}
}
?>
