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

     public function getAllAvisDashboard(){
        
       $requete = "SELECT * FROM avis";
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


    public function admin(){
    	//session_start();  
    	session_start(); 
        print_r($_SESSION); 

        $username   = $_POST['username']; 
        $password   = $_POST['password'];
        $hashedPass = sha1($password); 
     
        // check if user exist in BDD 

        $requete = "SELECT username, password FROM user WHERE username=:username AND password=:password AND id_group=1";
        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> execute(array(':username'=>$username, ':password'=>$hashedPass));
        $count = $resultat -> rowCount (); 

        // echo $count;

        if ($count > 0) {
            echo 'Welcome' . ' ' . $username; 
            $_SESSION['username'] = $username;
            header('Location: dashboard');
            exit();
        } else {
            echo '<script>alert ("username or password is wrong") </script>'; 
            // header('Location: accueil');
            // exit();
        }


    }


    /*------------- dashboard ------------------*/

    public function changeStatus(){

            $requete = "UPDATE avis SET status = :status WHERE id_avis = :id_avis";
            $resultat = $this -> getDb() -> prepare($requete);
            $resultat->bindValue(':id_avis', $_POST['id_avis'], PDO::PARAM_INT);
            $resultat->bindValue(':status', $_POST['status'], PDO::PARAM_INT);
            $resultat -> execute();
            header("Refresh:0");       
    
        // la ligne ci-dessous est pour ajouter notre id passé en parametre dans l'array de la méthode execute(); 

    }

    public function sendAvis(){

        $requete = "INSERT INTO avis (note, nom, date_avis, content) VALUES (:note, :nom, :date_avis, :content)";
        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> execute(array(':note'=>$_POST['note'], ':nom'=>$_POST['nom'], ':date_avis'=>$_POST['date_avis'], ':content'=>$_POST['content']));
    }

     public function deletAvis(){
        $requete = "DELETE FROM `avis` WHERE  id_avis = :id_avis_delet ";
        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> bindValue(':id_avis_delet', $_POST['id_avis_delet'] , PDO::PARAM_INT); 
        $resultat -> execute();
        header("Refresh:0"); 
        
    }
    public function deletReservation(){
        $requete = "DELETE FROM `reserver` WHERE  id_reserver = :id_reserver ";
        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> bindValue(':id_reserver', $_POST['id_reserver'] , PDO::PARAM_INT); 
        $resultat -> execute();
        header("Refresh:0"); 
        
    }
    

    public function getReserver(){
        
       $requete = "SELECT * FROM reserver";
       $resultat = $this -> getDb() -> query($requete);

       $donnees = $resultat -> fetchAll(PDO::FETCH_ASSOC); 
       
       if(!$donnees){
          return FALSE; 
       }
       else{
           return $donnees;
       }      


    }

     public function sendLienYoutube(){

        $requete = "INSERT INTO youtube (lien) VALUES (:lien)";
        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> execute(array(':lien'=>$_POST['lien']));
    }

    //  public function getLienYoutube(){
        
    //    $requete = "SELECT lien FROM youtube";
    //    $resultat = $this -> getDb() -> query($requete);

    //    $donnees = $resultat -> fetchAll(PDO::FETCH_ASSOC); 
    //    var_dump($donnees);
    //    if(!$donnees){
    //       return FALSE; 
    //    }
    //    else{
    //        return $donnees;
    //    }
    // }      
    
}