/********************* LE CHAINAGE DE METHODE AVEC JQUERY *********************/

// $(function(){
//     console.log($('div'));

//     // Je cache les DIV de ma page HTML
//     $('div').hide('slow', function(){
//         /* 
//         La methode hide() de jQuery :
//             - est une animation
//             - s'applique sur tous les éléments ciblés avec mon sélecteur
//             =====
//             A la fin du hide() on ajouute pour voir une alert()
//         */

//     //changer la couleur de des DIV
//     // $('div').css('background','green');
//     // $('div').css('color','red');
//     // $('div').show('slow');

//     $('p').hide(1000).css('color','blue').css('font-size','30px').delay(2000).show(500);
    
//     }); //--fin de hide()
// alert('fin du hide');
// });//--$(function()

$(function(){
    console.log($('div'));
    $('div').hide('slow',function(){
        /**
         * La methode hide() de jquery
         *  - est une animation
         * - s'applique sur tous les éléménts ciblés avec mon sélécteur
         * ===
         * a la fin de hide() onajoute pour voir une alert()
        */

    //    $('div').css('background', 'green');
    //    $('div').css('color', 'red');
    //    $('div').show('slow');

        $('p').hide(1000).css('color','blue').css('font-size','30px').delay(2000).show(500);


    }); //fin de hide()
    // alert("fin du hide() !");
    
}); // -- fin de $()