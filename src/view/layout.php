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

        


        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script> -->
    

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
<!--         <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 -->
<!--         <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
 -->
        <!-- PLUGIN -->
<!--         <link rel="stylesheet" type="text/css" href="<?= $url ?>/styles/jquery.pagepiling.css" />
 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?= $url ?>/js/jquery.pagepiling.js"></script>
<!--         <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
 -->        <!-- <script src="https://sites.google.com/site/recursosweblibrerias/home/librerias/prefixfree%201.0.7.min.js" type="text/javascript"></script> --> 
    




        <!--                          -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
       

<!--         <link rel="stylesheet" href="<?= $url ?>/styles/fa-svg-with-js.css">
 -->        <link rel="stylesheet" href="<?= $url ?>/styles/mainStyle.css">
        <link rel="stylesheet" href="<?= $url ?>/styles/styleContact.css">
        <link rel="stylesheet" href="<?= $url ?>/styles/styleAnimat.css">

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">


       


        

    </head>
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
    <!-- start media social -->
    <div id="main-header--social-global">
                
            <a href="./fr-fr.facebook.com/frenchtouchresto/" target=_blank class="main-header-social-link"><img src="<?= $url ?>/images/icon-facebook.png" alt="Facebook" class="main-header--social-img"/></a>
        
            <a href="./twitter.com/_french_touch" target=_blank class="main-header-social-link"><img src="<?= $url ?>/images/icon-twitter.png" alt="Twitter" class="main-header--social-img"/></a>
        
            <a href="./www.instagram.com/_french_touch/?hl=fr" target=_blank class="main-header-social-link"><img src="<?= $url ?>/images/icon-instagram.png" alt="Instagram" class="main-header--social-img"/></a>
        
            <a href="./www.youtube.com/watch?v=Tj8ZijSOweY" target=_blank class="main-header-social-link"><img src="<?= $url ?>/images/icon-youtube.png" alt="Youtube" class="main-header--social-img"/></a>
        
    </div>
    <!-- end media social -->
</main>



    <!--     <nav class="nav nav-pills nav-justified">
            <ul> -->
<!--            <li><a href="<?= $url ?>base/accueil">Accueil</a></li>-->
                <!-- <li><a href="<?= $url ?>base/concept">Concept</a></li>
                <li><a href="<?= $url ?>base/menu">Menu</a></li>
                <li><a href="<?= $url ?>base/presse">presse</a></li>
                <li><a href="<?= $url ?>base/devenir_franchise">Devenire franchisé</a></li>
                <li><a href="<?= $url ?>base/reserver">Réserver</a></li>
                <li><a href="<?= $url ?>base/contact">Contact</a></li>
                
            </ul>
            <a href='<?= $url ?>base/admin'> <button type="button" class="btn btn-danger">Admin</button></a> -->
            <!-- <input type="buttom" name="buttom" value="">  -->
       <!--  </nav> -->
    <!-- -- HAUT DU SITE -- --> 
        
        
    <?php echo $content  ?>
    
    
    
    <!-- -- BAS DU SITE -->
        <!-- <footer> footer </footer> -->


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
<!-- end footer -->
        
        <!-- Jquery -->
<!--         <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 -->        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
        <!--Bootstrap -->
<!--        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
<!--         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 -->        <!--custom -->
        <script src="<?= $url ?>/js/mainJS.js"></script>
        <script src="<?= $url ?>/js/nav.js"></script>
        <script src="<?= $url ?>/js/footer.js"></script>

        <script src="<?= $url ?>/js/contactJS.js"></script>

        <!-- font_js -->
        <script src="<?= $url ?>/js/fontawesome-all.js"></script>

       <!--  <script>
            $(document).ready(function() {
            $('#pagepiling').pagepiling();
        });
        </script> -->
        
    </body>
</html>