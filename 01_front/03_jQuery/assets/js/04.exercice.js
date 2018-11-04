// $(function(){
//     $('#MonFormulaire').click('submit', function(e){
//         e.preventDefault();
//         // $('form').hide('', function(e){
//         //     e.preventDefault();

//         // });
//         // $('form').submit();
//     });  
// });

/********************************************************************* 
                            COREECTION

 $('#MonFormulaire').on('submit', function(e){
     //stopper la redirection
        e.preventDefault();
    // Cache le formulaire
        $('#MonFormulaire').hide();

    // Créer une balise : 
        a/ $('<p>').append('Bonjour' +$('nomcomplet').val()+ '!' ).appendTo('body');

        
    });  
*********************************************************************/

$('#MonFormulaire').on('submit', function(e){
    //stopper la redirection
       e.preventDefault();
   // Cache le formulaire
       $('#MonFormulaire').hide();

   // Créer une balise : 
     $('<p>').append('Bonjour ' +$('#nomcomplet').val()+ ' !' )
     .appendTo('body');       
   });  