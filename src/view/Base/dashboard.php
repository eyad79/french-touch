<?php 

session_start(); 
if(isset($_SESSION['username'])) {
	echo 'welcome' . ' ' . $_SESSION['username'];
} else {
	header('Location: accueil');
	exit();
}

// echo "Admin DASHBOARD" . '<br>' ;




?>	

<style type="text/css">
	body {
		background-image: url("<?= $url ?>/images/background-.jpg");
		background-size: cover;
		background-repeat: no-repeat;
	}
</style>

<div class="headerMarge"></div>

<h2>Welcome <?=  $_SESSION['username']   ?> to Admin DASHBOARD</h2>



<a href="logout">
<button type="button" class="btn btn-danger" >Log Out</button></a>

			<div class="container">

				<div class="row avis-client-dasboard">
                    <?php foreach($avisDashboard as $a) : ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 avis-style">
                        
                        <p class="avis-nom">
                            <?= $a['nom'] ?>
                        </p>
                        <p class="avis-id">
                            ID : <?= $a['id_avis'] ?>
                        </p>
                        <p class="avis-date">
                            <?= $a['date_avis'] ?>
                        </p>
                        <p class="avis-text">
                            <?= $a['content'] ?>
                        </p>

                        <p class="avis-status">
                            Status : <strong>  <?= $a['status'] ?> </strong>
                        </p>
                        <form action="" method="post" >
                        	<input type="text" name="id_avis" placeholder="ID de Client">
	                        <input type="text" name="status" placeholder="Changez le Status">
	                        <input class="btn btn-success" type="submit" name="submit" value="Change Status">
                        </form>


                        <div class="avis-note-div" >

                            <div class="avis-note">Note :</div>
                            <?php  for($i = 0; $i < $a['note']; $i++) : ?>
                            <div  class="avis-star" style="float: left"><i class="fas fa-star stars-icons"></i></div>
                            <?php endfor; ?>
                            <div style="clear: both"></div>

                        </div>

                        <hr/>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
            <!-- <div class="container container-add-avis">
                <div class=" background-form">
                    <h2 class="text-center title-form"> Enregister un Avis </h2>

                    <form class="class="contact-form" invoyer-avis" action="" method="post"><br />
                        <div class="form-group">
                            <input class="form-control"ctype="text" name="note" placeholder="note">
                        </div>
                        <div class="form-group">
                            <input class="nom form-control" type="text" name="nom" placeholder="nom">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" name="date_avis" >
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="content" placeholder="content"></textarea>
                        </div>
                        <div class="form-group">
                            <input class=" form-control" type="text" name="status" placeholder="status">
                        </div>
                        <input class="btn btn-success btn-block" type="submit" name="submit" value="Envoyer">
                         
                    </form>
                </div>
            </div> -->

            <!-- <div class="container">
            	<form action="" method="post">
            		<input type="text" name="note" placeholder="note">
            		<input type="text" name="nom" placeholder="nom">
            		<input type="date" name="date_avis" placeholder="date">
            		<input type="text" name="content" placeholder="content">
            		<input type="text" name="status" placeholder="status">
            		<input type="submit" value="sent">
            	</form>
            </div> -->

