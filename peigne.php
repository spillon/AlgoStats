<?php
function insert($list)
{
	$popo = count($my_array);
        $swap = true;
	while ($popo > 1 || $swap){
		if($popo > 1) $popo /= 1.25;
 		$swap = false;
		$i = 0;
		while($i+$popo < count($my_array)){
			if($my_array[$i] > $my_array[$i+$popo]){
				list($my_array[$i], $my_array[$i+$popo]) = array($my_array[$i+$popo],$my_array[$i]);
				$swap = true;
			}
			$i++;
		}
	}
	return $my_array;
}
?>