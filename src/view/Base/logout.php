<?php 


session_start();
session_destroy();

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

<div class="container">
	<div class="row">
		<div class="col-sm-12 logout-a">
						
			<h1 class="text-center logout-h title-form" > You have been logged out </h1>
			
			<div class="a">
				<a class="title-form " href="<?= $url ?>base/accueil">Go At Home Page</a>
			</div>
			

		</div>
	</div>
</div>

