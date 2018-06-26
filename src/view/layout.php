<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Restaurant la French Touch">

         <!--  flavicon  -->
        <meta name="keywords" content="lafrenchtouch restaurant burger">
        <meta name="author" content="La French Touch">
        <link rel="icon" href="<?= $url ?>/images/Logo-FrenchTouch.png" type="image/png" sizes="32x32">

        <title><?= $title ?></title>

     
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?= $url ?>/js/jquery.pagepiling.js"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
       


        <link rel="stylesheet" href="<?= $url ?>/styles/mainStyle.css">
        <link rel="stylesheet" href="<?= $url ?>/styles/styleContact.css">

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">


       


        

    </head>
    <style>
          a:hover{
              text-decoration: none !important;
              color: #721D20;
          }
      </style>
    <body>
        <!-- start nav -->
<header class="main-header">
    <button class="main-header--burger">
        <svg fill="#FFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
        </svg>
    </button>
    
    <nav class="main-header--nav">
        <ul class="main-header--nav-group">
            <div class="main-header--nav-item main-header--nav-item2 main-header--nav-logo-burger">
                <a href="<?= $url ?>base/accueil"><img src="<?= $url ?>/images/Logo-FrenchTouch.png" alt="La French Touch" class="main-header--logo-img"/></a>
            </div>
            
           <li class="main-header--nav-item"><a href="<?= $url ?>base/concept" class="main-header--nav-link">Notre concept</a>
           </li>
            
           <li class="main-header--nav-item"><a href="<?= $url ?>images/Carte-French-Touch.pdf" target="_blank" class="main-header--nav-link">Menu</a></li>
            
           <li class="main-header--nav-item"><a href="<?= $url ?>base/presse" class="main-header--nav-link main-header--nav-link-presse">Presse</a> 
           </li>
            
            <div class="main-header--nav-item main-header--nav-item2">
                <a href="<?= $url ?>base/accueil"><img src="<?= $url ?>/images/Logo-FrenchTouch.png" alt="La French Touch" class="main-header--logo-img"/></a>
            </div>
            
           <li class="main-header--nav-item"><a href="<?= $url ?>base/devenir_franchise" class="main-header--nav-link main-header--nav-link-devenir">Devenir franchisé</a></li>
           <li class="main-header--nav-item"><a href="<?= $url ?>base/reserver" class="main-header--nav-link">Réserver</a></li>
           <li class="main-header--nav-item"><a href="<?= $url ?>base/contact" class="main-header--nav-link">Contact</a></li>

           <!-- <a href='<?= $url ?>base/admin'> <button type="button" class="btn btn-danger">Login</button></a> -->
            
           <li class="main-header--nav-item icons-burger icons-inline">
               <a href="./fr-fr.facebook.com/frenchtouchresto/" target=_blank class="main-header-social-link"><img src="<?= $url ?>/images/icon-facebook.png" alt="Facebook" class="main-header--social-img"/></a>
           </li>
            
           <li class="main-header--nav-item icons-burger icons-inline">
               <a href="./twitter.com/_french_touch" target=_blank class="main-header-social-link"><img src="<?= $url ?>/images/icon-twitter.png" alt="Twitter" class="main-header--social-img"/></a>
           </li>
            
           <li class="main-header--nav-item icons-burger icons-inline">
               <a href="./www.instagram.com/_french_touch/?hl=fr" target=_blank class="main-header-social-link"><img src="<?= $url ?>/images/icon-instagram.png" alt="Instagram" class="main-header--social-img"/></a>
           </li>
            
            <li class="main-header--nav-item icons-burger icons-inline">
               <a href="./www.youtube.com/watch?v=Tj8ZijSOweY" target=_blank class="main-header-social-link"><img src="<?= $url ?>/images/icon-youtube.png" alt="Youtube" class="main-header--social-img"/></a>
           </li>
        </ul>
    </nav>
</header>
<!-- end nav -->

    
<main>
  <!-- START SOCIAL MEDIA -->
   <div id="main-header--social-global">
               
           <a href="https://www.facebook.com/frenchtouchresto" target=_blank class="main-header-social-link icon-facebook" id="global-icons"></a>
       
           <a href="https://twitter.com/_french_touch" target=_blank class="main-header-social-link icon-linkedin" id="global-icons"></a>
       
           <a href="https://www.instagram.com/_french_touch/?hl=fr" target=_blank class="main-header-social-link icon-instagram" id="global-icons"></a>
       
           <a href="https://www.youtube.com/channel/UCLC2AssqCetY8gsq-iQGrAQ" target=_blank class="main-header-social-link icon-youtube" id="global-icons"></a>

   </div>
</main>



        
        
    <?php echo $content  ?>
    
    
    
<!-- -- BAS DU SITE -->


<!-- start footer -->
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
                                <li><a href="https://www.facebook.com/frenchtouchresto" target=_blank><img src="<?= $url ?>/images/icon-facebook.png" width="20%"/></a></li>
                                <li><a href="https://twitter.com/_french_touch" target=_blank><img src="<?= $url ?>/images/icon-twitter.png" width="20%"/></a></li>
                                <li><a href="https://www.instagram.com/_french_touch/?hl=fr" target=_blank><img src="<?= $url ?>/images/icon-instagram.png" width="20%"/></a></li>
                                <li><a href="https://www.youtube.com/channel/UCLC2AssqCetY8gsq-iQGrAQ" target=_blank><img src="<?= $url ?>/images/icon-youtube.png" width="20%"/></a></li>
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
                    ©10MentionWeb - tous droits réservation | <a href="">REALISATION</a> | <a href="mentionsLegales" onclick="open('mentionsLegales', 'Popup', 'scrollbars=1,resizable=1,height=560,width=770'); return false;">Mentions légales</a>
                </div>
            </footer>
<!-- end footer -->
        
            <!--custom -->
        <script src="<?= $url ?>/js/mainJS.js"></script>
        <script src="<?= $url ?>/js/nav.js"></script>
        <script src="<?= $url ?>/js/footer.js"></script>

        <script src="<?= $url ?>/js/contactJS.js"></script>

        <!-- font_js -->
        <script src="<?= $url ?>/js/fontawesome-all.js"></script>

        
    </body>
</html>