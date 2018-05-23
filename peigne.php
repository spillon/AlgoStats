<?php
function peigne($list)
{
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
			}
			$i++;
		}
	}
	return $list;
}
?>