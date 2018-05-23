<?php
include 'insert.php';
include 'select.php';
include 'bulles.php';
include 'shell.php';
include 'peigne.php';

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
	peigne($list);
}
?>