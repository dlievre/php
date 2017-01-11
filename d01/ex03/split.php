#!/usr/bin/php
<?php
function ft_split($str)
{
	$str = trim($str, ' ');
	$tab = explode(' ', $str);
	sort($tab);
	return ($tab);
}
?>