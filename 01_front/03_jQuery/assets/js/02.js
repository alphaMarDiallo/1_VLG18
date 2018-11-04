/*********************** LES SELECTEURS JQUERY ***********************/

//  -- Format => $('selecteur);
//  -- en JS => document.getElementsByTagName('balise'); => en Jq => $('balise)
//  -- en JS => document.getElementById('id');=> en Jq => $('.classe)
//  -- en JS => document.getElementsByClassName('classe');=> en Jq => $('#id)


//  -- en JS => document.querySelector('balise'); => en Jq => $('balise)
//  -- en JS => document.querySelector('.classe');=> en Jq => $('.classe)
//  -- en JS => document.querySelector('#id');=> en Jq => $('#id')
    //le query selecteu ne ramène aucun tableau, seulement le premier élément ciblé trouvé dans lma page.
$(function(){
    l = e => console.log(e);
    // log('Hello');

// -- Sélectionner les SPAN

// en JS
console.log(document.getElementsByTagName('span'));

// en JQUERY
console.log($('span'));

//  -- Sélectionner le menu par son ID

// en JS
console.log(document.getElementById('menu'));

// en JQUERY
console.log($('#menu'));

//  -- Sélectionner le par la classe

// en JS
console.log(document.getElementsByClassName('MaClass'));

// en JQUERY
console.log($('.MaClass'));

//  -- Sélectionner un élément de ma page par son attribut

// en JS
console.log(document.getElementsByClassName('MaClass'));

// en JQUERY
console.log($('[href="#"]'));

});

