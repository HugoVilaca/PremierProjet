<?php

function connectToSQL()
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=utf8', 'root', '');
			}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	return $bdd;
}

?>
