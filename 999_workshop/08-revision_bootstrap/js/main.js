$(function(){
    //Récupérartion des valeurs
    const nom = $('#nom');
    const prenom = $('#prenom');
    const adresse = $('#adresse');
    const email = $('#email');
    const pays = $('#pays');
    // const submit = $('#submit');

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    $('#monFormulaire').on('submit', function(e){
        e.preventDefault();
        //Vérification des champs du formulaire
        if(nom.val() === "" ||prenom.val() === "" || adresse.val() === "" || email.val() === !validateEmail || pays.val() === "Pays"){
            $(this).prepend(`
            <div class="alert alert-danger">
            Tous les champs doivent être saisie
            </div>
            `);
            // $('#button').hide();
            $('#button').prop(disable,true);
    
        }else{
            $(this).replaceWith(`
            <div class="alert alert-success">
            Enregistré !
            </div>
        `);
        }// FIN  if

    });// FIN  $('#monFormulaire').on('submit', function()

});// FIN $(function()