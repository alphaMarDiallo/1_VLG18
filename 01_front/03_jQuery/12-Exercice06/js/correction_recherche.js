$(function(){

// -- 1. Ecoutez la saisie de l'utilisateur :
    $('#search').on('change',function(){
        // -- 2. Récupérer la valeur saisie : 
        const search = $(this).val();
        // console.log(search);

        // -- 3. Récupérer la liste des contacts depuis l'API:
        
        //on fait remonter le resultat de la precedante rechehceh avant la boucle.
        $('.resultat').slideUp();
        // On vide le contenu de ".resultat", à chaque recherche il va vider la précédente recherche avant de faire une nouvelle boucle.
        $('.resultat').empty();

        $.ajax('https://jsonplaceholder.typicode.com/users').done(function(users){
            console.log(users);
            // --4. On parcour le tableau de l'utilisateurs:
            for(let i = 0; i < users.length; i++ ){
                // console.log(users[i]);
                //  -- 5. Récupération de l'utilisateur :
                var user = users[i];
                // --6. Je filtre mon tableau
                if(search === users[i].name.toUpperCase() || search === users[i].username.toUpperCase() || search === users[i].email || search === users[i].phone){
                    // return true;
                   $(`
                    <div class="membre">
                        <div class="membre_informations">
                            <p>Nom Complet :${users[i].name}</p>
                            <p>Username :${users[i].username}</p>
                            <p>Email :${users[i].email}</p>
                            <p>Téléphone :${users[i].phone}</p>
                        </div>
                    </div>
                    `).appendTo($('.resultat'));
                }// -- FIN  if
            } // -- FIN  for
            $('.resultat').unmark().mark(search);
            $('.resultat').slideDown();    
        });// -- FIN  $.ajax

    });// -- FIN $('search'.on('',function() 
});// -- FIN $(function()