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
        }


    }


    /*------------- dashboard ------------------*/

    public function changeStatus(){

        
        


         //$newValues     = $_POST['status'];
         //$nom   = $_POST['nom'];

         //var_dump('nom= '.:nom);
         //var_dump($nom);

        // $requete     = "UPDATE avis SET status = :status WHERE nom= :nom" ;
        // $resultat    = $this -> getDb() -> prepare($requete);
        // $resultat    -> execute(array(':status'=>$_POST['status']));
        // $resultat->bindValue(':status', $status, PDO::PARAM_STR);
        // $resultat->bindValue(':nom', $nom_avis, PDO::PARAM_STR);
        // $resultat->execute();


        //$requete = "UPDATE avis set " . $newValues . " WHERE id_avis avis=:id";
        // $requete = "UPDATE avis SET status = :status WHERE id_avis =(SELECT id_avis FROM (
        // SELECT id_avis FROM avis  )  ";
        // $resultat = $this -> getDb() -> prepare($requete);
        // $resultat -> execute(array(':status'=>$status));
         

        // $requete = "INSERT INTO avis (status) VALUES (:status)";
        // $resultat = $this -> getDb() -> prepare($requete);
        // $resultat -> execute(array(':status'=>$_POST['status']));

        // $newValues = '';
        // $first = FALSE; 
        // foreach($infos as $key => $value){
        //     if($first == FALSE){
        //         $newValues .= " $key = :$key ";
        //         $first = TRUE;
        //     }
        //     else{
        //         $newValues .= ", $key = :$key ";
        //     }
        // }

        //$status = $_POST['status'];
        //$id = $_POST['id'];
        //$nom = $_POST['nom'];

        //$requete = "UPDATE  avis SET  $status  WHERE nom=:nom";
        
        
        //echo $requete; 
        //$resultat = $this -> getDb() -> prepare($requete);
        //$infos['status'] = $status;
        // la ligne ci-dessous est pour ajouter notre id passé en parametre dans l'array de la méthode execute(); 
        //$resultat -> execute();



        /*--------------------------*/

        // $newValues = '';
        // $first = FALSE; 
        // foreach($infos as $key => $value){
        //     if($first == FALSE){
        //         $newValues .= " $key = :$key ";
        //         $first = TRUE;
        //     }
        //     else{
        //         $newValues .= ", $key = :$key ";
        //     }
        // }
        $id_avis = $_POST['id_avis']; 
        // $status = $_POST['status'];

        $requete = "UPDATE avis set status WHERE id_avis =:id_avis";
        $resultat = $this -> getDb() -> prepare($requete);
        $infos['id_avis'] = $id_avis;
        // la ligne ci-dessous est pour ajouter notre id passé en parametre dans l'array de la méthode execute(); 
        return $resultat -> execute($infos, $id_avis);




    }

    public function sendAvis(){

        $requete = "INSERT INTO avis (note, nom, date_avis, content) VALUES (:note, :nom, :date_avis, :content)";
        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> execute(array(':note'=>$_POST['note'], ':nom'=>$_POST['nom'], ':date_avis'=>$_POST['date_avis'], ':content'=>$_POST['content']));
    }
    
    
}