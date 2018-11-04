/********************************************************************* 
                    LA DISPONIBILITE DU DOM

    A partir du momrnt où mon DOM, c'est à dire l'ensemble de l'arborescence de ma page HTML est complètement chargé ; je peux utiliser jQuery.

    Je vais mettre l'ensemble de mon code dans une fonction qui sera appelée AUTOMATIQUEMENT !  par jQuery lorsque le DOM sera entièrement défini.

    3 façon de faire  : 

 *********************************************************************/
 // -- 1er methode
 jQuery(document).ready(function(){
    /* Ici, le dom est entièrement chargé; je peux procéder à mon code */

    // --
    // --
    // --
    // --
 });

// -- 2ème methode
 $(document).ready(function(){});

// -- 3ème methode
 $(function(){

 });

 // -- 4ème methode
 //pas reconnu par tout les navigateur   
 $(() => {
    // alert('Bienvenue dans ce cours JD !');

    //__ En JS 
    document.getElementById('textEnJQ').innerHTML='<strong>Mon text en JS</strong>';

    //-- En jQ
    $('#textEnJQ').html('Mon texte en JQ !');
 })
