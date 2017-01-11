#!/usr/bin/php
<?php
	$str = implode(" ", $argv);
	$tab = explode (" ", $str);
	unset($tab[0]);
	foreach ($tab as $value)
	{
		if (ctype_alpha($value[0]))
			$alpha[] = $value;
		else if (is_numeric($value[0]))
			$num[] = $value;
		else
			$special[] = $value;
	}
	if ($alpha)
		natcasesort($alpha);
	if ($num)
		sort($num, SORT_STRING);
	if ($special)
		natcasesort($spec);
	$tabfinal = array_merge((array)$alpha, (array)$num, (array)$special);
	for ($i = 0; $i < count($tabfinal); $i++)
		print($tabfinal[$i]) . "\n";
?>