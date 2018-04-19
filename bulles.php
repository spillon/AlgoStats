<?php

function bulles($list)
{
	$iter = 0;
	$timestamp_debut = microtime(true);
	echo "Tri a bulles";
	for ($i = 0; $i < count($list); $i++)
	{
		for ($j = 0; $j < (count($list) - $i -1); $j++)
		{
			if ($list[$j] > $list[$j + 1])
			{
				$tmp = $list[$j + 1];
				$list[$j + 1] = $list[$j];
				$list[$j] = $tmp;
				$iter++;
			}
			$iter++;
		}
		$iter++;
	}
	$timestamp_fin = microtime(true);
	$difference_ms = $timestamp_fin - $timestamp_debut;
	$i = 0;
	echo "<br>"."Voici votre liste triee: ";
	while ($i < count($list))
	{
		echo $list[$i]." ";
		$i++;
	}
	echo "<br>"."Nombre d'iteration: ".$iter;
	echo "<br>"."Temps d'execution : ". $difference_ms . " secondes.";
}
?>