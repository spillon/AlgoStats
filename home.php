<?php
include 'insert.php';

$input = $_POST['nombres'];
$choix = $_POST['choix'];
echo "Voici votre liste: ".$input."<br>";
$list = explode(";", $input);

if ($choix == 1)
{
	insert($list);
}

if ($choix == 2)
{
	select($list);
}
?>