$(document).ready(function () {
    //Le code suivant sera exécuté après chargement de la page 

    $("#submit").click(function (event) {
        event.preventDefault(); // bloque le chargement initial
        insertEmploye(); // On execute une fonction

    });

    function insertEmploye() {

        //1 recupérer les info du formulaire(tableau json)
        var params = {
            'prenom': $("#prenom").val(), //valeur saisie dans le champ prenom
            'nom': $("#nom").val(), //valeur saisie dans le champ nom
            'sexe': $("#sexe").val(), //valeur saisie dans le champ sexe
            'service': $("#service").val(), //valeur saisie dans le champ service
            'salaire': $("#salaire").val() //valeur saisie dans le champ salaire
        };
        //console.log(params);

        $.post('ajax.php', params, function (response) {
            console.log(response);
            if (response.validation == "OK") {
                $('#retour').html('<span class="alert alert-success">Félicitation, l\'employé est enregistré</span>');

                //on réinitialise les champs :
                $('#prenom').val("");
                $('#nom').val("");
                $('#sexe').val("m");
                $('#salaire').val("");
                $('#service').val("");
            } else {
                $('#retour').html('<span class="alert alert-danger">Un problème est survenu lors de l\'enregistrement</span>');

            }
        }, 'json');
        //2 lancer un fichier.php (ajax.php) et lui transmettre les données
        //3 Afficher la réponse et vider le formulaire.



    } //FIN function insertEmploye()


}); //FIN $(document).ready(function ()