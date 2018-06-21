<!-- <h1><?= $title ?></h1> -->



<link rel="stylesheet" type="text/css" href="<?= $url ?>/styles/jquery.pagepiling.css" />

<!-- <div class="headerMarge"></div> -->

<div id="pagepiling" class="video-container">
    <div class="section">
        <iframe width="100%" height="102%" z-index: 10; src="https://www.youtube.com/embed/Tj8ZijSOweY?rel=0&amp;autoplay=1" frameborder="0" allow="autoplay; encrypted-media"   allowfullscreen></iframe>

       <!--  <video preload="auto" autoplay="true" loop="loop" muted="muted">
          <source src="restaurant-french-touch-la-defense.mp4" type="video/mp4">
       </video> -->
    </div>

    <div class="section one">
        <article>
            <div class="box">
                <img src="<?= $url ?>images/Slide-picture-1.jpg" alt="" />
            </div>

            <div class="box">
                <div class="feed">
                    <h2>Hamburgeoisez-vous !</h2>
                    <p>Venez savoureux un burger délicieux à notre restaurant. Vous ne serez pas déçu ! N'oubliez pas également nos supers menus qui vous donnerons l'eau à la bouche.  <a href="concept">...lire La Suite</a></p>
                    
                    <br><br>
                    <a href="reserver"> <button class="button-text btn-block" name="buttom">Réservez en Ligne</button></a>
                </div>
            </div>

        </article>
    </div>

    <div class="section two">
        <div class="container avis-container">
            <h2>Les avis de nos clients</h2>

            
                <!-- <h3 class="pseudo-avis">Pseudo</h3>
                <h3 class="date-avis">06/05/2018</h3>
                <p class="paragraphe-avis">Avis de la personne Avis de la personne Avis de la personne Avis de la personne</p>
                 -->
                <div class="row avis-client">
                    <?php foreach($avis as $a) : ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 avis-style">
                        <p class="avis-nom">
                            <?= $a['nom'] ?>
                        </p>
                        <p class="avis-date">
                            <?= $a['date_avis'] ?>
                        </p>
                        <p class="avis-text">
                            <?= $a['content'] ?>
                        </p>

                        <div class="avis-note-div" >

                            <div class="avis-note">Note :</div>
                            <?php  for($i = 0; $i < $a['note']; $i++) : ?>
                            <div  class="avis-star" style="float: left"><i class="fas fa-star stars-icons"></i></div>
                            <?php endfor; ?>
                            <div style="clear: both"></div>

                        </div>

                        <!-- <hr/> -->
                    </div>

                    <?php endforeach; ?>
                </div>
            <div class="container">
                <!-- <a href="addAvis"> <button name="addAvis">Ajoute un Avis</button></a> -->
                <br />
                <a href="addAvis"  onclick="open('addAvis', 'Popup', 'scrollbars=1,resizable=1,height=560,width=770'); return false;" ><button class="btn btn-success btnaDdAvis" name="addAvis">Ajoute un Avis</button></a><br />
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

            

        </div>

    </div>

    <div class="section one">
        <div class="container container-fb">
            <h2>Suivez-nous !</h2>
            <div class="row">
                <div class="col-md-6">
                    <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>


                    <div class="fb-page" data-href="https://www.facebook.com/frenchtouchresto" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-width="300"
                    data-height="300"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/frenchtouchresto">Facebook</a></blockquote></div>
                </div>
                <div class="col-md-6">
                     <!-- <a class="twitter-grid" href="https://twitter.com/TwitterMusic/timelines/393773266801659904?ref_src=twsrc%5Etfw">Music Superstars</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                     <a class="twitter-timeline" href="https://twitter.com/_french_touch"
                      data-width="300"
                      data-height="300">
                    Tweets by @TwitterDev
                    </a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                     <!-- <a class="twitter-timeline" href="https://twitter.com/TwitterDev/timelines/539487832448843776?ref_src=twsrc%5Etfw">National Park Tweets - Curated tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                </div>
            </div>

          
               
           



    </div>

        
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