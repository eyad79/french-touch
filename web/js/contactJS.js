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
    var nomFError       = true,
        prenomFError    = true,
        emailFError     = true,
        villeError      = true,
        nomSocieteError = true,
        // localError      = true,
        msgFError       = true;
    

    $('.nomF').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            nomFError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            nomFError = false;
        }
      
    });

     $('.prenomF').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            prenomFError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            prenomFError = false;
        }
      
    });


    $('.emailF').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            emailFError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            emailFError = false;
        }
       
    });

    $('.ville').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            villeError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            villeError = false;
        }
      
    });

    $('.nomSociete').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            nomSocieteError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            nomSocieteError = false;
        }
      
    });



    $('.msgF').blur(function () {

        if ($(this).val().length <= 19) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            msgFError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            msgFError = false;
        }
        
    });
    
    $('.franchaise-form').submit(function (e) {
        if (nomFError === true || prenomError === true || emailFError === true || villeError === true || nomSocieteError === true || msgFError === true) {
            e.preventDefault();
            $('.nomF, .prenomF, .emailF, .ville, .nomSociete,  .msgF').blur();
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



    /* ---- Reservation -------- */

    var nomRError   	= true,
        prenomRError  	= true,
        cellError   	= true,
        dateError  		= true,
        noPerError  	= true,
        heureError  	= true,
        msgRError    	= true;

    

    $('.nomR').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            nomRError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            nomRError = false;
        }
      
    });


    $('.prenomR').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            prenomRError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            prenomRError = false;
        }
      
    });


    $('.cell').blur(function () {

        if ($(this).val().length <= 9) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            cellError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            cellError = false;
        }
      
    });

    $('.date_reserver').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            dateError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            dateError = false;
        }
      
    });

    $('.no_perssonne').blur(function () {

        if ($(this).val().length = 0) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            noPerError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            noPerError = false;
        }
      
    });

    $('.heure').blur(function () {

        if ($(this).val().length <= 2) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            heureError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            heureError = false;
        }
      
    });


    $('.msgR').blur(function () {

        if ($(this).val().length <= 19) {
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(500).end().find('.asterisx').fadeIn(500);
            msgRError = true;

        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(500).end().find('.asterisx').fadeOut(500);
            msgRError = false;
        }
        
    });
    
    $('.reservation-form').submit(function (e) {
        if (nomRError === true || prenomRError === true || cellError === true || dateError === true || noPerError === true || heureError === true || msgRError === true) {
            e.preventDefault();
            $('.nomR, .prenomR, .cell, dateError, .no_perssonne, .heure, .msgR').blur();
        }
        
    });


});

