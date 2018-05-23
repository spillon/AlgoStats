<?php
function peigne($list)
{
	echo "Tri peigne: ";
	$iter = 0;
	$timestamp_debut = microtime(true);
	$popo = count($list);
        $swap = true;
	while ($popo > 1 || $swap){
		if($popo > 1) $popo /= 1.25;
 		$swap = false;
		$i = 0;
		while($i+$popo < count($list)){
			if($list[$i] > $list[$i+$popo]){
				list($list[$i], $list[$i+$popo]) = array($list[$i+$popo],$list[$i]);
				$swap = true;
				$iter++;
			}
			$iter++;
			$i++;
		}
	}
	$timestamp_fin = microtime(true);
	$difference_ms = $timestamp_fin - $timestamp_debut;
	$i = 0;
	echo "<br>"."Voici votre liste triee: ";
	while ($i < count($list))
	{
		print  $list[$i]." ";
		$i++;
	}
	echo "<br>"."Nombre d'iteration: ".$iter;
	echo "<br>"."Temps d'execution : ". $difference_ms . " secondes.";
}
?>