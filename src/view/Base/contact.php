<!-- <h1><?= $title ?></h1> -->


<?php if(!empty($erreur)) : ?>
<!--    <div style="padding: 5px; color: white; background: red;">-->
        <?= $erreur ?>
<!--    </div>-->
<?php endif; ?>
<!--
<form method="post" action="">
    <input type="text" name="prenom" Placeholder="Votre Prenom" /><br/>
    <input type="text" name="nom" Placeholder="Votre Nom" /><br/>
    <input type="text" name="email" Placeholder="Votre Email" /><br/>
    <input type="text" name="objet" Placeholder="Objet de l'email" /><br/>
    <texarea name="message" placeholder="Votre Message"></texarea>
    <input type="submit" value="Envoyer" />
</form>-->




<div class="container">
    <div class=" background-form">
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
</div>

<!--     <div class="container">

        <div class=" background-form">
        <h2 class="text-center"> Rejoignez-nous </h2>

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
                <i class="fas fa-envelope-open"></i>
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
                <input type="submit" class="btn btn-success btn-block" value="send message" />
                <i class="fas fa-paper-plane"></i>
            </div>
 -->

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
