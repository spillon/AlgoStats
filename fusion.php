<?php
function fusion ( &$list, $iter) 
{
	 if( count($list) <= 1)
	 {	
	 	return;
	 }
	 else 
	 {
		$list1 = array();
		$list2 = array();
		for ($i = 0; $i < count($list); $i++) 
		{
			if ($i < ( count($list)) / 2)
				$list1[] = $list[$i];
			else
				$list2[] = $list[$i];
		}
		$iter++;
		print $iter;
		fusion($list1, $iter);
		fusion($list2, $iter);
		fusionner($list1, $list2, $list);
	}
	return $iter;
}

function fusionner ($list1, $list2, &$list) 
{
	$i = 0;
	$i1 = $i2 = 0;
	while($i1 < count($list1) && $i2 < count($list2)) 
	{
		if ($list1[$i1] < $list2[$i2])
			$list[$i] = $list1[$i1++];
		else
			$list[$i] = $list2[$i2++];
		$i++;
	}
	while ($i1 < count($list1)) 
	{
		$list[$i] = $list1[$i1++];
		$i++;
	}
	while ($i2 < count( $list2)) 
	{
		$list[$i] = $list2[$i2++];
		$i++;
	}
}
?>