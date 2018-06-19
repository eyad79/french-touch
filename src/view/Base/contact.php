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
<style type="text/css">
    
    body {
        background-image: url("<?= $url ?>/images/background-.jpg");
        background-size: cover;
        background-repeat: no-repeat;

    }
    
</style>

<!-- <div class="headerMarge"></div> -->

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
<!-- 
<h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCF61FIATOuZm6tUsJ2poanN7T4KQ61i1A&callback=initMap">
    </script> -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7418.142160112545!2d2.2252627227875426!3d48.90187680767916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66455a94869b5%3A0xf0a35c052a458408!2sLa+French+Touch!5e0!3m2!1sfr!2sfr!4v1529075661762" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 


 <!-- 
<div class="container">
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1aZIPPxif5Wk35RtwNGi2dMLK94_ZEY3x" width="640" height="480"></iframe>
</div>
 -->

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
