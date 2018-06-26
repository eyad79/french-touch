<!-- <h1><?= $title ?></h1> -->

<style type="text/css">
    
    body {
        background-image: url("<?= $url ?>/images/background-french-touch.png");
        background-size: cover;
        background-repeat: no-repeat;

    }
    
</style>



<!-- <div class="headerMarge"></div> -->

<div class="container-full layout picture-header-reserver">
        <a href=""></a>
</div>
<div class="container">

    <div class="row"> 
        <div class="col-lg-6 col-sm-12"> 
             <div class="paragraphe-general text-center">
                <p class="pGeneral" >Ambiens amnis imosque pedes Cassii montis illius celsi praetermeans funditur in Parthenium mare, Gnaeus Pompeius superato Tigrane regnis Armeniorum abstractas dicioni Romanae coniunxit. Ambiens amnis imosque pedes Cassii montis illius celsi praetermeans funditur.<h2 class="title-form" > Infos pratiques </h2> </p>
        </div>
        </div>

        <div class="col-lg-6 col-sm-12"> 
            <div class=" background-form">
            <h2 class="text-center title-form"> Réserver en ligne </h2>

        <form class="reservation-form" action="" method="POST">
            
            <div class="form-group">
                <input class="nomR form-control" type="text" name="nomR" placeholder="Nom" value="<?php if (isset($nomR)) { echo $nomR; } ?>" />
                <i class="fa fa-user fa-fw"></i>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    Nom is not valid
                </div>
            </div>
            
            <div class="form-group">
                <input class="prenomR form-control" type="text" name="prenomR" placeholder="Prénom" value="<?php if (isset($prenomR)) { echo $prenomR; } ?>" />
                <i class="fa fa-user fa-fw"></i>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    Prenom is not valid
                </div>
            </div>

            <div class="form-group">
                <input class="cell form-control" type="text" name="cell" placeholder="Téléphone" value="<?php if (isset($cell)) { echo $cell; } ?>" />
                <i class="fa fa-phone fa-fw"></i>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    the number telephone is not valid
                </div>
            </div>

            <div class="form-group">
                <input class="date_reserver form-control" type="date" name="date_reserver" value="<?php if (isset($date)) { echo $date; } ?>" />
                <i class="fas fa-calendar-alt"></i>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    date is not valid
                </div>
            </div>
            
            <div class="form-group">

                <h3>Sélectionnez le nombre de personnes</h3>

                <select class="no_perssonne" name="no_perssonne" >
                    <?php for ($i=1 ; $i < 11; $i++) :  ?>
                        <?php echo "\t",'<option value="', $i ,'">', $i ,'</option>',"\n"; ?>
                    <?php endfor; ?>
                </select>

                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    numbre de perssone is not valid
                </div>
            </div>

            <div class="form-group">

                <h3>Sélectionnez l'horaire</h3>

                <select class="heure" name="heure" >
                <?php for ($h=19 ; $h <= 24; $h++) :  ?>
                    <?php for ($m=0 ; $m <=45; $m = $m+15) :  ?>
                        <?php echo "\t",'<option value="', $h . 'h' . $m ,'">', $h . ' ' . 'h' . ' ' . $m ,'</option>',"\n"; ?>
                    <?php endfor; ?>
                <?php endfor; ?>
                </select>

                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    numbre de perssone is not valid
                </div>
            </div>

            <div class="form-group">
                <textarea class="msgR form-control" placeholder="Message" name="messageR"><?php if (isset($msgR)) { echo $msgR; } ?></textarea>
                
                <div class="alert alert-danger custom-alert">
                    message is not valid
                </div>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-success btn-block" value="Envoyer un message" />
                <i class="fas fa-paper-plane"></i>
            </div>


            <?php if (! empty($formErrors)) { ?>

            <div class="alert alert-danger" role="start">

                <?php 
                         foreach ($formErrors as $error) {
                            echo $error . '<br/>'; 
                        } 
                    ?>
            </div>
            <?php }  ?>
            <?php 
                if (isset($success)) { echo '<div class="alert alert-success"> we have recieved your message</div>';} ?>


        </form>

        </div>
        </div>
</div>
</div>

   

<br><br><br>
