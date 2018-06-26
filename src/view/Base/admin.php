<!-- <h1><?= $title ?></h1> -->
<?php


session_start(); 
if (isset($_SESSION['username'])) {
    header('Location: dashboard');
}



?>

<style type="text/css">
	
	body {
		background-image: url("<?= $url ?>/images/background-.jpg");
		background-size: cover;
		background-repeat: no-repeat;

	}
	
</style>

<div class="headerMarge"></div>

<form class="login" action="" method="post">
    <h4 class="text-center title-bienvenue" >Bienvenue !</h4>
    
    <div class="form-group">
    	<input class="form-control" type="text" name="username" placeholder="Identifiant" autocomplete="off">
    	<i class="fa fa-user fa-fw"></i>
    </div>

    <div class="form-group">
    	<input class="form-control" type="password" name="password" placeholder="Mot de passe" autocomplete="new-password">
    	<i class="fas fa-unlock-alt"></i>
    </div>


    <input class="btn btn-primary btn-block" type="submit" name="login" value="Valider">
<br />

</form>

