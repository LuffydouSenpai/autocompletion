<?php

function connexionBDD()
{
	try
	{		
	$bdd = new PDO('mysql:host=localhost;port=3306;dbname=Netflix;', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); 
	}
	
	catch(Exception $e)
	{
		echo 'Erreur:'.$e->getMessage();
    }
	return $bdd;
}

/* function getEmployes(){

	$bdd = connexionBDD();

	$sql = 'SELECT * FROM employes';

	$reponse = $bdd->query($sql);

	$result = $reponse->fetchAll();

	return $result;
}

function setEmployes($prenom,$nom,$sexe,$service,$salaire){
	
	$bdd = connexionBDD();

	$sql = "INSERT INTO employes(prenom,nom,sexe,service,salaire) VALUE ('".$prenom."'".",". "'".$nom."'".",". "'".$sexe."'".",". "'".$service."'".","."'".$salaire."'".")";

	$reponse = $bdd->exec($sql);

	if($reponse==false)
	{
		echo "les information a pas été ajouté!";
	}
	else
	{
		echo "les information ont bien été ajouté !";
	}
}


function updateEmployes($prenom,$nom,$sexe,$service,$salaire, $id){
		
	$bdd = connexionBDD();

	$sql = "UPDATE employes SET prenom ='$prenom', nom ='$nom', sexe ='$sexe', service ='$service', salaire ='$salaire' WHERE id_employes=".$id ;

	$reponse = $bdd->exec($sql);
		
		if($reponse==false)
		{
			echo "les information a pas été modifié !";
		}
		else
		{
			echo "les information ont bien été modifié !";
		}
}

function get1Employe($id){

	$bdd = connexionBDD();

	$sql = 'SELECT * FROM employes WHERE id_employes ='.$id;

	$reponse = $bdd->query($sql);

	$result = $reponse->fetch();

	return $result;
}

function deleteEmployes($id){

	$bdd = connexionBDD();

	$sql = 'DELETE FROM employes WHERE id_employes ='.$id;

	$reponse = $bdd->query($sql);
}
 */