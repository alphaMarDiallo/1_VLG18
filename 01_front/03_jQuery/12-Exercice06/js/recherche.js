$(function(){
    // -- 1. Récupération API :
    $.ajax('https://jsonplaceholder.typicode.com/users')
    .done(function(users){
        // console.log(articles);
        $('#search').on('change',function(){
            //Je parcours mon tableau : 
                // console.log(index +' '+article.name);
            for(let i = 0; i < users.length; i++){
                //Vérifie si l'élément exist
                const search = $('#search').val().toUpperCase();
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
                    // alert('Tout bon');
                }
            } // -- for
        })// -- FIN $('search').on('input',function 
    });// -- FIN $.ajax
   

});// -- FIN $(function()