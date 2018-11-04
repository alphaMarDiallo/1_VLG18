/************************************************** 
LES SELECTEURS D'ENFANTS JQUERY
**************************************************/
$(function(){

    l = e => console.log(e);

    //-- Je souhaite sélectionner toutes les div de ma page
    l($('div'));

    //-- Je souhaite sélectionner la balise nav de ma page
    l($('nav'));
    //l($('#menu'));

    //-- En partant du menu, je souhaites, tous les éléments descendant direct (enfants) qui sont dans "nav"
    l($('#menu').children());

    //-- Parmi ces descendants, uniquement les ul
    l($('#menu').children('ul'));

    //--En partant du "ul" je souhaite récupérer tous les éléments "li"
    l($('#menu').children('ul').find('li'));
    // l($('#menu').find('li'));

    //--EJe souhaite récupérer UNIQUEMENT le 2ème élément "li"
    l($('#menu').find('li').eq(1));

    //--Je souhaite connaitre le voisin immédiat de mon menu 
    l($('#menu').next());
    l($('#menu').next().next()); //le voisin du voisin
    l($('#menu').prev()); //le voisin d'avant
    l($('#menu').parent()); //les parants

});