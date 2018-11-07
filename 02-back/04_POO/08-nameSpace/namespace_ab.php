<?php
//Namespace permet d'y stocker des méthodes et des classes
namespace A{

    function ville(){
        return 'Paris';
    }
    function strlen(){
        return 'fonction strlen de A';
    }
}
//-------------------------------------
namespace B{
    function ville(){
        return 'Nantes';
    }
    function strlen(){
        return 'fonction strlen de B';
    }
}
// echo A\ville();
// echo B\ville();
// Il ne faut pas mettre de code  après avoir défini des namespace,  cela engendre une erreur  !
//Pour faire appel à nos namespace, il faut créer un autre fichier, un fichier d'appel