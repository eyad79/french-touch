/*global $*/

$(function () {

    'user stric';

    /* ---- Formulaire de contact ----- */
    var nomError   = true,
        sujetError = true,
        emailError = true,
        msgError   = true;
    

    $('.nom').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            nomError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            nomError = false;
        }
      
    });

     $('.sujet').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            sujetError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            sujetError = false;
        }
      
    });


    $('.email').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            emailError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            emailError = false;
        }
       
    });


    $('.msg').blur(function () {

        if ($(this).val().length <= 19) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            msgError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            msgError = false;
        }
        
    });
    
    $('.contact-form').submit(function (e) {
        if (nomError === true || sujetError === true || emailError === true || msgError === true) {
            e.preventDefault();
            $('.nom, .sujet, .email, .msg').blur();
        } else {
                $.ajax({
                    type : "POST",
                    url: $(this).attr("action"),
                    data: $(this).serialize(),
                    success : function() {
                        $("#contact").html("<p>Formulaire bien envoyé</p>");
                    },
                    error: function() {
                        $("#contact").html("<p>Erreur d'appel, le formulaire ne peut pas fonctionner</p>");
                    }
                });
            }
        
    });


    /* ---- Formulaire de Franchaise vpus ----- */
    // var nomFError       = true,
    //     prenomFError    = true,
    //     emailFError     = true,
    //     villeError      = true,
    //     nomSocieteError = true,
    //     localError      = true,
    //     msgFError       = true;
    

    // $('.nomF').blur(function () {

    //     if ($(this).val().length <= 2) {
    //         $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
    //         nomFError = true;

    //     } else {
    //         $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
    //         nomFError = false;
    //     }
      
    // });

    //  $('.prenomF').blur(function () {

    //     if ($(this).val().length <= 2) {
    //         $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
    //         prenomFError = true;

    //     } else {
    //         $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
    //         prenomFError = false;
    //     }
      
    // });


    // $('.emailF').blur(function () {

    //     if ($(this).val().length <= 2) {
    //         $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
    //         emailFError = true;

    //     } else {
    //         $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
    //         emailFError = false;
    //     }
       
    // });

    // $('.ville').blur(function () {

    //     if ($(this).val().length <= 2) {
    //         $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
    //         villeError = true;

    //     } else {
    //         $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
    //         villeError = false;
    //     }
      
    // });

    // $('.nomSociete').blur(function () {

    //     if ($(this).val().length <= 2) {
    //         $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
    //         nomSocieteError = true;

    //     } else {
    //         $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
    //         nomSocieteError = false;
    //     }
      
    // });



    // $('.msgF').blur(function () {

    //     if ($(this).val().length <= 19) {
    //         $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
    //         msgFError = true;

    //     } else {
    //         $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
    //         msgFError = false;
    //     }
        
    // });
    
    // $('.franchaise-form').submit(function (e) {
    //     if (nomFError === true || prenomError === true || emailFError === true || villeError === true || nomSocieteError === true || msgFError === true) {
    //         e.preventDefault();
    //         $('.nomF, .prenomF, .emailF, .ville, .nomSociete,  .msgF').blur();
    //     } else {
    //             $.ajax({
    //                 type : "POST",
    //                 url: $(this).attr("action"),
    //                 data: $(this).serialize(),
    //                 success : function() {
    //                     $("#contact").html("<p>Formulaire bien envoyé</p>");
    //                 },
    //                 error: function() {
    //                     $("#contact").html("<p>Erreur d'appel, le formulaire ne peut pas fonctionner</p>");
    //                 }
    //             });
    //         }
        
    // });


     /*-----add avis ----------*/
     var noteError      = true,
         nomAvisError   = true,
         dateAvisError  = true,
         contentError   = true,
       

    

    $('.note').blur(function () {

        if ($(this).val().length <= 0) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            noteError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            noteError = false;
        }
      
    });


    $('.nom-avis').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            nomAvisError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            nomAvisError = false;
        }
      
    });


    $('.date-avis').blur(function () {

        if ($(this).val().length < 10) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            dateAvisError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            dateAvisError = false;
        }
      
    });

    $('.content').blur(function () {

        if ($(this).val().length <= 5) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            contentError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            contentError = false;
        }
      
    });

   
    $('.invoyer-avis-avis').submit(function (e) {
        if (noteError === true || nomAvisError === true || dateAvisError === true || contentError === true) {
            e.preventDefault();
            $('.note, .nom-avis, .date-avis, content').blur();
        }
        
    });

});

