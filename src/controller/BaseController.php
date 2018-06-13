<?php

namespace Controller; 

class BaseController extends Controller
{
    
    public function accueil(){
        
       // 1 : Si besoin d'infos de la BDD... on demande à notre model ($this -> getModel()) les infos. 
        $avis = $this -> getModel() -> getAllAvis();
        
        
       // Retourner la vue. 
        
        $params= array(
            'title' => 'Accueil',
            'avis' => $avis    
        );
        
        return $this -> render('layout.html', 'home.html', $params);
    }
    
    
    public function concept(){
        
        $params = array(
            'title' => 'Concept'   
        );
        
        return $this -> render('layout.html', 'concept.html', $params);
        
    }
    
    
    
    public function contact(){
        
        $erreur = "";
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
            $nom   = filter_var($_POST['nom'],      FILTER_SANITIZE_STRING );
            $sujet = filter_var($_POST['sujet'],    FILTER_SANITIZE_STRING );
            $email = filter_var($_POST['email'],    FILTER_SANITIZE_EMAIL ); 
            $msg   = filter_var($_POST['message'],  FILTER_SANITIZE_STRING );

            // echo $nom   . '<br>';
            // echo $sujet . '<br>';
            // echo $email . '<br>';
            // echo $msg   . '<br>';


            $formErrors = array (); 

            if (strlen($nom)<3) {
                $formErrors[] = 'User is not valid' ;
            }
            if (strlen($sujet)<3) {
                $formErrors[] = 'User is not valid' ;
            }
            if (strlen($msg)<10) {
                $formErrors[] = 'Message is not valid' ;
            }

            $headers = 'From: ' . $email . '\r\n';
            $myEmail = 'formanum.eyad@gmail.com'; 
            $subject = 'Contact Form';

            if (empty($formErrors)) {
                mail($myEmail, $subject, $msg, $headers);

                    $nom    = '';
                    $sujet    = '';
                    $email   = '';
                    $msg     = '';
                    $success = '';
            }
           
            // traitements pour vérifier le contenu des champs...
            
            $erreur .="Veuillez renseigner un email";
            
            
            // traitement pour envoyer le message
            $contact_send       = $this -> getModel() ->sendContact();
            
            
            
        }
        
        $params = array(
            'erreur' => $erreur, 
            'title' => 'Contact' 
        );
        
        return $this -> render('layout.html', 'contact.html', $params); 
        
        
    }
    
    
    
     public function menu(){
        
        $params = array(
            'title' => 'Menu'   
        );
        
        return $this -> render('layout.html', 'Menu.html', $params);
        
    }
    
    
     public function presse(){
        
        $params = array(
            'title' => 'Presse'   
        );
        
        return $this -> render('layout.html', 'Presse.html', $params);
        
    }
    
     public function devenir_franchise(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
            $nomF           = filter_var($_POST['nomF'],        FILTER_SANITIZE_STRING );
            $prenomF        = filter_var($_POST['prenomF'],     FILTER_SANITIZE_STRING );
            $emailF         = filter_var($_POST['emailF'],      FILTER_SANITIZE_EMAIL ); 
            $ville          = filter_var($_POST['ville'],       FILTER_SANITIZE_STRING );
            $nomSociete     = filter_var($_POST['nomSociete'],  FILTER_SANITIZE_STRING );
            $local          = filter_var($_POST['local'],       FILTER_SANITIZE_STRING );
            $msgF           = filter_var($_POST['messageF'],    FILTER_SANITIZE_STRING );

            // traitements pour vérifier le contenu des champs...


            $formErrors = array (); 

            if (strlen($nomF)<3) {
                $formErrors[] = 'Nom is not valid' ;
            }
            if (strlen($prenomF)<3) {
                $formErrors[] = 'Prenom is not valid' ;
            }
            if (strlen($ville)<3) {
                $formErrors[] = 'Ville is not valid' ;
            }
            if (strlen($nomSociete)<3) {
                $formErrors[] = 'Nom Societe is not valid' ;
            }
            if (strlen($msgF)<10) {
                $formErrors[] = 'Message is not valid' ;
            }

            $headers = 'From: ' . $emailF . '\r\n';
            $myEmail = 'formanum.eyad@gmail.com'; 
            $subject = 'Contact Form';

            if (empty($formErrors)) {
                mail($myEmail, $subject, $msgF, $headers);

                    $nomF    = '';
                    $prenomF    = '';
                    $emailF   = '';
                    $ville    = '';
                    $nomSociete    = '';
                    $local    = '';
                    $msgF     = '';
                    $success = '';
            }
           
            
            
            // $erreur .="Veuillez renseigner un email";
           
            
            // traitement pour envoyer le message
            $franchaiseSend       = $this -> getModel() ->sendFranchaise();
         }    
        
        $params = array(
            'title' => 'devenir_franchise'   
        );
        
        return $this -> render('layout.html', 'devenir_franchise.html', $params);
        
    }
    
    
    public function reserver(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
            $nomR           = filter_var($_POST['nomR'],        FILTER_SANITIZE_STRING );
            $prenomR        = filter_var($_POST['prenomR'],     FILTER_SANITIZE_STRING );
            $cell           = filter_var($_POST['cell'],        FILTER_SANITIZE_NUMBER_INT );
            $msgR           = filter_var($_POST['messageR'],    FILTER_SANITIZE_STRING );

            // traitements pour vérifier le contenu des champs...


            $formErrors = array (); 

            if (strlen($nomR)<3) {
                $formErrors[] = 'Nom is not valid' ;
            }
            if (strlen($prenomR)<3) {
                $formErrors[] = 'Prenom is not valid' ;
            }
            
            if (strlen($msgR)<10) {
                $formErrors[] = 'Message is not valid' ;
            }

            $headers = 'From: ' . '\r\n';
            $myEmail = 'formanum.eyad@gmail.com'; 
            $subject = 'Contact Form';

            if (empty($formErrors)) {
                mail($myEmail, $subject, $msgR, $headers);

                    $nomR           = '';
                    $prenomR        = '';
                    $cell           = '';
                    $date           = '';
                    $no_perssonne   = '';
                    $heure          = '';
                    $msgR           = '';
                    $success        = '';
            }
           
            
            
            // $erreur .="Veuillez renseigner un email";
           
            
            // traitement pour envoyer le message
            $reserverSend       = $this -> getModel() ->sendReserver();
         }


        $params = array(
            'title' => 'reserver'   
        );
        
        return $this -> render('layout.html', 'reserver.html', $params);
        
    }



    // Administrateur 

    public function admin(){
        
       // 1 : Si besoin d'infos de la BDD... on demande à notre model ($this -> getModel()) les infos. 
        // $avis = $this -> getModel() -> getAllAvis();
        
        
       // Retourner la vue. 
        
        $params= array(
            'title' => 'admin',
            // 'avis' => $avis    
        );
        
        return $this -> render('layout.html', 'admin.php', $params);
    }
    

    
    
    
    
}