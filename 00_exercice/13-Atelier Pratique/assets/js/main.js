$(function(){

    // -- 1. Ecouter l'évènement à l'envoie :
    //fonction pour controler Emeil et tel :
    $('#monFormulaire').on('submit',function(e){
        e.preventDefault();

        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
        var validateTel = tel => {
            var telReg = new RegExp("(0|\\+33|0033)[1-9][0-9]{8}");
            return telReg.test(tel);
        }
    // Récupération de la saisie de l'internaute :
    const nomPrenom         = $('#nomPrenom').val();
    const email             = $('#email').val();
    const phone             = $('#phone').val();
    const subject           = $('#subject').val();
    const comments          = $('#comments').val();
    // console.log(email);
    // Condition de vérification des champs :
    if(nomPrenom === "" || !validateEmail === email || !validateTel === phone || subject === "" || comments === ""){
        // alert('je suis le IF');
        // $('<div class="alert" style="background-color:red;color:#fff">Veuillez saisir tous les champs ! </div>').hide();
        $(this).prepend(`<div class="alert alert-danger">Veuillez saisir tous les champs ! </div>`);

    }else {
        // alert('je suis le ESLSE');
        $(this).hide();
        $(this).replaceWith(`<div class="alert alert-success">Votre demande à bien été enregistré ! </div>`);
    }


    });// FIN  $('#monFormulaire').on('submit',function()
})//FIN $(function()