$(document).ready(function(){
    
    $('#form').on('submit', function(e){
        //J'empêche le rechargement initial de la page :
        e.preventDefault();
        insertEmploye()
        function insertEmploye(){
        // Je récupère les données du formulaire :
        var params ={
            'prenom':$('#prenom').val(),
            'nom':$('#nom').val(),
            'sexe':$('#sexe').val(),
            'service':$('#service').val(),
            'salaire':$('#salaire').val()
        };
        console.log(params);

        //on tranmet les info dans le fichier de traitement ajax.php

            $.post('ajax.php', params, function(retour){
                console.log(retour);
                if(retour.validation == "OK"){
                    $('#msg').html('<span> Les données ont bien été enregistré !</span>');
                }else{
                    $('#msg').html('<span> Les données n\'ont pas pus être enregistré </span>');
                }
                
                
            },'json');//FIN $.post('#form', params, function(response)
        }

    }); //FIN $('#form').on('submit', function(e)
}); //FIN $(document).ready(function()