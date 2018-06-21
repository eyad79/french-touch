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





<!-- 
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
<div class="container avis-container">
    <div class="row avis-client-dasboard">
        <div class="col-md-6 col-sm-12">
            <?php foreach($avisDashboard as $a) : ?>

            <div class="avis-style ">

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
        </div>

        <?php endforeach; ?>
        </div>
        <div class="background-form form-status col-md-6 col-sm-12">
            <h2 class="text-center title-form"> Changer Status </h2>
            <form class="contact-form" action="" method="post">
                <input class="contact-form" type="text" name="id_avis" placeholder="ID de Client">
                <input class="contact-form" type="text" name="status" placeholder="Changez le Status">
                <input class="btn btn-success btn-block" type="submit" name="submit" value="Change Status">
            </form> -->

             <!-- <h2 class="text-center title-form"> Delet Avis </h2>
            <form class="contact-form" action="" method="post">
                <input class="contact-form" type="text" name="id_avis_delet" placeholder="ID de Client">
                <input class="btn btn-success btn-block" type="submit" name="submit" value="Delet Avis">
            </form> -->
 <!--        </div>
    </div>
    <div>
        
    </div>

</div>
 -->



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

<div class="container">
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
    <!-- <div> -->
        <!-- <form action="" method="post">
            <input type="text" name="id_avis" placeholder="ID de Client">
            <input type="text" name="status" placeholder="Changez le Status">
            <input class="btn btn-success" type="submit" name="submit" value="Change Status">
        </form> -->
   <!--  </div> -->

   <!--  <div class="delet">
        <h2 class="text-center title-form"> Delet Avis </h2>
            <form  action="" method="post">
                <input class="contact-form" type="text" name="id_avis_delet" placeholder="ID de Client">
                <input class="btn btn-success btn-block" type="submit" name="submit" value="Delet Avis">
            </form>
    </div> -->

</div>