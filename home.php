<?php
include 'insert.php';
include 'select.php';
include 'bulles.php';

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
?>