<?php

$mdp_poste = "";
if(isset($_POST['crypt'])){
    
    
    if(!empty($_POST['mdp'])){
        $hash = hash('sha256', $_POST['mdp']);

        $salt = 'salautototcommentcava?';
        $salt_crypt = md5($salt);
        $password = hash('sha256', $salt_crypt . $hash);

        

        echo 'Voici le salt : <b>' . $salt . '</b><br/>';
        echo 'Voici le salt crypté: <b>' . $salt_crypt . '</b><br/>';
        echo 'Voici le password non Crypté : <b>' . $_POST['mdp'] . '</b><br/>';
        echo 'Voici le password crypté sans salt : <b>' . $hash . '</b><br/>';
        echo 'Voici le password crypté avec salt à enregistrer : <b>' . $password . '</b><br/>';
        
        $mdp_poste = $_POST['mdp'];
        
     }
    else{
        echo 'Veuillez renseigner un MDP';
    }
    
    
    
}


?>


<h2>Crypter un Mot de passe</h2>
<form method="post" action="">

    <input type="text" name="mdp" placeholder="Ecrivez votre MDP à cryper" value='<?= $mdp_poste ?>'/>
    <input type="submit" value="Crypter" name="crypt" />
</form>