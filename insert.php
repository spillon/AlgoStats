<?php
function insert($list)
{
	$i = 0;
	//tri par insertion
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
		}
		//insertion de la valeur
		$list[$j + 1] = $tmp;
	}
	print_r($list);
}
?>