<?php
function shell($list)
{
	$i = 0;
	$h = 0;
	$iter = 0;
	$timestamp_debut = microtime(true);
	echo "Tri par Shell";
    while ($h <= count($list))
    {
    	$h = 3* $h + 1;
    }

     while ($h > 1)
     {
     	$h = (int)($h / 3);
     	for ($i = $h; $i < count($list); ++$i)
     	{
            if ($list[$i] < $list[$i - $h])
            {
                 $v = $list[$i];
                 $j = $i;
                 while ($j >= $h  &&  $list[$j - $h] > $v)
                 {
                       $list[$j] = $list[$j-  $h];
                       $j = $j - $h;
                       $iter++;
                 }
                 $list[$j] = $v;
                 $iter++;
            }
        }
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