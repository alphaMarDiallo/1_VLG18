$(function(){

// -- 1. Récupérer les articles de l'API
    $.ajax('https://jsonplaceholder.typicode.com/posts')
    .done(function(articles){

    //console.log(articles);
        // --2. Je parcours les articles et je les affiches sur la page
        $.each(articles,function(index, article){
        //vérification dans ma console
        // console.log(index +' '+article.title);

            //Affichage de la page
            $(`<section>
            <header>
                <h1>${article.title}</h1>
            </header>
            <article>
                ${article.body}
            </article>
            </section>
            `).appendTo($('main'));

            // -- Récupérer uniquement 10 articles
            if(index === 9){
                return false;
            }

        });//fin  $.each

    });// fin  $.ajax
    // -- 4. BONUS
    $("#markJS").on('input',function(){
        const keyword = $(this).val();
        $('section').unmark().mark(keyword);
    });
});// fin $(function()