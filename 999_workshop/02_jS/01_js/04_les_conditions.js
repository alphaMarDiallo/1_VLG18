// alert('JS OK');
/* -- 1 - Structure de base IF */
/* -- 2 - IF...ELSE */
/* -- 3 - IF...ELSEIF...ELSE */



/* -- 1 - Structure de base IF */
if(true){// par défaut le vérifie si la condition est VRAIE (true)
    /* ..code... */
}

var nb1 = 99;
if(nb1 < 100){
    console.log(nb1 + ' est plus petit que 100 ');
}

/* -- 2 - IF...ELSE */
if(true){// par défaut le vérifie si la condition est VRAIE (true)
    /* ..code si condition VRAIE... */
}else { 
    /* ..code si condition FAUSSE... */
}

var nb2 = 199;
if( nb2 < 500){
    console.log(nb2 + ' est plus petit que 500');
} else {
    console.log(nb2 + ' est plus grand que 500');
}

/* -- 3 - IF...ELSEIF...ELSE */
if(true){// par défaut le vérifie si la condition est VRAIE (true)
    /* ..code si condition VRAIE... */
} else if (true){ 
    /* ..code si condition 1 est FAUSSE ET la 2 est VRAIE... */
} else {  
    /* ..code si condition 1 ET 2 sont FAUSSES... */
}

var nb4 = 50;
if(nb4 < 50){
    console.log(nb4  + ' plus petit que 50');
} else if (nb4 > 50){
    console.log(nb4  + ' plus grand que 50');
} else {
    console.log(nb4 + ' est égal à 50');
}