<?php			
function echange(&$list, $i, $j)
{
	$iter = 0;
    if ($i != $j) 
    {
        $temporaire = $list[$i];
        $list[$i] = $list[$j];
        $list[$j] = $temporaire;
    }
}
	function select(&$list)
		{
			$iter = 0;
			$timestamp_debut = microtime(true);
			$taille = count($list);
			echo "Tri par selection";
			for ($i = 0; $i < $taille - 1; ++$i) 
		  {
		    $i_min = $i;
		    for ($j = $i+1; $j < $taille; ++$j)
		    if ($list[$j] < $list[$i_min])
		    $i_min = $j;
		    echange($list,$i,$i_min);
		  }
		  $i = 0;
		  while ( $i < count($list)) 
			{
				echo $list[$i];
				$i++;
				$iter++;
			}
		$timestamp_fin = microtime(true);
		$difference_ms = $timestamp_fin - $timestamp_debut;
		echo "<br>"."Voici le nombre d'interation :".$iter;
		echo "<br>"."Temps d'execution : ". $difference_ms . " secondes.";
		}

?>