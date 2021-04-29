<?php

//Conexao com a Base Dado recursos

function conectar(){
	try{
		$pdo= new PDO("mysql:host=localhost;dbname=recursos","root","root");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	
	return $pdo;
}
?>