<?php 


session_start();
session_destroy();

// echo 'You have been logged out. <a href="/">Go back</a>' . '<br>' ;
// echo 'You have been logged out. <a href="/">Go back</a>' . '<br>' ;
// echo 'You have been logged out. <a href="/">Go back</a>' . '<br>' ;
// echo 'You have been logged out. <a href="/">Go back</a>' . '<br>' ;
// echo 'You have been logged out. <a href="/">Go back</a>' . '<br>' ;
// echo 'You have been logged out. <a href="/">Go back</a>' . '<br>' ;

?>

<style type="text/css">
    
    body {
        background-image: url("<?= $url ?>/images/background-.jpg");
        background-size: cover;
        background-repeat: no-repeat;

    }
    
</style>

<div class="headerMarge"></div>

<h1> You have been logged out </h1>

<a href="<?= $url ?>base/accueil">Go At Home Page</a>

