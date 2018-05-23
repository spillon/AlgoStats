<?php
function tri_rapide(&$list, $debut, $fin, &$iter) 
{
    if ($debut < $fin) 
    {
    	$pivot = partitionnement($list, $debut, $fin, $iter);
    	$iter ++;
        tri_rapide($list, $debut, $pivot - 1, $iter);
        tri_rapide($list, $pivot +1, $fin, $iter);
    }
    return $iter;
}

function partitionnement(&$list, $debut, $fin, &$iter) 
{
    $pivot=$list[$fin];  
	$j = ($debut - 1);
	for ($i= $debut; $i <= $fin - 1; $i++) { 
		if ($list[$i] <= $pivot) {
			$j++;
			$tmp = $list[$i];
			$list[$i] = $list[$j];
			$list[$j] = $tmp;
		}
	}
	$tmp = $list[$j + 1];
	$list[$j + 1] = $list[$fin];
	$list[$fin] = $tmp;
	return $j + 1;
}
?>