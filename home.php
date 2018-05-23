<?php
include 'insert.php';
include 'select.php';
include 'bulles.php';
include 'shell.php';
include 'peigne.php';
include 'rapide.php';
include 'fusion.php';

$input = $_POST['nombres'];
$choix = $_POST['choix'];
echo "Voici votre liste: ".$input."<br>";
$list = explode(";", $input);

if ($choix == 1)
{
	insert($list);
}

else if ($choix == 2)
{
	select($list);
}

else if ($choix == 3)
{
	bulles($list);
}

else if ($choix == 4)
{
	shell($list);
}
else if ($choix == 5)
{
	$iter = 0;
	echo "Tri fusion: <br>";
	$timestamp_debut = microtime(true);
	$iter = fusion($list, $iter);
	$timestamp_fin = microtime(true);
	$difference_ms = $timestamp_fin - $timestamp_debut;
	$i = 0;
	while ($i < count($list))
	{
		echo $list[$i]." ";
		$i++;
	}
	echo "<br>"."Nombre d'iteration: ".$iter;
	echo "<br>"."Temps d'execution : ". $difference_ms . " secondes.";
}
else if ($choix == 6)
{
	$iter = 0;
	echo "Tri rapide: <br>";
	$timestamp_debut = microtime(true);
	$iter = rapide($list, 0, count($list) - 1, $iter);
	$timestamp_fin = microtime(true);
	$difference_ms = $timestamp_fin - $timestamp_debut;
	$i = 0;
	while ($i < count($list))
	{
		echo $list[$i]." ";
		$i++;
	}
	echo "<br>"."Nombre d'iteration: ".$iter;
	echo "<br>"."Temps d'execution : ". $difference_ms . " secondes.";
}
else if ($choix == 7)
{
	peigne($list);
}
?>