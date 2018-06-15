<!-- <h1><?= $title ?></h1> -->

        <link rel="stylesheet" type="text/css" href="<?= $url ?>/styles/jquery.pagepiling.css" />



<div id="pagepiling" class="video-container">
    <div class="section">
       <iframe width="100%" height="102%" z-index: 10; src="https://www.youtube.com/embed/Tj8ZijSOweY?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    
<div class="section one">
    <article>
        <div class="box">
            <img src="<?= $url ?>images/Slide-picture-1.jpg" alt="" />
        </div>
    
  <div class="box">
    <div class="feed">
        <h2>Hambourgeoisez-vous !</h2>
        <p>Venez savoureux un burger délicieux à notre restaurant. Vous ne serez pas déçu ! N'oubliez pas également nos supers menus qui vous donnerons l'eau à la bouche.</p>
    </div>
  </div>
    
</article>
</div>
    
  <div class="section two">
        <div class="title-avis">
            <h2>Les avis de nos clients</h2>
            
            <div class="container-avis">
                <!-- <h3 class="pseudo-avis">Pseudo</h3>
                <h3 class="date-avis">06/05/2018</h3>
                <p class="paragraphe-avis">Avis de la personne Avis de la personne Avis de la personne Avis de la personne</p>
                 -->
                 <div class="cont-avis">
                        <?php foreach($avis as $a) : ?>

                        <div class="avis-client">
                            <p style="color:red"><?= $a['nom'] ?></p>
                            <p style="color:blue"><?= $a['date'] ?></p>
                            <p style="color:green"><?= $a['content'] ?></p>
                            
                            <div>

                                <div class="avis-a" >Note :</div>
                                <?php  for($i = 0; $i < $a['note']; $i++) : ?>
                                <div style="float: left" class="star">*</div>
                                <?php endfor; ?>
                                <div style="clear: both"></div>
                                
                            </div>

                            <hr/>
                        </div>

                        <?php endforeach; ?>
                    </div>
            </div>
            
            <!-- <div class="container-avis">
            <h3 class="pseudo-avis">Pseudo</h3>
            <h3 class="date-avis">06/05/2018</h3>
            <p class="paragraphe-avis">Avis de la personne Avis de la personne Avis de la personne Avis de la personne Avis de la personne</p>
            </div> -->
            
            <!-- <div class="container-avis">
            <h3 class="pseudo-avis">Pseudo</h3>
            <h3 class="date-avis">06/05/2018</h3>
            <p class="paragraphe-avis">Avis de la personne Avis de la personne Avis de la personne Avis de la personne Avis de la personne</p>
            </div> -->

            <footer>
  <div class="centered clearfix">
    <div class="footer-logo">
      <a href="<?= $url ?>base/accueil"><img class="logo" src="<?= $url ?>/images/Logo-FrenchTouch.png"></a>
    </div>
      
    <div class="footer-contact">
       <h3><a href="">Adresse</a></h3>
       <p><a href="mailto:">137, RUE DES FAUVELLES</a></p>
       <p><a href="tel:">92400 COURBEVOIE</a></p>
    </div>
      
    <div class="footer-navigation">
      <div class="footer-links-container">
        <h3><a href="">Horaire</a></h3>
        <ul class="footer-links">
          <li><a href="">DU LUNDI AU SAMEDI DE</a></li>
          <li><a href="">12H À 14H30</a></li>
          <li><a href="">FERMÉ LE VENDREDI MIDI,</a></li>
          <li><a href="">FERMÉ LE DIMANCHE.</a></li>
        </ul>
      </div>
        
      <div class="footer-links-container">
        <h3><a href="">Réseaux sociaux</a></h3>
        <ul class="footer-links inline">
         <li><a href=""><img src="<?= $url ?>/images/icon-facebook.png" width="20%"/></a></li>
          <li><a href=""><img src="<?= $url ?>/images/icon-twitter.png" width="20%"/></a></li>
          <li><a href=""><img src="<?= $url ?>/images/icon-instagram.png" width="20%"/></a></li>
          <li><a href=""><img src="<?= $url ?>/images/icon-youtube.png" width="20%"/></a></li>
        </ul>
      </div>
        
      <div class="footer-links-container">
        <h3><a href="">Contact</a></h3>
        <ul class="footer-links">
          <li><a href="">FrenchTouch92@gmail.com</a></li>
        </ul>
      </div>
        
    </div>
  </div>
    
  <div class="copyright">
      ©10MentionWeb - tous droits réservation | <a href="">REALISATION</a> | <a href="">Mentions légales</a>
  </div>
</footer>
            
        </div>
    </div>









</div>



<!-- <?php foreach($avis as $a) : ?>

<div class="container" >
    <p style="color:red"><?= $a['nom'] ?></p>
    <p style="color:blue"><?= $a['date'] ?></p>
    <p style="color:green"><?= $a['content'] ?></p>
    
    <div>

        <div style="float: left">Note :</div>
        <?php  for($i = 0; $i < $a['note']; $i++) : ?>
        <div style="float: left" class="star">*</div>
        <?php endfor; ?>
        <div style="clear: both"></div>
        
    </div>

    <hr/>
</div>

<?php endforeach; ?> -->


 <script>
            $(document).ready(function() {
            $('#pagepiling').pagepiling();
        });
        </script>