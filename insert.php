<?php
function insert($list)
{
	$i = 0;
	$iter = 0;
	$timestamp_debut = microtime(true);
	//tri par insertion
	echo "Tri par insertion";
	for ($i; $i < count($list); $i++)
	{
		//enregistrement de la case à trier
		$tmp = $list[$i];
		//recherche de la bonne position et décalage
		$j = $i - 1;
		while($j >= 0 && $tmp < $list[$j])
		{
			$list[$j + 1] = $list[$j];
			$j--;
			$iter++;
		}
		//insertion de la valeur
		$list[$j + 1] = $tmp;
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