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

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h2 class="h2-container" >Welcome <?=  $_SESSION['username']   ?> to Admin DASHBOARD</h2>
        </div>
        <div class="col-sm-12 col-md-6">
            <a href="logout">
            <button type="button" class="btn btn-danger" >Log Out</button></a>
        </div>
    </div>
</div>
<!-- <div class="container">
        <form class="formYoutube" action="" method="post">
            <h2 class="text-center "> ajouter un lien Youtube </h2>
            <input  type="text" name="lien" placeholder="Lien Youtube">
            <input class="btn btn-success" type="submit" name="submit" value="Lien Youtube">
        </form>
</div> -->

<div class="container">
    <h2 class="text-center title-form"> Les Resservation </h2>
    <div class="row avis-client-dasboard">

        
        <?php foreach($reserverDAshboard as $a) : ?>

        <div class="col-lg-4 col-md-6 col-sm-12 avis-style avisDashboard">
            

            <p class="avis-nom">
                Nom : <?= $a['nom'] ?>
            </p>
            <p class="avis-nom">
                Prenome : <?= $a['prenom'] ?>
            </p>
             <p class="id_reserver">
                ID : <?= $a['id_reserver'] ?>
            </p>
            <p class="cell">
                Téléphone : <?= $a['cell'] ?>
            </p>
            <p class="date">
                Date de reservation : <?= $a['date_reserver'] ?>
            </p>
            <p class="no-perssonne">
                Nombre des Perssones <?= $a['no_perssonne'] ?>
            </p>
            <p class="heure">
                Time : <?= $a['heure'] ?>
            </p>
            <p class="avis-text">
                Message de Client : <?= $a['message'] ?>
            </p>
            <hr/>
            <form  action="" method="post">
                <h2 class="text-center "> Supprimer Un Reservation </h2>
                <input  type="text" name="id_reserver" placeholder="ID de Client">
                <input class="btn btn-success" type="submit" name="submit" value="Delet un Reservation">
            </form>
            
        </div>

        <?php endforeach; ?>

    </div>

</div>




    <!--avis des clients-->
<div class="container avisClient">
    <h2 class="text-center title-form"> Les Avis des clients </h2>
    <div class="row avis-client-dasboard">
        
        
        <?php foreach($avisDashboard as $a) : ?>

        <div class="col-lg-4 col-md-6 col-sm-12 avis-style avisDashboard">


            <p class="avis-nom">
                <?= $a['nom'] ?>
            </p>
            <p class="avis-id">
                ID :
                <?= $a['id_avis'] ?>
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
            


            <div class="avis-note-div">

                <div class="avis-note">Note :</div>
                <?php  for($i = 0; $i < $a['note']; $i++) : ?>
                <div class="avis-star" style="float: left"><i class="fas fa-star stars-icons"></i></div>
                <?php endfor; ?>
                <div style="clear: both"></div>


            </div>
            <hr/>
            <form action="" method="post">
                <h2 class="text-center"> Changer Status </h2>
                <input type="text" name="id_avis" placeholder="ID de Client">
                <input type="text" name="status" placeholder="Changez le Status">
                <input class="btn btn-success" type="submit" name="submit" value="Change Status">
            </form>
             <hr/>
            <form  action="" method="post">
                <h2 class="text-center "> Supprimer Avis </h2>
                <input  type="text" name="id_avis_delet" placeholder="ID de Client">
                <input class="btn btn-success" type="submit" name="submit" value="Delet Avis">
            </form>
            
        </div>

        <?php endforeach; ?>

    </div>
   

</div>