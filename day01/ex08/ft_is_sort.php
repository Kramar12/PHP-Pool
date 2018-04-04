<?PHP // what i have to do with null?
function ft_is_sort($p1)
{
	if (!($p1))
		return (TRUE);
	$arr = $p1;
	sort($arr);
	$i = 0;
	while ($i < count($p1))
		if (strnatcmp($arr[$i], $p1[$i]))
			return (FALSE);
		else
			$i++;
	return (TRUE);
}
?>
