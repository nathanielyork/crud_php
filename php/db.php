<?php
try{
	$bdd=new PDO('mysql:host=localhost;dbname=boutiquedelivre;meta charset=utf-8','root','');
	}catch(Exceptions $e){
						die('Erreur:'.$e->getMessage());
 }
return $bdd;
?>