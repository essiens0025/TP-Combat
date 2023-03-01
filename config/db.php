<?php 

// PDO Connection
try
{
	$db = new PDO(
        'mysql:host=57.128.65.58;dbname=ahmed_semih_serhat_tpC;charset=utf8', 
        'serhat', 
        'Serhat10',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
