<?php

namespace Model; 

use PDO;

class BaseModel extends Model
{
    
    public function getAllAvis(){
        
       $requete = "SELECT * FROM avis WHERE status = 1";
	   $resultat = $this -> getDb() -> query($requete);

	   $donnees = $resultat -> fetchAll(PDO::FETCH_ASSOC); 
	   
	   if(!$donnees){
		  return FALSE; 
	   }
	   else{
		   return $donnees;
	   }      
    }

    public function sendContact(){

     

        $requete = "INSERT INTO contact (nom, sujet, email, message) VALUES (:nom, :sujet, :email, :message)";
        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> execute(array(':nom'=>$_POST['nom'], ':sujet'=>$_POST['sujet'], ':email'=>$_POST['email'], ':message'=>$_POST['message']));


    }


    public function sendFranchaise(){

     

        $requete = "INSERT INTO franchaise (nom, prenom, email, ville, nom_societe, local, info) VALUES (:nomF, :prenomF, :emailF, :ville, :nomSociete, :local, :messageF)";
        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> execute(array(':nomF'=>$_POST['nomF'], ':prenomF'=>$_POST['prenomF'], ':emailF'=>$_POST['emailF'], ':ville'=>$_POST['ville'], ':nomSociete'=>$_POST['nomSociete'], ':local'=>$_POST['local'], ':messageF'=>$_POST['messageF']));


    }


    public function sendReserver(){

     

        $requete = "INSERT INTO reserver (nom, prenom, cell, date_reserver, no_perssonne, heure, message) VALUES (:nomR, :prenomR, :cell, :date_reserver, :no_perssonne, :heure, :messageR)";
        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> execute(array(':nomR'=>$_POST['nomR'], ':prenomR'=>$_POST['prenomR'], ':cell'=>$_POST['cell'], ':date_reserver'=>$_POST['date_reserver'], ':no_perssonne'=>$_POST['no_perssonne'], ':heure'=>$_POST['heure'], ':messageR'=>$_POST['messageR']));

    }
    
    
}