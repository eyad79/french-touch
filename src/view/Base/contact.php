<?php if(!empty($erreur)) : ?>



<?= $erreur ?>

    <?php endif; ?>

    <style type="text/css">
        body {
            background-image: url("<?= $url ?>/images/background-french-touch.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>


    <div class="container-full layout picture-header-contact">
        <a href=""></a>
    </div>

   <div class="container">
                       <div class="paragraphe-general" style=" max-width: 500px; margin: 1px auto; margin-top: 115px;">
                           <p class="pGeneral">
                           <h2 class="text-center title-form" style="margin-top: -32px;">La French Touch : </h2><br/> 137 rue des fauvelles,<br/> 92400 Courbevoie De la défense <br /> prendre TRAM T2 direction Bezons. <br><br> Station :<br /> LES FAUVELLES </p>
                       </div>

<br><br>
       <div class=" background-form conta">
                    <h2 class="text-center title-form"> Contactez-nous </h2>

                    <form class="contact-form" action="" method="POST">

                        <div class="form-group">
                            <input class="nom form-control" type="text" name="nom" placeholder="Nom" value="<?php if (isset($nom)) { echo $nom; } ?>" />
                            <i class="fa fa-user fa-fw"></i>
                            <span class="asterisx">*</span>
                            <div class="alert alert-danger custom-alert">
                                Nom is not valid
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="sujet form-control" type="text" name="sujet" placeholder="Sujet" value="<?php if (isset($sujet)) { echo $sujet; } ?>" />
                            <i class="fa fa-user fa-fw"></i>
                            <span class="asterisx">*</span>
                            <div class="alert alert-danger custom-alert">
                                Sujet is not valid
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="email form-control" type="email" name="email" placeholder="Email" value="<?php if (isset($email)) { echo $email; } ?>" />
                            <i class="fa fa-envelope fa-fw"></i>
                            <span class="asterisx">*</span>
                            <div class="alert alert-danger custom-alert">
                                Email is not valid
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="msg form-control" placeholder="Message" name="message"><?php if (isset($msg)) { echo $msg; } ?></textarea>
                            <span class="asterisx">*</span>
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
                        <?php } ?>
                        <?php 
                        if (isset($success)) { echo '<div class="alert alert-success"> we have recieved your message</div>';} ?>

                    </form>

                </div>

                 <!-- map -->
                <center>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7418.142160112545!2d2.2252627227875426!3d48.90187680767916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66455a94869b5%3A0xf0a35c052a458408!2sLa+French+Touch!5e0!3m2!1sfr!2sfr!4v1529075661762" width="500px" height="450" frameborder="0" style="border:0; margin-left: 25%; margin-right: 25%;" allowfullscreen></iframe></center>
        </div>


   </div>

<br><br><br>
