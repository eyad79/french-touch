<?php

namespace Model; 

use PDO;

class BaseModel extends Model
{
    
    public function getAllAvis(){
        
       $requete     = "SELECT * FROM avis WHERE status = 1";
	   $resultat    = $this -> getDb() -> query($requete);

	   $donnees = $resultat -> fetchAll(PDO::FETCH_ASSOC); 
	   
	   if(!$donnees){
		  return FALSE; 
	   }
	   else{
		   return $donnees;
	   }      
    }
    
    
    public function sendContact(){
        
        $_POST['nom'] 		= "";
        $_POST['sujet'] 	= "";
        $_POST['email']		= "";
        $_POST['message'] 	= "";

  //      $requete    = "INSERT INTO contact (nom, sujet, email, message) VALUES (:nom, :sujet, :email, :message)";
  //      $resultat   = $this -> getDb() -> prepare($requete);
		
		// if($resultat -> execute($requete)){
		// 	return $this -> getDb() -> lastInsertId();
		// }
		// else{
		// 	return false;
		// }   
        
     
        // $requete    = "SELECT * FREOM contact WHERE nom=? AND sujet=? AND email=? AND message=?";
        // $resultat   = $this -> getDb() -> prepare($requete);
       //    
       // return $this -> register();
  //      $resultat = "INSERT INTO author (name, firstname, email, birth_date) VALUES (:name,:firstname,:email,:birth_date )";
//$resultat   -> execute(array($_POST['nom'], $_POST['sujet'], $_POST['email'], $_POST['message']));
        
         $requete    = "SELECT * FREOM contact WHERE nom=:nom AND sujet=:sujet AND email=:email AND message=:message";
         // $requete    = "INSERT INTO contact (nom, sujet, email, message) VALUES (:nom, :sujet, :email, :message)";
         $resultat   = $this -> getDb() -> prepare($requete);
         $resultat -> bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
         $resultat -> bindValue(':sujet', $_POST['sujet'], PDO::PARAM_STR);
         $resultat -> bindValue(':email', $_POST['email'], PDO::PARAM_STR);
         $resultat -> bindValue(':message', $_POST['message'], PDO::PARAM_STR);
         $resultat -> execute();
        
       // $resultat = $pdo -> prepare($sql);
       // $resultat -> bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
       // $resultat -> bindValue(':sujet', $_POST['sujet'], PDO::PARAM_STR);
       // $resultat -> bindValue(':email', $_POST['email'], PDO::PARAM_STR);
       // $resultat -> bindValue(':message', $_POST['message'], PDO::PARAM_STR);
       // $resultat -> execute();
        
       // var_dump($_POST);

    }
    
    
}